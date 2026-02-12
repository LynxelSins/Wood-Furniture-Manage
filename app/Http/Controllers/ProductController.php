<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function store()
    {
        Product::create([
            'productid' => 'P00004',
            'productname' => 'เก้าอี้ไม้สักทอง',
            'producttype' => 'ชิ้นเดียว',
            'categories' => 'เก้าอี้',
            'woodtype' => 'สัก',
            'price' => 2500.00,
            'unit' => '1'
        ]);

        return "เพิ่มข้อมูลเรียบร้อยแล้ว!";
    }
}
