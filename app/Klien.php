<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klien extends Model
{
    protected $table = 'klien';
    protected $fillable = [
        'nama_perusahaan','deskripsi', 'logo', 'website','email','telp','alamat',
        'created_at','updated_at','created_by','updated_by'
    ];
    public $timestamps = true;
}
