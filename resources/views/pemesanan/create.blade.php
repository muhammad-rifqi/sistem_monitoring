@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Barang / Create</div>
                <div class="card-body">
                    <form method="POST" action="/dashboard/barang/store" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="nama_barang" name="nama_barang" value="">
                    <div class="form-row">
                        <div class="col">
                            <select name="nama_barang" class="form-control" onchange="pilih(this.value)" required>
                                <option value="--">Pilih Barang</option>
                                @foreach($data as $row)
                                    <option value="{{$row->id}}">{{$row->nama_barang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" name="stok_barang" id="stok_barang" class="form-control" placeholder="Stok Barang" value="" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                                <input type="text" name="harga_barang" id="harga_barang" class="form-control" placeholder="Harga Barang" value="" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <img id="photo" src="/upload/default.jpeg" width="200" alt="gambar barang" style="border:1px solid #ccc; padding:3px"/> <br /><br />
                            <input type="text" name="foto_barang" id="foto_barang" class="form-control" placeholder="Foto Barang" value="" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" id="deskripsi_barang" name="deskripsi_barang" class="form-control" value="" placeholder="Deskripsi Barang" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control" placeholder="Jumlah Pesanan" value="">
                        </div>
                        <div class="col">
                            <input type="text" name="session_id" id="session_id" class="form-control" placeholder="Session ID" value="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function pilih(e){
            fetch('/dashboard/pemesanan/views/'+e)
            .then(response => response.json())
            .then((data)=> { 
                document.getElementById("nama_barang").value = data?.nama_barang
                document.getElementById("stok_barang").value = data?.stok_barang
                document.getElementById("harga_barang").value = data?.harga_barang
                document.getElementById("foto_barang").value = data?.foto_barang
                document.getElementById("deskripsi_barang").value = data?.deskripsi_barang
                document.getElementById("photo").setAttribute('src','/upload/'+data?.foto_barang);
            });
    }
</script>