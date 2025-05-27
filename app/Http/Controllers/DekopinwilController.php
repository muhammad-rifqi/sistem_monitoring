<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dekopinwil;
use App\Imports\DekopinwilImport;
use Maatwebsite\Excel\Facades\Excel;

class DekopinwilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dekopinwil::paginate(5);
        return view('dekopinwil.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dekopinwil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Dekopinwil();
        $data->no = $request->no;
        $data->nama_dekopinwil= $request->nama_dekopinwil;
        $data->no_sk = $request->no_sk;
        $data->tgl_sk = $request->tgl_sk;
        $data->nama_ketua = $request->nama_ketua;
        $data->no_kontak = $request->no_kontak;
        $data->save();
        return redirect('/dashboard/dekopinwil')->with('status', 'Data Created!');
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
        $data = Dekopinwil::findOrFail($id);
        return view('dekopinwil .edit',compat('data'));
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
        $data = Dekopinwil::findOrFail($id);
        $data->daerah = $request->daerah;
        return redirect('/dashboard/dekopinwil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Dekopinwil::findOrFail($id);
        $data->delete();
        return redirect('/dashboard/dekopinwil')->with('status', 'Data Deleted!');
    }

    public function import_excel(Request $request) 
	{
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
		$file = $request->file('file');
		$nama_file = rand().$file->getClientOriginalName();
		$file->move('file',$nama_file);
		Excel::import(new DekopinwilImport, public_path('file/'.$nama_file));
        return redirect('/dashboard/dekopinwil')->with('status', 'Data Dekopinwil Imported!');
	}

}
