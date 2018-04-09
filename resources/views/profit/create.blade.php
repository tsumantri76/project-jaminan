@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Profit Center</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/setting_profit/index') }}"> Profit</a></li>
                    <li class="active">Input Data Profit</li>
                </ol>
            </section>

            <section class="content">
                @if ($errors->any())
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-warning">
                            <div class="box-header">
                                <ol>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <div class="row">
                    <div class="col-xs-12">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <!-- form start -->
                            <form role="form" action="{{ url('admin/setting_profit/store') }}" method="POST">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">Kode Profit</label>
                                        <input type="text" class="form-control" name="kode_profit" id="kode_profit" value="{{ old('kode_profit') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nama Proyek</label>
                                        <input type="text" class="form-control" name="nama_proyek" id="nama_proyek" value="{{ old('nama_proyek') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Proyek</label>
                                        <select name="bandara_id" id="bandara_id" class="form-control select2" data-placeholder="Ketikan nama Bandara" style="width: 100%;">
                                            @foreach($bandaras as $row)
                                                <option value="{{ $row->id }}">{{ $row->nama_bandara }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="button" class="btn btn-warning" onclick="self.history.back()"> Back</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
    @endsection