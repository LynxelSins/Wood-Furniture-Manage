<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product; // <--- เรียกใช้พิมพ์เขียวจากข้างบน
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store()
    {
        Product::create([
            'productid' => 'P00004',
            'productname' => 'เก้าอี้ไม้สักทอง',
            'producttype' => 'ชิ้นเดียว',
            'categories' => 'เก้าอี้',
            'woodtype' => 'สัก',
            'price' => 2500.00,
            'unit' => '1',
            'stock' => 10 // ตรวจสอบว่าใน Supabase มีคอลัมน์นี้แล้ว
        ]);

        return "เพิ่มข้อมูลเรียบร้อยแล้ว!";
    }
}