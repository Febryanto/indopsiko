<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posisi = 
        DB::table('pelamar')
        ->select('posisi')
        ->get();
        $jm_itnetwork = Pelamar::where('posisi','IT Networks')->count();
        $jm_ob = Pelamar::where('posisi','Office Boy')->count();
        $jm_kurir = Pelamar::where('posisi','Rider / Kurir')->count();
        $jm_driver = Pelamar::where('posisi','Driver')->count();
        $jm_security = Pelamar::where('posisi','Security')->count();
        $jm_admin = Pelamar::where('posisi','Admin')->count();
        $jm_sales = Pelamar::where('posisi','Sales')->count();
        $jm_receptionist = Pelamar::where('posisi','Receptionist')->count();
        $jm_operator = Pelamar::where('posisi','Operator Produksi')->count();
        $jm_itstaff = Pelamar::where('posisi','IT Staff')->count();
        $jm_helper = Pelamar::where('posisi','Helper / Gudang')->count();
        $jm_teknisi = Pelamar::where('posisi','Teknisi')->count();
        $jm_customerservice = Pelamar::where('posisi','Customer Service')->count();
        $jm_leader = Pelamar::where('posisi','Leader')->count();
        $jm_manager = Pelamar::where('posisi','Manager')->count();
        $jumlah = ([
             $jm_itnetwork,
             $jm_ob,
             $jm_kurir,
             $jm_driver,
            $jm_security,
             $jm_admin,
             $jm_sales,
             $jm_operator,
             $jm_itstaff,
            $jm_helper,
            $jm_teknisi,
             $jm_customerservice,
             $jm_leader,
             $jm_manager,
            ]);
       
        $categories = ([
            'IT Networks',
            'Office Boy',
            'Rider / Kurir',
            'Driver',
            'Security',
            'Admin',
            'Sales',
            'Receptionist',
            'Operator Produksi',
            'IT Staff',
            'Helper / Gudang',
            'Teknisi',
            'Customer Service',
            'Leader',
            'Manager'
        ]);

        // dd($jumlah);        
        
       return view('admin.dashboard.dashboard',['categories' => $categories,'jumlah' => $jumlah]);
    }
}
