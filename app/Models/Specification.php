<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;
    protected $table = 'specifications';
    protected $fillable = ['title', 'category_id','display_order', 'specific_type','has_option'];
    protected $hidden = ['pivot'];

}
