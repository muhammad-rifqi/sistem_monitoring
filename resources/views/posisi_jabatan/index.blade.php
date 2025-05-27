@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Daerah</div>
                <div class="card-body">
                <p>
                    <a href="/dekopinda/public/dashboard/daerah/create" class="btn btn-primary"> Tambah </a>
                </p>
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Daerah</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->daerah}}</td>
                        <td><a href="/dekopinda/public/dashboard/daerah/delete/{{$row->id}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus Data ini ??')">Delete</a></td>
                        </tr>
                       @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection