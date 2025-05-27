@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Dekoppinda</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <p>
                    <a href="/dekopinda/public/dashboard/dekopinda/create" class="btn btn-primary"> Tambah </a> 
                    <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
                        IMPORT EXCEL
                    </button> 
                    <a href="/dekopinda/public/panduan/dekopinda.xlsx" class="btn btn-primary"> Panduan Upload Dekopinda </a> 
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
                        @for($i = 0; $i < count($data); $i++)
                        <tr>
                        <th scope="row">{{$data[$i]['id']}}</th>
                        <td>{{$data[$i]['no']}}</td>
                        <td>{{$data[$i]['id_dekopinwil']}}</td>
                        <td>{{$data[$i]['no_sk']}}</td>
                        <td>{{$data[$i]['tgl_sk']}}</td>
                        <td>{{$data[$i]['nama_ketua']}}</td>
                        <td>{{$data[$i]['no_kontak']}}</td>
                        <td><a href="/dekopinda/public/dashboard/dekopinda/delete/{{$data[$i]['id']}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus Data ini ??')">Delete</a></td>
                        </tr>
                       @endfor
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/dekopinda/public/dashboard/dekopinda/excel" enctype="multipart/form-data">
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