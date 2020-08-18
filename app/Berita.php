<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = [
        'foto','judul','subjudul','isi','status',
        'created_at','updated_at','created_by','updated_by'
    ];
    public $timestamps = true;
}
