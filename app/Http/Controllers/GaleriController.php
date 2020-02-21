<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use DB;
use Auth;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_galeri')
            ->paginate(15);
            return view('admin.galeri.galeri',compact('data'));
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
        $file = $request->file('logo');
        if ($file!='') {
            $file = $request->file('logo');
            $extension=$file->getClientOriginalExtension();
            $destinationPath = 'assets/images/galeri';
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('logo')->move($destinationPath, $fileName);
            $data = Galeri::insert([
                'foto' => $fileName,
                'desc' => $request->deskripsi,
                'created_by' => $nama
            ]);
        }else{
            $data = Galeri::insert([
                'desc' => $request->deskripsi,
                'created_by' => $nama
            ]);
        }
        return redirect()->route('galeri.index')->with('status','Data Berhasil Ditambah');
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
        $data = Galeri::where('id_galeri',$id)->delete();
        return redirect()->route('galeri.index')->with('status','Data Berhasil dihapus');
    }
}
