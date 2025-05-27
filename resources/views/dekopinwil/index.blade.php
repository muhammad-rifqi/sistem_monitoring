@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Dekopinwil</div>
                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <p>
                    <a href="/dekopinda/public/dashboard/dekopinwil/create" class="btn btn-primary"> Tambah </a>
                    <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
                        IMPORT EXCEL
                    </button>
                    <a href="/dekopinda/public/panduan/dekopinwil.xlsx" class="btn btn-primary"> Panduan Upload Dekopinwil </a> 
                </p>
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">No</th>
                        <th scope="col">Dekopinwil</th>
                        <th scope="col">No SK</th>
                        <th scope="col">Tanggal SK</th>
                        <th scope="col">Nama Ketua</th>
                        <th scope="col">No Kontak</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $row)
                        <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->no}}</td>
                        <td>{{$row->nama_dekopinwil}}</td>
                        <td>{{$row->no_sk}}</td>
                        <td>{{$row->tgl_sk}}</td>
                        <td>{{$row->nama_ketua}}</td>
                        <td>{{$row->no_kontak}}</td>
                        <td><a href="/dekopinda/public/dashboard/dekopinwil/delete/{{$row->id}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus Data ini ??')">Delete</a></td>
                        </tr>
                       @endforeach
                    </tbody>
                    </table>
                </div>
                {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="post" action="/dekopinda/public/dashboard/dekopinwil/import_excel" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                    </div>
                    <div class="modal-body">

                        {{ csrf_field() }}

                        <label>Pilih file excel</label>
                        <div class="form-group">
                            <input type="file" name="file" required="required">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </div>
            </form>
        </div>
    </div>