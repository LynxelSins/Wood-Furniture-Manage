<?php

use App\Models\Product; // มั่นใจว่าคุณสร้าง Model Product ไว้แล้ว
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();
    return view('welcome', ['products' => $products]);
});


// เมื่อเข้า URL /insert ให้ไปเรียกฟังก์ชัน store ใน ProductController
Route::get('/insert-product', [ProductController::class, 'store'])->name('product.store');
