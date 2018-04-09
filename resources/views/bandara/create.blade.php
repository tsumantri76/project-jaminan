@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Bandara</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/setting_bandara') }}"><i class="glyphicon glyphicon-calendar"></i> Bandara</a></li>
                    <li class="active">Input Data Bandara</li>
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
                            <form role="form" action="{{ url('admin/setting_bandara/store') }}" method="POST">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">Kode Bandara</label>
                                        <input type="text" class="form-control" name="kode_bandara" id="kode_bandara" value="{{ old('kode_bandara') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Nama Bandara</label>
                                        <input type="text" class="form-control" name="nama_bandara" id="nama_bandara" value="{{ old('nama_bandara') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Alamat</label>
                                        <textarea class="form-control" name="alamat" rows="4" placeholder="Enter ...">{{ old('alamat') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Telpon</label>
                                        <input type="text" class="form-control" name="telpon" id="telpon" value="{{ old('telpon') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Fax</label>
                                        <input type="text" class="form-control" name="fax" id="fax" value="{{ old('fax') }}">
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