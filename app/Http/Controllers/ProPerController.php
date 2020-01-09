<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proper;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ProPerController extends Controller
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
        $data = Proper::all();
        return view('admin.profil.profil',compact('data'));
        // dd($data);
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
        $data = Proper::where('id_profil',$id)->get();
        return view('admin.profil.editprofil',compact('data'));
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
        $file = $request->file('gambar');
        if ($file!='') {
            $file = $request->file('gambar');
            $extension=$file->getClientOriginalExtension();
            $destinationPath = 'assets/images/logos';
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('gambar')->move($destinationPath, $fileName);
            $data = Proper::where('id_profil',$id)
                ->update([
                    'logo' => $fileName,
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'motto' => $request->motto,
                    'website' => $request->website,
                    'email' => $request->email,
                    'telp' => $request->telp,
                    'updated_by' => $nama
                ]);
        }else{
            $data = Proper::where('id_profil',$id)
                ->update([
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'motto' => $request->motto,
                    'website' => $request->website,
                    'email' => $request->email,
                    'telp' => $request->telp,
                    'updated_by' => $nama
                ]);
        }


    return redirect()->route('proper.index')->with('alert-success','Data Berhasil Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
