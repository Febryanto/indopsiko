<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PelamarExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response as FacadeResponse;
use App\Pelamar;
use Illuminate\Support\Facades\File;
use PDF;
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
        $data = DB::table('pelamar as a')

        ->where('a.id_pelamar',$id)
        ->select('a.email as email_lamar','a.*')
        ->get();
        return view('admin.pelamar.detail_pelamar',compact('data'));
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
            return response()->download($file, $newName, $headers);
    }

    public function getExcel()
    {
        return Excel::download(new PelamarExport, 'pelamar.xlsx');
    }

    public function getPdf()
    {
        $data = DB::table('pelamar as a')
        ->select('a.id_pelamar','a.posisi','a.nama_lengkap','a.nik','a.npwp','a.pendidikan','a.email','a.no_hp','a.sim','a.tempat_lahir','a.tanggal_lahir','a.jenis_kelamin','a.nama_ibu_kandung','a.cv','a.created_at','a.updated_at')
        ->get();
        $pdf = PDF::loadview('admin.pelamar.data_pelamar',['data'=>$data])->setPaper('legal', 'landscape');;
    	return $pdf->stream();
    }
}
