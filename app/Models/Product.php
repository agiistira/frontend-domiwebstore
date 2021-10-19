<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail','product_id','id');
    }
}
