<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'pelamar';
    protected $fillable = [
        'nama_lengkap','nik','no_kk','npwp','pendidikan','email','no_hp','medsos','alamat','cv','created_by','updated_by'
    ];
    protected $dates = ['created_at'];
    protected $dateFormat = 'U';
    public $timestamps = true;
    public function getDateFormat()
    {
      return 'Y-m-d';
    }  


}
