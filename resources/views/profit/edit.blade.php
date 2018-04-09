@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Profit</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/setting_admin/create') }}"> Profit</a></li>
                    <li class="active">Edit Data Profit</li>
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
                            <form role="form" action="{{ url('admin/setting_profit/'.$profits->id.'/update') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id" id="id" value="{{ $profits->id }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="del_status" id="del_status" value="{{ $profits->del_status }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Kode Profit</label>
                                            <input type="text" class="form-control" name="kode_profit" id="kode_profit" value="{{ $profits->kode_profit }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Proyek</label>
                                            <select name="id_proyek" id="id_proyek" class="form-control select2" style="width: 100%;">
                                                @foreach ($proyeks as $row)
                                                    <option value="{{ $row->id }}"
                                                    @if ($row->id === $profits->id_proyek)
                                                        selected
                                                    @endif
                                                    >
                                                    {{ $row->nama_proyek }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="button" class="btn btn-warning btn-flat btn-sm" onclick="self.history.back()"> Back</button>
                                    <button type="submit" class="btn btn-primary btn-flat btn-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
    @endsection