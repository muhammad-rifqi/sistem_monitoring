@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard / List Data Koperasi</div>

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
                               <tr bgcolor="#ccc">
                                    <th>ID Ref<th>
                                    <th>Nama<th>
                                    <th>No Kontak<th>
                                    <th>Hari Keberangkat<th>
                                    <th>Waktu Keberangkatan<th>
                                    <th>Hari Kedatangan<th>
                                    <th>Waktu Kedatangan<th>
                                    <th>Hotel<th>
                                    <th>No Kamar<th>
                                    <th>No Bis<th>
                                    <th>Slug<th>
                                    <th>Di Buat Pada<th>
                                </tr>
                                @foreach($data as $row)
                                <?php
                                if(($row->id % 2) == 0){
                                    $color = "silver";
                                }else{
                                    $color = 'white';
                                }
                                ?>
                                <tr bgcolor="{{$color}}">
                                    <th>##{{$row->id_rel}}<th>
                                    <th>{{$row->nama}}<th>
                                    <th>{{$row->no_kontak}}<th>
                                    <th>{{$row->br_hari}}<th>
                                    <th>{{$row->br_waktu}}<th>
                                    <th>{{$row->dt_hari}}<th>
                                    <th>{{$row->dt_waktu}}<th>
                                    <th>{{$row->hotel}}<th>
                                    <th>{{$row->no_kamar}}<th>
                                    <th>{{$row->no_bis}}<th>
                                    <th>{{$row->slug}}<th>
                                    <th>{{$row->created_at}}<th>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        {{ $data->links() }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
