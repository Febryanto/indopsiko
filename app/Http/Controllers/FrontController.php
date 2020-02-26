<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use DB;
use App\Kontak;
use App\Klien;
use App\Berita;
use App\Proper;
use App\Pelamar;
use App\Pengumuman;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class FrontController extends Controller
{
    public function index()
    {
        $data = Proper::all();
        $klien = Klien::all();
        $galeri = DB::table('tbl_galeri')->paginate(4);
        return view('dashboard.home',compact('data','galeri','klien'));
    }
    
    public function getBerita()
    {
        $data = Berita::paginate(15);
        return view('berita.berita',compact('data'));
    }
    
    public function dtlBerita($id)
    {
        $data = Berita::where('id_berita',$id)->get();
        return view('berita.dtlberita',compact('data'));
    }
    public function getProfil()
    {
        return view('profil.profil');
    }
    public function getLowongan()
    {
        $data = DB::table('lowongan AS l')
        ->leftjoin('klien AS k','k.id_klien','=','l.id_klien')
        ->select('l.*','k.id_klien','k.nama_perusahaan')
        ->paginate(15);
        $klien = Klien::all();
        // dd($data);
        return view('lowongan.lowongan',compact('data','klien'));
    }
    public function getDetailPengumuman($id)
    {
        $data = Pengumuman::where('id_pengumuman',$id)->get();
        // dd($data);
        return view('pengumuman.dtlPengumuman',compact('data'));
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
        $posisi2 = $request->posisi2;
        if ($posisi2!='') {
            $file = $request->file('cv');
            $extension=$file->getClientOriginalExtension();
            $destinationPath = 'assets/dokumen';
            $fileName = $request->nama.rand(11111, 99999) . '.' . $extension;
            $request->file('cv')->move($destinationPath, $fileName);
            $data = Pelamar::insert([
                'cv' => $fileName,
                'nama_ibu_kandung' => $request->nama_ibu_kandung,
                'nama_lengkap' => $request->nama,
                'nik' => $request->nik,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'npwp' => $request->npwp,
                'pendidikan' => $request->pendidikan,
                'posisi' => $request->posisi2,
                'sim' => $request->sim,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'created_by' => $request->nama,
            ]);
        }else{
            $data = Pelamar::insert([

                'nama_ibu_kandung' => $request->nama_ibu_kandung,
                'nama_lengkap' => $request->nama,
                'nik' => $request->nik,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'npwp' => $request->npwp,
                'pendidikan' => $request->pendidikan,
                'posisi' => $request->posisi,
                'sim' => $request->sim,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'created_by' => $request->nama,
            ]);
        }
        return redirect()->route('getLowongan')->with('status','Data anda telah kami simpan');
    }

    public function getKlien()
    {
        $data = Klien::paginate(16);
        // dd($data);
        return view('klien.klien',compact('data'));
    }
    public function getService()
    {
        return view('service.service');
    }
    public function getKontak()
    {
        return view('kontak.kontak');
    }
    public function storeKontak(request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'desc' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('getKontak')
                        ->withFail('Error Message');
        }        
    
    $data = Kontak::insert([
        'nama' => $request->nama,
                'email' => $request->email,
                'desc' => $request->desc,
                'created_by' => $request->nama
    ]);
    return redirect()->route('getKontak')->with('status','terima kasih telah menghubungi kami,pesan anda telah kami simpan ');
    
}
}