<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    protected $table = 'hoadon';
    protected $primaryKey = 'id_hd';
    protected $fillable = [
        'tong_tien',
        'trang_thai',
        'id_kh'

    ];
    protected $attributes = [
        'trang_thai' => 'Chờ xác nhận'
    ];
}
