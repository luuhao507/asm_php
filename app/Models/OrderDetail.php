<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'hoadonchitiet';
    protected $primaryKey = 'id_hdct';
    protected $fillable = [
        'don_gia',
        'id_hd',
        'id_sp'

    ];
}
