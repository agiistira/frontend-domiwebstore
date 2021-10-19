<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo('App\Product','product_id','id');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Pesanan','pesanan_id','id');
    }
}
