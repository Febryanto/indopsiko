<?php

namespace App\Exports;

use App\Pelamar;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PelamarExport implements FromCollection, WithHeadings
{
    /** 
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $data = DB::table('pelamar as a')

        ->select('a.created_at','a.nama_lengkap','a.posisi','a.nik','a.npwp','a.pendidikan','a.email','a.no_hp',
        'a.sim','a.tempat_lahir','a.tanggal_lahir','a.jenis_kelamin','a.nama_ibu_kandung','a.cv',
        'a.alamat')
        ->orderBY('created_at','DESC')
        ->get();
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Nama Lengkap',
            'Posisi',
            'NIK',
            'NPWP',
            'Pendidikan',
            'E-mail',
            'No HP',
            'SIM',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Ibu Kandung',
            'CV',
            'Alamat'
                ];
    }

}
