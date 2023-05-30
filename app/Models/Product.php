<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

  
    protected $table="products";
    protected $primaryKey='id';
    protected $fillable = [
        'product_name','supplier_name','product_image','short_description',
        'long_description','original_price',
        'sale_price',
   
    ];
}
