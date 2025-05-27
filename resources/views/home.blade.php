@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard / Form Input</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label">Dekopinwil</label>
                        <form method="POST" action="/dekopinda/public/dashboard/view" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <select name="dekopinwil" id="dekopinwil" class="form-control" required>
                                <option value="00">Pilih Dekopinwil</option>
                                @foreach($dekopinwil as $dekopinwils)
                                <option value="{{$dekopinwils->nama_dekopinwil}}">{{$dekopinwils->nama_dekopinwil}}</option>
                                @endforeach
                            </select> <br>
                            <p> <button type="submit" class="btn btn-default">View</button> </p>
                        </form>
                        </div>
                        <div class="col-sm-6">
                        <label class="label">Dekopinda</label>
                        <form method="POST" action="/dekopinda/public/dashboard/view" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <select name="dekopinda" id="dekopinda" class="form-control" required>
                                <option value="00">Pilih Dekopinda</option>
                                @foreach($dekopinda as $dekopindas)
                                <option value="{{$dekopindas->nama_dekopinda}}">{{$dekopindas->nama_dekopinda}}</option>
                                @endforeach
                            </select><br>
                            <p> <button type="submit" class="btn btn-default">View</button> </p>
                        </form>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                        <label class="label">Induk Koperasi</label>
                        <form method="POST" action="/dekopinda/public/dashboard/view" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <select name="induk_koperasi" id="induk_koperasi" class="form-control" required>
                                <option value="00">Pilih Induk Koperasi</option>
                                @foreach($indukkoperasi as $indukkoperasis)
                                <option value="{{$indukkoperasis->nama_koperasi}}">{{$indukkoperasis->nama_koperasi}}</option>
                                @endforeach
                            </select><br>
                            <p> <button type="submit" class="btn btn-default">View</button> </p>
                        </form>
                        </div>
                        <div class="col-sm-6">
                        <label class="label">Badan Perangkat</label>
                        <form method="POST" action="/dekopinda/public/dashboard/view" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <select name="badan_perangkat" id="badan_perangkat" class="form-control" required>
                                <option value="00">Pilih Perangkat</option>
                                @foreach($perangkat as $perangkats)
                                <option value="{{$perangkats->badan_perangkat}}">{{$perangkats->badan_perangkat}}</option>
                                @endforeach
                            </select><br>
                            <p> <button type="submit" class="btn btn-default">View</button> </p>
                        </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Posisi : </label>
                            <form method="POST" action="/dekopinda/public/dashboard/view" enctype="multipart/form-data">
                            {{csrf_field()}}

                                <select name="posisi" id="posisi" class="form-control" required>
                                <option value="00">Pilih Posisi</option>
                                @foreach($posisi as $posisis)
                                <option value="{{$posisis->nama_posisi}}">{{$posisis->nama_posisi}}</option>
                                @endforeach
                                </select>
                            <label> Jabatan : </label>
                                <select name="jabatan" id="jabatan" class="form-control" required>
                                <option value="00">Pilih Jabatan</option>
                                @foreach($jabatan as $jabatans)
                                <option value="{{$jabatans->nama_jabatan}}">{{$jabatans->nama_jabatan}}</option>
                                @endforeach
                                </select><br>
                            <p> <button type="submit"  class="btn btn-default">View</button> </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
