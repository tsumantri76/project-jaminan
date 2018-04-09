@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Pengguna</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/setting_bandara') }}"><i class="glyphicon glyphicon-calendar"></i> Pengguna</a></li>
                    <li class="active">Input Data Pengguna</li>
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
                            <form role="form" method="POST" action="{{ url('admin/setting_user/store') }}">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">Nama Lengkap</label>
                                        <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Username</label>
                                        <input id="name" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">E-mail</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Konfirmasi Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Kode Profit</label>
                                        <select name="profit_id" class="form-control select2" width="100%">
                                            @foreach($kodes as $row)
                                                <option value="{{ $row->id }}">{{ $row->kode_profit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Role Pengguna</label>
                                        <select name="role_id" class="form-control">
                                            <option value="1">Administrtor</option>
                                            <option value="2">Kasir</option>
                                            <option value="3">Unit Teknis</option>
                                        </select>
                                    </div>
                                </div>
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