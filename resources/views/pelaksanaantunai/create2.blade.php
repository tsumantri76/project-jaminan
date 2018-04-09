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

            <form role="form" action="{{ url('admin/pelaksanaan_tunai/store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <!-- general form elements -->
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="bahasan">No Tanda Terima</label>
                                <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ getnopelaksanaantunai() }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="bahasan">Bandara</label>
                                <input type="text" class="form-control" name="nama_bandara" id="nama_bandara" value="{{ getbandara().'/'.getkodeprofit() }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="title">Vendor</label>
                                <input type="text" class="form-control" name="id_vendor" id="id_vendor" value="{{ old('pemahaman') }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Nama Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan') }}">
                            </div>
                            <div class="form-group">
                                <label for="title">No Surat Penunjukan Pemenang (SPP)</label>
                                <input type="text" class="form-control" name="no_spp" id="no_spp" value="{{ old('no_spp') }}">
                            </div>
                            <div class="form-group">
                                <label for="title">Unit Teknis</label>
                                <select class="form-control select2" name="id_unit" id="id_unit" style="width: 100%;">
                                    @foreach($units as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_unit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-xs-12 col-md-6">
                    <!-- general form elements -->
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="bahasan">Jenis Setoran</label>
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label for="bahasan">Bank</label>
                                    <select class="form-control select2" name="id_bank" id="id_bank" style="width: 100%;">
                                        @foreach($banks as $row)
                                            <option value="{{ $row->id }}">{{ $row->nama_bank }}</option>
                                        @endforeach
                                    </select>

                                    <label for="title">Tunai</label>
                                    <input type="text" class="form-control" name="cabang" id="cabang" value="{{ old('status') }}">
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="title">Tanggal Penerimaan</label>
                                <input type="text" class="form-control" name="tgl_penerimaan" id="tanggal">
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
                                <label for="title">Jangka Waktu Pelaksanaan</label>
                                <input type="text" class="form-control" name="jangka_waktu" id="jangka_waktu" value="{{ old('pemahaman') }}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <!-- general form elements -->
                    <div class="box box-default">
                        <div class="box-body">
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
                        <div class="box-footer">
                            <button type="button" class="btn btn-warning" onclick="self.history.back()"> Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </section>
    </div>
@endsection