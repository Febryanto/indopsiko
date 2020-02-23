<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Klien;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class KlienController extends Controller
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
        $data = Klien::paginate(15);
        // dd($data);
        return view('admin.klien.klien',compact('data'));
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
        $validator = Validator::make($request->all(), [
            'nama_perusahaan' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('klien.index')
                        ->withFail('Error Message');
        }
        $nama = Auth::user()->name;
        $file = $request->file('logo');
        if ($file!='') {
            $file = $request->file('logo');
            $extension=$file->getClientOriginalExtension();
            $destinationPath = 'assets/images/klien';
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('logo')->move($destinationPath, $fileName);
            $data = Klien::insert([
                'logo' => $fileName,
                'nama_perusahaan' => $request->nama_perusahaan,
                'deskripsi' => $request->deskripsi,
                'website' => $request->website,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'telp' => $request->telp,
                'created_by' => $nama
            ]);
        }else{
            $data = Klien::insert([

                'nama_perusahaan' => $request->nama_perusahaan,
                'deskripsi' => $request->deskripsi,
                'website' => $request->website,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'telp' => $request->telp,
                'created_by' => $nama
            ]);
        }
        return redirect()->route('klien.index')->with('status','Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Klien::where('id_klien',$id)->get();
        // dd($data);
        return view('admin.klien.edit_klien',compact('data'));

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
            $destinationPath = 'assets/images/klien';
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('gambar')->move($destinationPath, $fileName);
            $data = Klien::where('id_klien',$id)
                ->update([
                    'logo' => $fileName,
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'deskripsi' => $request->deskripsi,
                    'website' => $request->website,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'telp' => $request->telp,
                    'updated_by' => $nama
                ]);
        }else{
            $data = Klien::where('id_klien',$id)
                ->update([
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'deskripsi' => $request->deskripsi,
                    'website' => $request->website,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'telp' => $request->telp,
                    'updated_by' => $nama
                ]);
        }


    return redirect()->route('klien.index')->with('alert-success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Klien::where('id_klien',$id)->delete();
        return redirect()->route('klien.index')->with('alert-success','Data berhasi dihapus!');
    }
}
