<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pishran\LaravelPersianSlug\HasPersianSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory,HasPersianSlug;

    protected $table = 'products';
    protected $fillable = [
        'type_id',
        'user_id',
        'brand_id',
        'title_english',
        'title_persian',
        'slug',
        'code',
        'sku',
        'short_description',
        'full_description',
        'thumbnail_image',
        'is_active',
        'price_type',
        'in_stock',
        'origin_price',
        'sales_price',
        'discount',
        'maximum_orders',
        'seo_desc',
    ];
    protected $hidden = ['pivot'];

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title_persian')
            ->saveSlugsTo('slug');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,
            'category_product');
    }
    public function specifications()
    {
        //        return $this->belongsToMany(Specification::class,
        //            'product_specification',
        //            'product_id',
        //            'specification_id')
        //            ->withPivot(['type_id', 'specific_type', 'filterable', 'detail_page', 'display_order']);
    }

    public function images()
    {
      //  return $this->hasMany(ProductImage::class);
    }

    // relation with productAttribute
    public function attributes()
    {
       // return $this->hasMany(ProductAttribute::class);
    }

    public function rates()
    {
       // return $this->hasMany(Rate::class,'product_id');
    }

    public function comments()
    {
       // return $this->hasMany(Comment::class,'product_id');
    }
}
