@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Bank</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/setting_bank') }}"><i class="glyphicon glyphicon-calendar"></i> Bank</a></li>
                    <li class="active">Edit Data Bank</li>
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
                                <h3 class="box-title">Edit Data Bank ID : {{ $banks->id }}</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ url('admin/setting_bank/'.$banks->id.'/update') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">Bank</label>
                                    <input type="text" class="form-control" name="bank" id="bank" value="{{ $banks->bank }}">
                                </div>
                                <div class="form-group">
                                    <label for="bahasan">Cabang</label>
                                    <input type="text" class="form-control" name="cabang" id="cabang" value="{{ $banks->cabang }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Rekening</label>
                                    <input type="text" class="form-control" name="rekening" id="rekening" value="{{ $banks->rekening }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Proyek</label>
                                        <select name="id_proyek" id="id_proyek" class="form-control">
                                            @foreach ($proyeks as $row)
                                                <option value="{{ $row->id }}"
                                                @if ($row->id === $banks->id_proyek)
                                                    selected
                                                @endif    
                                                >
                                                {{ $row->proyek }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Kode Profit</label>
                                        <select name="id_profit" id="id_profit" class="form-control">
                                            @foreach ($profits as $row)
                                                <option value="{{ $row->id }}">{{ $row->kode_profit }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="del_status" id="del_status" value="TIDAK">
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