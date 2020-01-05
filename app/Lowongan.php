<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';
    protected $fillable = [
        'jabatan','status', 'deskripsi', 'dibuka','ditutup',
        'created_at','updated_at','created_by','updated_by'
    ];

    public function klien()
    {
        return $this->belongsTo('App\Klien', 'id_klien','id_klien');
    }



}
