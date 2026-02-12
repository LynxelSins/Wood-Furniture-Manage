<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; // ชื่อตารางใน Supabase
    protected $primaryKey = 'productid'; // คีย์หลักตาม ER Diagram
    public $incrementing = false; // เพราะ productid เป็น string (P00004)
    public $timestamps = false; // ป้องกัน Error column "updated_at" does not exist

    protected $fillable = [
        'productid', 'productname', 'producttype', 
        'categories', 'woodtype', 'price', 'unit', 'stock'
    ]; 
}