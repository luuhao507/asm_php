<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'id_sp';
    protected $fillable = [
        'ten_sp',
        'gia',
        'hinh',
        'mo_ta',
        'luot_xem',
        'id_dm'
    ];
}
