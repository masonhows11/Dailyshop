<div>
    @section('admin_title')
        دسته بندی ها
    @endsection
    <div class="container-fluid">
        <div class="row mt-5 category-section">

            <!-- creat category -->
            <div class="col-sm-6 category-create">

                <form wire:submit.prevent="storeCategory">
                    <div class="mb-3 mt-3">
                        <label for="title" class="form-label">عنوان دسته بندی به فارسی :</label>
                        <input type="text" wire:model.lazy="title_persian"
                               class="form-control"
                               id="title">
                    </div>
                    @error('title_persian')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">عنوان دسته بندی به انگلیسی:</label>
                        <input type="text" wire:model.lazy="title_english" dir="ltr"
                               class="form-control text-left" id="name">
                    </div>
                    @error('title_english')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror


                    <div class="mb-3 mt-3">
                        <label for="parent" class="form-label">انتخاب دسته بندی والد:</label>
                        @if($edit_mode == false)
                            <select class="form-control" wire:model.lazy="parent" id="parent">
                                <option value="null">فاقد دسته بندی</option>
                                @foreach($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->title_persian }}</option>
                                @endforeach
                            </select>
                        @else
                            <select class="form-control" wire:model.lazy="parent" id="parent">
                              <option value="null">فاقد دسته بندی</option>
                                @foreach($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->title_persian }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>


                    <div class="mb-3 mt-3">
                        <button type="submit" class="btn btn-success">ذخیره</button>
                        <button type="button" wire:click="create_mode" class="btn btn-primary">دسته بندی جدید</button>
                    </div>
                </form>

            </div>
            <!-- list categories -->
            <div class="col-sm-6 category-list">
                @if($categories->isEmpty())
                    <div
                        class="alert d-flex justify-content-center border border-1 border-secondary bg-white    no-categories">
                        <p class="text-center my-auto">دسته بندی وجود ندارد.</p>
                    </div>
                @else
                    <div class="category-content">
                        @foreach($category_tree as $category)
                            <div id="accordion">

                                <div class="card mt-4">

                                    <div class="card-header item-category bg-secondary">

                                        <div class="item-category-title">
                                            <a class="btn my-auto text-black" href="#collapse{{ $category->id }}"
                                               data-bs-toggle="collapse"><h6>{{ $category->title_persian }}</h6></a>
                                        </div>

                                        <div class="item-category-actions">
                                            @if($category->parent_id == null)
                                                <a href="javascript:void(0)"
                                                   wire:click.prevent="editCategory({{ $category->id}})" class="mx-4"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0)"
                                                   wire:click.prevent="deleteConfirmation({{ $category->id }})"><i
                                                        class="fas fa-trash"></i></a>
                                            @else
                                                <a href="javascript:void(0)"
                                                   wire:click.prevent="editCategory({{ $category->id}})" class="mx-4"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0)"
                                                   wire:click.prevent="detachCategory({{ $category->id }})"
                                                   class="mx-4"><i class="fa fa-unlink"></i></a>
                                                <a href="javascript:void(0)"
                                                   wire:click.prevent="deleteConfirmation({{ $category->id }})"><i
                                                        class="fas fa-trash"></i></a>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="collapse show" id="collapse{{$category->id}}">
                                    @if(!$category->chlidren)
                                        @include('admin.category.child_category',['child'=>$category->children])
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>


        </div>
    </div>

</div>
@push('dash_custom_scripts')
    <script type="text/javascript">
        window.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
                title: 'آیا مطمئن هستید این ایتم حذف شود؟',
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بله حذف کن!',
                cancelButtonText: 'خیر',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed')
                }
            });
        })
    </script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        window.addEventListener('show-result', ({detail: {type, message}}) => {
            Toast.fire({
                icon: type,
                title: message
            })
        })

        @if(session()->has('warning'))
        Toast.fire({
            icon: 'warning',
            title: '{{ session()->get('warning') }}'
        })
        @endif
    </script>



@endpush
