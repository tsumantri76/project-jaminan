@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Belajar</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ route('belajar.index') }}"><i class="glyphicon glyphicon-calendar"></i> Belajar</a></li>
                    <li class="active">Edit Data Belajar</li>
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
                                <h3 class="box-title">Edit Data Belajar ID : {{ $belajars->id }}</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('belajar.update', $belajars->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">Bahasan</label>
                                        <input type="text" class="form-control" name="bahasan" id="bahasan" value="{{ $belajars->bahasan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Materi</label>
                                        <input type="text" class="form-control" name="materi" id="materi" value="{{ $belajars->materi }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Status</label>
                                        <input type="text" class="form-control" name="status" id="status" value="{{ $belajars->status }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Pemahaman</label>
                                        <input type="text" class="form-control" name="pemahaman" id="pemahaman" value="{{ $belajars->pemahaman }}">
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