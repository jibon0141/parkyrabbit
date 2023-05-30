<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table="inventories";
    protected $primaryKey='id';
    protected $fillable = [
        'product_type','product_id','previous_stock','current_stock',
      
   
    ];
}
