<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'danhmuc';
    protected $primaryKey = 'id_dm';
    public $timestamps = false;
    protected $fillable = [
        'ten_dm'
    ];
}
