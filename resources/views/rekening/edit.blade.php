@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Proyek</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/setting_proyek') }}"><i class="glyphicon glyphicon-calendar"></i> Proyek</a></li>
                    <li class="active">Edit Data Proyek</li>
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
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Data Proyek ID : {{ $proyeks->id }}</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ url('admin/setting_proyek/'.$proyeks->id.'/update') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">Proyek</label>
                                        <input type="text" class="form-control" name="proyek" id="proyek" value="{{ $proyeks->nama_proyek }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Ket. Wilayah</label>
                                        <input type="text" class="form-control" name="ket" id="ket" value="{{ $proyeks->wilayah }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id" id="id" value="{{ $proyeks->id }}">
                                        <input type="hidden" class="form-control" name="del_status" id="del_status" value="{{ $proyeks->del_status }}">
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