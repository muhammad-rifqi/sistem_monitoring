<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dekopinda;
use App\Dekopinwil;
use DB;
use App\Imports\DekopindaImport;
use Maatwebsite\Excel\Facades\Excel;

class DekopindaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $list = Dekopinda::all();
        $data = array();
        foreach($list as $row){
            $data[] = array(
                "id"=>$row->id,
                "no"=>$row->no,
                "id_dekopinwil"=>$this->convert_id($row->id_dekopinwil),
                "nama_dekopinda"=>$row->nama_dekopinda,
                "no_sk"=>$row->no_sk,
                "tgl_sk"=>$row->tgl_sk,
                "nama_ketua"=>$row->nama_ketua,
                "no_kontak"=>$row->no_kontak,
                "created_at"=>$row->created_at,
                "updated_at"=>$row->updated_at,
            );
        }

         return view('dekopinda.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $dekopinwil = Dekopinwil::all();
        return view('dekopinda.create',compact('dekopinwil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Dekopinda();
        $data->no = $request->no;
        $data->id_dekopinwil= $request->id_dekopinwil;
        $data->nama_dekopinda = $request->nama_dekopinda;
        $data->no_sk = $request->no_sk;
        $data->tgl_sk = $request->tgl_sk;
        $data->nama_ketua = $request->nama_ketua;
        $data->no_kontak = $request->no_kontak;
        $data->save();
        return redirect('/dashboard/dekopinda')->with('status', 'Data Created!');
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
        $data = Dekopinda::findOrFail($id);
        return view('dekopinda.edit',compact('data'));
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
        $data = Dekopinda::findOrFail($id);
        $data->no = $request->no;
        $data->dekopinda = $request->dekopinda;
        $data->no_sk = $request->no_sk;
        $data->tgl_sk = $request->tgl_sk;
        $data->nama_ketua = $request->nama_ketua;
        $data->no_kontak = $request->no_kontak;
        return redirect('/dashboard/dekopinda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Dekopinda::findOrFail($id);
        $data->delete();
        return redirect('/dashboard/dekopinda')->with('status', 'Data Deleted!');
    }

    public function convert_id($id)
    {
        $d = DB::select("select id, nama_dekopinwil from dekopinwil where id = '".$id."'");
        return $d[0]->nama_dekopinwil;
    }


    public function import_excel(Request $request) 
	{
        $this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
		$file = $request->file('file');
		$nama_files = rand().$file->getClientOriginalName();
		$file->move('dekopinda',$nama_files);
		Excel::import(new DekopindaImport, 'dekopinda/'.$nama_files);
        return redirect('/dashboard/dekopinda')->with('status', 'Data Dekopinda Imported!');
	}


}
