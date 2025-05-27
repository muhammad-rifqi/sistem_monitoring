@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Induk Koperasi</div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Koperasi</th>
                        <th scope="col">Di Buat</th>
                        <th scope="col">Di Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                        <th scope="row">{{$row->id}}</th>
                        <td>{{$row->nama_koperasi}}</td>
                        <td>{{$row->created_at}}</td>
                        <td>{{$row->updated_at}}</td>
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