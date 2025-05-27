@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard / Form Input Data Koperasi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table">
                               <tr>
                                    <th>ID Ref<th>
                                    <th>No<th>
                                    <th>Nama<th>
                                    <th>Jabatan<th>
                                    <th>Posisi<th>
                                    <th>No Kontak<th>
                                </tr>
                                @foreach($daftarjabatan as $row)
                                <tr>
                                    <th>##{{$row->id}}<th>
                                    <th>{{$row->no}}<th>
                                    <th>{{$row->nama}}<th>
                                    <th>{{$row->jabatan}}<th>
                                    <th>{{$row->posisi}}<th>
                                    <th>{{$row->no_kontak}}<th>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        {{$daftarjabatan->links()}}
                        </div>
                    </div>

                    <br>
                    <h3>Silahkan Isi Data</h3>
                    <hr>
                    <br>
                    <form method="POST" action="/dekopinda/public/dashboard/save" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        
                        <div class="col-sm-4">
                            <label>ID Ref : </label>
                            <input type="text" name="id_rel" class="form-control" required>
                        </div>

                        <div class="col-sm-4">
                            <label>Nama : </label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="col-sm-4">
                            <label>No Kontak : </label>
                            <input type="text" name="no_kontak" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Pesawat : </label>
                            <input type="text" name="pesawat" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label>Keberangkatan / Hari : </label>
                            <input type="date" name="br_hari" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Keberangkatan Waktu : </label>
                            <input type="time" name="br_waktu" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label>Kedatangan / Hari : </label>
                            <input type="date" name="dt_hari" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Kedatangan Waktu : </label>
                            <input type="time" name="dt_waktu" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label>Penginapan / Hotel : </label>
                            <input type="text" name="hotel" class="form-control" required>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <label>Penginapan / No kamar : </label>
                            <input type="text" name="no_kamar" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                            <label>Transport / No Bis : </label>
                            <input type="text" name="no_bis" class="form-control" required>
                        </div>
                    </div>
                    <input type="hidden" name="slug" value="posjab">
                    <br>
                    <p> <button class="btn btn-default"> Simpan </button></p>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
