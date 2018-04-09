@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Vendor</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-calendar"></i> Vendor</a></li>
                    <li class="active">Input Data Vendor</li>
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
                                <h3 class="box-title">Input Data Vendor</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="" method="POST">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">No Vendor</label>
                                        <input type="text" class="form-control" name="materi" id="materi" value="{{ old('materi') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Vendor</label>
                                        <input type="text" class="form-control" name="pemahaman" id="pemahaman" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No NPWP</label>
                                        <input type="text" class="form-control" name="status" id="status" value="{{ old('status') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">E-mail</label>
                                        <input type="text" class="form-control" name="pemahaman" id="pemahaman" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">PIC</label>
                                        <input type="text" class="form-control" name="pemahaman" id="pemahaman" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Telpon</label>
                                        <input type="text" class="form-control" name="pemahaman" id="pemahaman" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Alamat</label>
                                        <textarea class="form-control" name="bahasan" rows="5" placeholder="Enter ...">{{ old('bahasan') }}</textarea>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="button" class="btn btn-warning" onclick="self.history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-send-o"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
    @endsection