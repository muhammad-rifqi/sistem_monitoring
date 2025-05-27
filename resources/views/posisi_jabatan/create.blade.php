@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create</div>
                <div class="card-body">
                    <form method="POST" action="/dekopinda/public/dashboard/daerah/store">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="daerah" class="form-control" placeholder="Daerah">
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
