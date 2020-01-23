<?php

namespace App\Exports;

use App\Pelamar;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class PelamarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $data = DB::table('pelamar as a')

        ->select('a.posisi','a.nama_lengkap','a.nik','a.npwp','a.pendidikan','a.email','a.no_hp','a.sim','a.tempat_lahir','a.tanggal_lahir','a.jenis_kelamin','a.nama_ibu_kandung','a.cv','a.alamat','a.created_at','a.updated_at')
        ->get();
    }
}
