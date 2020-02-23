<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class BeritaController extends Controller
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
        $data = Berita::paginate(15);
        return view('admin.berita.berita', compact('data'));
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
            'isi' => 'required',
            'judul' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('berita.index')
                        ->withFail('Error Message');
        }
        $nama = Auth::user()->name;
        $file = $request->file('foto');
        if ($file !='') {
            $file = $request->file('foto');
            $extension=$file->getClientOriginalExtension();
            $destinationPath = 'assets/images/berita';
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('foto')->move($destinationPath, $fileName);
            $data = Berita::insert([
                'foto' => $fileName,
                'judul' => $request->judul,
                'subjudul' => $request->subjudul,
                'isi' => $request->isi,
                'status' => $request->status,
                'created_by' => $nama,
            ]);
        }else{
            $data = Berita::insert([

                'judul' => $request->judul,
                'subjudul' => $request->subjudul,
                'isi' => $request->isi,
                'status' => $request->status,
                'created_by' => $nama,
            ]);
        }
        return redirect()->route('berita.index')->with('status','Data Berhasil Ditambah');
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
        $data = Berita::where('id_berita',$id)->get();
        return view('admin.berita.edit_berita',compact('data'));
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
            $destinationPath = 'assets/images/pengumuman';
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('gambar')->move($destinationPath, $fileName);
            $data = Berita::where('id_berita',$id)
                ->update([
                    'foto' => $fileName,
                    'judul' => $request->judul,
                    'subjudul' => $request->subjudul,
                    'status' => $request->status,
                    'updated_by' => $nama
                ]);
        }else{
            $data = Berita::where('id_berita',$id)
                ->update([
                    'judul' => $request->judul,
                    'subjudul' => $request->subjudul,
                    'status' => $request->status,
                    'updated_by' => $nama
                ]);
        }


    return redirect()->route('berita.index')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::where('id_berita',$id)->delete();
        return redirect()->route('berita.index')->with('status','Data Berhasil dihapus');

    }
}
