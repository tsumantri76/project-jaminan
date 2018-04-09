@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Proyek</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                <li><a href="{{ url('admin/setting_proyek') }}"><i class="glyphicon glyphicon-calendar"></i> Proyek</a></li>
                <li class="active">Detail Data Proyek</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                        <h3 class="box-title">Detail Data Proyek ID : </h3>
                        </div>
                        <div class="box-body">
                            <h4><strong> Nama Proyek : {{ $proyeks->nama_proyek }}</strong></h4>
                            <h4><strong> Ket Wilayah : {{ $proyeks->wilayah }}</strong></h4>

                            @foreach($profits as $row)
                                <h4><strong> Kode Profit : {{ $row->kode_profit }}</strong></h4>
                            @endforeach
                            <h4><strong> Rekening :</strong></h4>
                            
                                <ol>
                                    <strong>
                                    @foreach($banks as $row)
                                        <li>{{ $row->nama_bank }} : {{ $row->nomor }}</li>
                                    @endforeach
                                    </strong>
                                </ol>
                        </div>
                        <div class="box-footer">
                            <button type="button" class="btn btn-warning" onclick="self.history.back()"> Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection