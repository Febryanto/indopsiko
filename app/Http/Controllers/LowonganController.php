<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lowongan;
use Auth;
use App\Klien;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use DB;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = DB::table('lowongan AS l')
        ->paginate(15);
        $klien = Klien::all();
        // dd($data);
        return view('admin.lowongan.lowongan',compact('data','klien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = Auth::user()->name;
        $data = Lowongan::insert([
            'perusahaan' => $request->perusahaan,
            'jabatan' => $request->jabatan,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'created_by' => $nama
        ]);
        return redirect()->route('lowongan.index')->with('status','Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('lowongan AS l')
        ->where('id_lowongan',$id)
        ->get();
        $klien = Klien::all();
        return view('admin.lowongan.edit_lowongan',compact('data','klien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama = Auth::user()->name;
        $data = Lowongan::where('id_lowongan',$id)
        ->update([
            'perusahaan' => $request->perusahaan,
            'jabatan' => $request->jabatan,
            'deskripsi' =>$request->deskripsi,
            'status' => $request->status,
            'updated_by' => $nama
        ]);
        return redirect()->route('lowongan.index')->with('alert alert-success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Lowongan::where('id_lowongan',$id)->delete();
        return redirect()->route('lowongan.index')->with('alert-success','Data berhasi dihapus!');
    }
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
}
