<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _daftar_parfum extends Model
{
    protected $table = '_daftar_parfum';

    protected $fillable = ['nama_parfum','jenis_parfum', 'Aroma' , 'harga' , 'ukuran', 'poster'];
}
