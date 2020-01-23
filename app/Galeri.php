<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'tbl_galeri';
    protected $fillable = [
        'desc', 'logo',
        'created_at','updated_at','created_by','updated_by'
    ];
}
