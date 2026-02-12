<?php

use App\Models\Product; // มั่นใจว่าคุณสร้าง Model Product ไว้แล้ว
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();
    return view('welcome', ['products' => $products]);
});