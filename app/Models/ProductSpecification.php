<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    use HasFactory;
    protected $table = 'product_specification';
    protected $fillable =
           ['category_id',
            'product_id',
            'specification_id',
            'filterable',
            'specific_type',
            'detail_page',
            'display_order',
            'value'];
}
