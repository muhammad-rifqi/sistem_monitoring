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
                        <div class="col-sm-6">
                            <label class="label">No SK</label>
                            <input type="text" value="{{$dekopinda->no_sk}}" class="form-control" disabled>
                        </div>
                        
                        <div class="col-sm-6">
                        <label class="label">Tanggal SK</label>
                        <input type="text" value="{{$dekopinda->tgl_sk}}" class="form-control" disabled>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                        <label class="label">Nama</label>
                        <input type="text" value="{{$dekopinda->nama_ketua}}" class="form-control" disabled>
                        </div>
                        <div class="col-sm-6">
                        <label class="label">No Kontak/ Phone</label>
                        <input type="text" value="{{$dekopinda->no_kontak}}" class="form-control" disabled>
                        </div>
                    </div>
                    <br>
                    <h3>Silahkan Isi Data</h3>
                    <hr>
                    <br>
                    <form method="POST" action="/dekopinda/public/dashboard/save" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id_rel" value="{{$dekopinda->id}}">
                    <input type="hidden" name="nama" value="{{$dekopinda->nama_ketua}}">
                    <input type="hidden" name="no_kontak" value="{{$dekopinda->no_kontak}}">
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
                    <input type="hidden" name="slug" value="dekopinda">
                    <br>
                    <p> <button class="btn btn-default"> Simpan </button></p>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
