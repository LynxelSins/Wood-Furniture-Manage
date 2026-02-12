<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'productid';
    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = ['productid','productname','producttype','categories','woodtype','price','unit','stock'];

}
