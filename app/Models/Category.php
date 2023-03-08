<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use Pishran\LaravelPersianSlug\HasPersianSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasFactory;
    use HasFactory,HasRecursiveRelationships,HasPersianSlug;

    protected $table = 'categories';
    protected $fillable = ['title_english','title_persian','slug','parent_id'];

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title_persian')
            ->saveSlugsTo('slug');
    }
    public function getParentKeyName()
    {
        return 'parent_id';
    }
    public function child()
    {
        return $this->HasMany(Category::class,'parent_id');
    }

    public static function getParent($parent_id)
    {
        return  self::where('id',$parent_id)->first();
    }

    // for many to many with products table
    public function products()
    {
        return
            $this->belongsToMany(Product::class,
                'category_product');
    }
}
