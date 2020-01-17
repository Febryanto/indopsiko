<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadeResponse;
use App\Pelamar;
use Illuminate\Support\Facades\File;
use DB;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pelamar as a')
        ->leftjoin('lowongan as b','b.id_lowongan','=','a.id_lowongan')
        ->leftjoin('klien as c','b.id_klien','=','c.id_klien')
        ->paginate(15);

        return view('admin.pelamar.pelamar',compact('data'));
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pelamar::where('id_pelamar',$id)->first();
        File::delete('assets/dokumen/'.$data->cv);
        Pelamar::where('id_pelamar',$id)->delete();
        return redirect()->route('pelamar.index')->with('status','Data Berhasil dihapus');
    }
    public function getDownload($id)
    {

    //PDF file is stored under project/public/download/info.pdf
        $data = Pelamar::where('id_pelamar',$id)->first();
        $file= public_path(). '/assets/dokumen/'.$data->cv;

            $headers = ['Content-Type: application/pdf'];
            $newName = $data->nama_lengkap.time().'.pdf';
            return response()->download($file, $newName, $headers)->with('status','Data Berhasil didownload');



    }
}
