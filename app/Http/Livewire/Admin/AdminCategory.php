<?php

namespace App\Http\Livewire\Admin;


use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;

class AdminCategory extends Component
{
    public $title_persian;
    public $title_english;
    public $parent;
    public $delete_id;
    public $category_id;
    public $edit_mode = false;

    protected function rules()
    {
        return [
            'title_english' =>
                ['required',
                    Rule::unique('categories')->ignore($this->category_id),
                    'min:2',
                    'max:30',
                    'alpha_dash'],
            'title_persian' =>
                ['required',
                    Rule::unique('categories')->ignore($this->category_id),
                    'min:2',
                    'max:30'],
        ];
    }

    protected $messages = [
        'title_english.required' => 'عنوان دسته بندی را به انگلیسی وارد کنید.',
        'title_english.min' => 'حداقل ۲ کارکتر.',
        'title_english.max' => 'حداکثر ۵۰ کاراکتر.',
        'title_english.unique' => 'عنوان وارد شده تکراری است.',

        'title_english.alpha_dash' => ' فقط حروف ، خط فاصله ، زیر خط و به انگلیسی وارد کنید.',

        'title_persian.required' => 'عنوان دسته بندی را به فارسی وارد کنید.',
        'title_persian.min' => 'حداقل ۲ کارکتر.',
        'title_persian.max' => 'حداکثر ۵۰ کاراکتر.',
        'title_persian.unique' => 'عنوان وارد شده تکراری است.',

    ];

    public function storeCategory()
    {
        $this->validate();

        try {
            if ($this->edit_mode == false) {
                // for create category
                if ($this->parent != null) {
                    Category::create([
                        'title_persian' => $this->title_persian,
                        'title_english' => $this->title_english,
                        'parent_id' => $this->parent,
                    ]);

                } else {
                    Category::create([
                        'title_persian' => $this->title_persian,
                        'title_english' => $this->title_english,
                    ]);
                }
                $this->title_persian = '';
                $this->title_english = '';
                $this->parent = '';

                $this->dispatchBrowserEvent('show-result',
                    ['type' => 'success',
                        'message' => 'دسته بندی  جدید با موفقیت ایجاد شد']);

            } else {
                // for update category
               if($this->parent === $this->parent)
                {
                    $this->dispatchBrowserEvent('show-result',
                            ['type' => 'warning',
                            'message' => 'یک دسته بندی نمی تواند والد خودش باشد']);
                    session()->flash('warning','یک دسته بندی نمی تواند والد خودش باشد');
                    return redirect()->back();
                }
                if ($this->parent != null) {
                    Category::where('id', $this->category_id)
                        ->update([
                            'title_persian' => $this->title_persian,
                            'title_english' => $this->title_english,
                        ]);
                }
                Category::where('id', $this->category_id)
                    ->update([
                        'title_persian' => $this->title_persian,
                        'title_english' => $this->title_english,
                        'parent_id' => $this->parent
                    ]);
                $this->title_persian = '';
                $this->title_english = '';
                $this->parent = '';

                $this->dispatchBrowserEvent('show-result',
                        ['type' => 'success',
                        'message' => 'دسته بندی با موفقیت بروز رسانی شد']);
                return redirect()->to('/admin/category/index');
            }

        } catch (\Exception $ex) {
            return view('errors_custom.model_store_error');
        }
    }


    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    protected $listeners = [
        'deleteConfirmed' => 'deleteCategory',
    ];

    public function deleteCategory()
    {
        $category = Category::findOrFail($this->delete_id);

        try {
            if ($category->parent_id == null) {
                $this->dispatchBrowserEvent('show-result',
                       ['type' => 'warning',
                        'message' => 'امکان حذف دسته بندی مورد نظر وجود ندارد']);
                return $this->redirect->to('/admin/category/list');
            } else {
                $category->delete();
                $this->dispatchBrowserEvent('show-result',
                    ['type' => 'success',
                        'message' => 'دسته بندی با موفقیت حذف شد']);
                return $this->redirect->to('/admin/category/list');
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'دسته بندی مورد نظر وجود ندارد');
        }
    }

    public function detachCategory($id)
    {
        try {
            $category = Category::find($id);
            if ($category->parent_id != null) {
                $category->parent_id = null;
                $category->save();
                session()->flash('success', 'دسته بندی از والد خود حذف شد.');

            }
        } catch (\Exception $ex) {
            session()->flash('error', 'دسته بندی مورد نظر وجود ندارد');

        }
    }

    public function editCategory($id)
    {
        $this->edit_mode = true;
        try {
            $category = DB::table('categories')
                ->where('id', $id)
                ->first();
            if ($category->parent_id == null) {
                $this->title_persian = $category->title_persian;
                $this->title_english = $category->title_english;
                $this->category_id = $category->id;
                $this->parent = null;
            } else  {

                $this->title_persian = $category->title_persian;
                $this->title_english = $category->title_english;
                $this->category_id = $category->id;
                $this->parent = $category->parent_id;


            }


        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }

    }

    public function render()
    {
        return view('livewire.admin.admin-category')
            ->extends('admin.include.master')
            ->section('admin_main')
            ->with(['category_tree' => Category::tree()->get()->toTree(),
                'categories' => Category::all()]);
    }
}
