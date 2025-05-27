<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaftarJabatan;
use App\IndukKoperasi;
use App\Jabatan;
use App\Perangkat;
use App\Posisi;
use DB;
use App\Dekopinda;
use App\Dekopinwil;
use App\ListKoperasi;

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
         $dekopinwil = Dekopinwil::all();
         $dekopinda = Dekopinda::all();
         $indukkoperasi = IndukKoperasi::all();
         $jabatan = Jabatan::all();
         $perangkat = Perangkat::all();
         $posisi = Posisi::all();
         $daftarjabatan = DaftarJabatan::all();
        return view('home',compact('dekopinwil','dekopinda','indukkoperasi','daftarjabatan','perangkat','posisi','jabatan'));
    }

    public function store(Request $request)
    {

        
      if($request->dekopinwil){
        $dekopinwil = Dekopinwil::where('nama_dekopinwil','=',$request->dekopinwil)->first();
        return redirect('/dashboard/show/'.$dekopinwil->id.'/dekopinwil');
      }elseif($request->dekopinda){
        $dekopinda = Dekopinda::where('nama_dekopinda','=',$request->dekopinda)->first();
        return redirect('/dashboard/show/'.$dekopinda->id.'/dekopinda');
      }elseif($request->induk_koperasi){
        $induk_koperasi = DaftarJabatan::where('jabatan','=',$request->induk_koperasi)->first();
        return redirect('/dashboard/show/'.$induk_koperasi->id.'/induk_koperasi');
      }elseif($request->badan_perangkat){
        $perangkat = DaftarJabatan::where('jabatan','=',$request->badan_perangkat)->first();
        return redirect('/dashboard/show/'.$perangkat->id.'/perangkat');
      }elseif($request->posisi && $request->jabatan){
        return redirect('/dashboard/show/'.$request->posisi.'/'.$request->jabatan);
      } 
     
    }


    public function show($id,$slug)
    {
        if($slug == "dekopinwil"){
            $dekopinwil = Dekopinwil::findOrFail($id);
            return view('form.dekopinwil',compact('dekopinwil'));
        }elseif($slug == "dekopinda"){
            $dekopinda = Dekopinda::findOrFail($id);
            return view('form.dekopinda',compact('dekopinda'));
        }elseif($slug == "induk_koperasi"){
            $induk_koperasi = DaftarJabatan::findOrFail($id);
            return view('form.induk_koperasi',compact('induk_koperasi'));
        }elseif($slug == "perangkat"){
            $perangkat = DaftarJabatan::findOrFail($id);
            return view('form.perangkat',compact('perangkat'));
        }else{
            $daftarjabatan = DaftarJabatan::where('posisi','=',$id)->where('jabatan','=',$slug)->paginate(5);
            return view('form.daftar_jabatan',compact('daftarjabatan'));
        }



    }

    public function savelist(Request $request){

      $data =new ListKoperasi();
      $data->id_rel = $request->id_rel;
      $data->nama = $request->nama;
      $data->no_kontak = $request->no_kontak;
      $data->pesawat = $request->pesawat;
      $data->br_hari = $request->br_hari;
      $data->br_waktu = $request->br_waktu;
      $data->dt_hari = $request->dt_hari;
      $data->dt_waktu = $request->dt_waktu;
      $data->hotel = $request->hotel;
      $data->no_kamar = $request->no_kamar;
      $data->no_bis = $request->no_bis;
      $data->slug = $request->slug;
      $data->save();
      return redirect('/dashboard/home')->with('status', 'Data Created!');
    }

}
