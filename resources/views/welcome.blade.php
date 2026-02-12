<!DOCTYPE html>
<html>
<head>
    <title>Furniture System - Test</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <a href="{{ route('product.store') }}" 
        style="background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block; margin-bottom: 20px;">
        ➕ เพิ่มสินค้าทดสอบ (เก้าอี้ไม้สักทอง)
    </a>
    <h1>รายการสินค้าจาก Supabase</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>ชื่อสินค้า</th>
            <th>ประเภทสินค้า</th>
            <th>หมวดหมู่</th>
            <th>ชนิดไม้</th>
            <th>ราคา</th>
            <th>จำนวน</th>
        </tr>
        @foreach ($products as $item)
        <tr>
            <td>{{ $item->productid }}</td>
            <td>{{ $item->productname }}</td>
            <td>{{ $item->producttype }}</td>
            <td>{{ $item->categories }}</td>            
            <td>{{ $item->woodtype }}</td>
            <td>{{ number_format($item->price, 2) }}</td>
            <td>{{ number_format($item->unit, ) }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>