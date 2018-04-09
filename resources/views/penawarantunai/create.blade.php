@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Penawaran Tunai</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/penawaran_tunai') }}"><i class="glyphicon glyphicon-calendar"></i> Penawaran Tunai</a></li>
                    <li class="active">Input Data Penawaran Tunai</li>
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
                            <form role="form" action="{{ url('admin/penawaran_tunai/store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="bahasan">No Tanda Terima</label>
                                        <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ getnopenawarantunai() }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Bandara/Kode Profit Center</label>
                                        <input type="text" class="form-control" name="nama_bandara" id="nama_bandara" value="{{ getbandara().'/'.getkodeprofit() }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Bank</label>
                                        <select class="form-control select2" name="id_bank" id="id_bank" style="width: 100%;">
                                            @foreach($banks as $row)
                                                <option value="{{ $row->id }}">{{ $row->nama_bank }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tunai</label>
                                        <input type="text" class="form-control" name="tunai" id="cabang" value="{{ old('tunai') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Vendor</label>
                                        <input type="text" class="form-control" name="id_vendor" id="id_vendor" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tanggal Penerimaan</label>
                                        <input type="text" class="form-control" name="tgl_penerimaan" id="tanggal" value="{{ old('tgl_penerimaan') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nominal Jaminan Penawaran</label>
                                        <input type="text" class="form-control" name="nominal_jambg" id="nominal_jambg" value="{{ old('nominal_jambg') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No Kwitansi SAP</label>
                                        <input type="text" class="form-control" name="no_kwitansi" id="no_kwitansi" value="{{ old('no_kwitansi') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nama Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No Berita Aanwijzing Pelelangan</label>
                                        <input type="text" class="form-control" name="no_berita" id="no_berita" value="{{ old('no_berita') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Jangka Waktu Penawaran</label>
                                        <input type="text" class="form-control" name="jangka_waktu" id="jangka_waktu" value="{{ old('jangka_waktu') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Masa berlaku Jaminan Penawaran</label>
                                        <input type="text" class="form-control" name="tgl_berlaku" id="tanggal1" value="{{ old('tgl_berlaku') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Masa Sanggah</label>
                                        <input type="text" class="form-control" name="masa_sanggah" id="masa_sanggah" value="{{ old('masa_sanggah') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Minimun Tanggal Penarikan</label>
                                        <input type="text" class="form-control" name="min_tgl_tarik" id="tanggal2" value="{{ old('min_tgl_tarik') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Unit Teknis</label>
                                        <select class="form-control select2" name="id_unit" id="id_unit" style="width: 100%;">
                                            @foreach($units as $row)
                                                <option value="{{ $row->id }}">{{ $row->nama_unit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Keterangan</label>
                                        <textarea class="form-control" name="ket" rows="3" placeholder="Enter ...">{{ old('ket') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">User</label>
                                        <input type="text" class="form-control" name="username" id="username" value="{{ Auth::user()->username }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Upload Kwitansi</label>
                                        <input type="file" class="form-control" name="file1" id="file1" value="{{ old('file1') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Upload Bukti Transfer</label>
                                        <input type="file" class="form-control" name="file2" id="file1" value="{{ old('file2') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_bandara" id="id_bandara" value="{{ Auth::user()->id_bandara }}" readonly>
                                        <input type="hidden" class="form-control" name="id_user" id="id_user" value="{{ Auth::user()->id }}" readonly>
                                        <input type="hidden" class="form-control" name="id_profit" id="id_profit" value="{{ getidprofit() }}" readonly>
                                        <input type="hidden" class="form-control" name="del_status" id="del_status" value="TIDAK">
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