@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Nomor Rekening</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/setting_profit') }}"><i class="glyphicon glyphicon-calendar"></i> Nomor Rekening</a></li>
                    <li class="active">Input Data Nomor Rekening</li>
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
                            <form role="form" action="{{ url('admin/setting_rekening/store') }}" method="POST">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">Nama Bank</label>
                                        <input type="text" class="form-control" name="nama_bank" id="nama_bank" value="{{ old('nama_bank') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Nomor Rekening</label>
                                        <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening" value="{{ old('nomor_rekening') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="profits">Profit Center</label>
                                        <select name="profit_id" id="profit_id" class="form-control select2" width="100%">
                                            @foreach($profits as $row)
                                                <option value="{{ $row->id }}">{{ $row->kode_profit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="button" class="btn btn-warning btn-sm" onclick="self.history.back()"> Back</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
    @endsection