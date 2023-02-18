<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinhvien extends Model
{
    use HasFactory;
    protected $fillable=[
        'MaSV',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'SoDT',
    ];
     protected $table='sinhviens';
}
