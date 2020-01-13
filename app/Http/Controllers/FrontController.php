<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Klien;
use App\Pelamar;
class FrontController extends Controller
{
    public function getLowongan()
    {
        $data = DB::table('lowongan AS l')
        ->leftjoin('klien AS k','k.id_klien','=','l.id_klien')
        ->paginate(15);
        $klien = Klien::all();
        // dd($data);
        return view('lowongan.lowongan',compact('data','klien'));
    }
    public function getLowonganbyid($id)
    {
        $data = DB::table('lowongan AS l')
        ->leftjoin('klien AS k','k.id_klien','=','l.id_klien')
        ->select('l.*','k.nama_perusahaan','k.email','k.telp')
        ->where('id_lowongan',$id)->get();
        $klien = Klien::all();
        // dd($data);
        return view('lowongan.detail',compact('data','klien'));
    }
    public function applylowongan(request $request)
    {
        $id_lowongan = $request->id_lowongan;
        $file = $request->file('cv');
        if ($file!='') {
            $file = $request->file('cv');
            $extension=$file->getClientOriginalExtension();
            $destinationPath = 'assets/dokumen';
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('cv')->move($destinationPath, $fileName);
            $data = Pelamar::insert([
                'cv' => $fileName,
                'id_lowongan' => $request->id_lowongan,
                'nama_lengkap' => $request->nama,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'npwp' => $request->npwp,
                'pendidikan' => $request->pendidikan,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'medsos' => $request->medsos,
                'alamat' => $request->alamat,
                'created_by' => $request->nama
            ]);
        }else{
            $data = Pelamar::insert([

                'id_lowongan' => $request->id_lowongan,
                'nama_lengkap' => $request->nama,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'npwp' => $request->npwp,
                'pendidikan' => $request->pendidikan,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'medsos' => $request->medsos,
                'alamat' => $request->alamat,
                'created_by' => $request->nama
            ]);
        }
        return redirect()->route('getLowonganbyid',$id_lowongan)->with('alert-success','Data Anda Berhasil Disimpan');
    }

    public function getKlien()
    {
        $data = Klien::paginate(15);
        // dd($data);
        return view('klien.klien',compact('data'));
    }
}
