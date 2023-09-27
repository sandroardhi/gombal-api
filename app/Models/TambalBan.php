<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambalBan extends Model
{
    use HasFactory;

    protected $table = 'tb_tambal_ban';

    protected $fillable = [
        'nama',
        'deskripsi',
        'lng',
        'ltd',
        'penambal_id'
    ];
}
