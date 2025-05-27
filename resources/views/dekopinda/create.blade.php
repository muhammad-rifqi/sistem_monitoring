@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dekopinda Create</div>
                <div class="card-body">
                    <form method="POST" action="/dekopinda/public/dashboard/dekopinda/store">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label">No</label>
                            <input type="text" name="no" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                        <label class="label">Nama Dekopinwil</label>
                        <select name="id_dekopinwil" class="form-control" required>
                            <option value="00">Pilih Dekopinwil</option>
                            @foreach($dekopinwil as $row)
                            <option value="{{$row->id}}">{{$row->nama_dekopinwil}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="label">Nama Dekopinda</label>
                            <input type="text" name="nama_dekopinda" class="form-control" required>
                        </div>
                        <div class="col-sm-4">
                        <label class="label">No SK</label>
                        <input type="text" name="no_sk" class="form-control" required>
                        </div>
                        <div class="col-sm-4">
                        <label class="label">TGL SK</label>
                        <input type="text" name="tgl_sk" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label">Nama Ketua</label>
                            <input type="text" name="nama_ketua" class="form-control" required>
                        </div>
                        <div class="col-sm-6">
                        <label class="label">No Kontak</label>
                        <input type="text" name="no_kontak" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <input type="submit" value="Simpan" class="btn btn-default">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
