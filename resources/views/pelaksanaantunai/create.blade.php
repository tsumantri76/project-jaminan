@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Pelaksanaan Tunai</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/pelaksanaan_tunai') }}"><i class="glyphicon glyphicon-calendar"></i> Pelaksanaan Tunai</a></li>
                    <li class="active">Input Data Pelaksanaan Tunai</li>
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
                                <h3 class="box-title">Input Data Pelaksanaan Tunai</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ url('admin/pelaksanaan_tunai/store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ getnopelaksanaantunai() }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Bandara</label>
                                        <input type="text" class="form-control" name="id_bandara" id="id_bandara" value="{{ old('id_bandara') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Bank</label>
                                        <input type="text" class="form-control" name="id_bank" id="id_bank" value="{{ old('id_bandara') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tunai</label>
                                        <input type="text" class="form-control" name="cabang" id="cabang" value="{{ old('status') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Vendor</label>
                                        <input type="text" class="form-control" name="id_vendor" id="id_vendor" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tanggal Penerimaan</label>
                                        <input type="text" class="form-control" name="tgl_penerimaan" id="tanggal" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nominal Jaminan Pelaksanaan</label>
                                        <input type="text" class="form-control" name="nominal_jamlak" id="nominal_jamlak" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No Kwitansi SAP</label>
                                        <input type="text" class="form-control" name="no_kwitansi" id="no_kwitansi" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nama Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No Surat Penunjukan Pemenang (SPP)</label>
                                        <input type="text" class="form-control" name="no_spp" id="no_spp" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Jangka Waktu Pelaksanaan</label>
                                        <input type="text" class="form-control" name="jangka_waktu" id="jangka_waktu" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Jatuh Tempo Pelaksanaan</label>
                                        <input type="text" class="form-control" name="jatuh_tempo" id="tanggal1" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Masa Sanggah</label>
                                        <input type="text" class="form-control" name="masa_sanggah" id="masa_sanggah" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Minimun Tanggal Penarikan</label>
                                        <input type="text" class="form-control" name="min_tgl_tarik" id="tanggal2" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Unit Teknis</label>
                                        <input type="text" class="form-control" name="id_unit" id="id_unit" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Keterangan</label>
                                        <textarea class="form-control" name="ket" rows="3" placeholder="Enter ...">{{ old('body') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">User</label>
                                        <input type="text" class="form-control" name="id_user" id="id_user" value="{{ Auth::user()->username }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="id_profit" id="id_profit" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Upload Kwitansi</label>
                                        <input type="file" class="form-control" name="file1" id="file1" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Upload Bukti Transfer</label>
                                        <input type="file" class="form-control" name="file2" id="file1" value="{{ old('pemahaman') }}">
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