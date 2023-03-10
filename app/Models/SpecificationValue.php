<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationValue extends Model
{
    use HasFactory;
    protected $table= 'specification_values';
    protected $fillable = ['title', 'specification_id', 'display_order', 'type_id',];
}
