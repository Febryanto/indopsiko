<?php

namespace App\Exports;

use App\Pelamar;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use PhpOffice\PhpSpreadsheet\Cell\Cell;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class PelamarExport extends DefaultValueBinder implements FromCollection, WithHeadings , WithEvents ,  WithCustomValueBinder
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

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }

    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }
        else{
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }

        // else return default behavior
        return parent::bindValue($cell, $value);
    }
}
