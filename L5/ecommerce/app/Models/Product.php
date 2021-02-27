<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    //use HasFactory;
     use softDeletes;


    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'price',
        'quantity',
        'short_description',
        'description'
    ]
    ;
}
