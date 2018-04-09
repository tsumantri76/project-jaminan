@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Profit Center</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                <li><a href="{{ route('belajar.index') }}"><i class="glyphicon glyphicon-calendar"></i> Profit Center</a></li>
                <li class="active">Detail Data Profit Center</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                        <h3 class="box-title">Detail Data Profit Center ID : {{ $belajars->id }}</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Bahasan</label>
                                <p>{{ $belajars->bahasan }}</p>
                            </div>
                            <div class="form-group">
                                <label for="body">Materi</label>
                                <p>{{ $belajars->materi }}</p>
                            </div>
                            <div class="form-group">
                                <label for="body">Status</label>
                                <p>{{ $belajars->status }}</p>
                            </div>
                            <div class="form-group">
                                <label for="body">Pemahaman</label>
                                <p>{{ $belajars->pemahaman }}</p>
                            </div>
                            <div class="form-group">
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