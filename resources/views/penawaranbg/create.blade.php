@extends('layouts.app')

    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Penawaran Bank Garansi</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                    <li><a href="{{ url('admin/penawaran_bg') }}"><i class="glyphicon glyphicon-calendar"></i> Penawaran Bank Garansi</a></li>
                    <li class="active">Input Data Penawaran Bank Garansi</li>
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
                            <form role="form" action="{{ url('admin/penawaran_bg/store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="bahasan">No Tanda Terima</label>
                                        <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ getnopenawaranbg() }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Bandara/Kode Profit Center</label>
                                        <input type="text" class="form-control" name="nama_bandara" id="nama_bandara" value="{{ getbandara().'/'.getkodeprofit() }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Lokasi/Wilayah</label>
                                        <input type="text" class="form-control" name="wilayah" id="wilayah" value="{{ old('wilayah') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nama Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Vendor</label>
                                        <input type="text" class="form-control" name="vendor_id" id="vendor_id" value="{{ old('vendor_id') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Unit Teknis</label>
                                        <input type="text" class="form-control" name="unit_id" id="unit_id" value="{{ old('unit_id') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">Bank</label>
                                        <select class="form-control select2" name="bank_id" id="bank_id" style="width: 100%;">
                                            @foreach($banks as $row)
                                                <option value="{{ $row->id }}">{{ $row->nama_bank }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Cabang</label>
                                        <input type="text" class="form-control" name="cabang" id="cabang" value="{{ old('cabang') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No Bank Garansi</label>
                                        <input type="text" class="form-control" name="no_bankgr" id="no_bankgr" value="{{ old('no_bankgr') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Seri Bank Garansi</label>
                                        <input type="text" class="form-control" name="seri_bankgr" id="seri_bankgr" value="{{ old('seri_bankgr') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tanggal Bank Garansi</label>
                                        <input type="text" class="form-control" name="tgl_bankgr" id="tanggal" value="{{ old('tgl_bankgr') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nominal Jaminan Penawaran</label>
                                        <input type="text" class="form-control" name="nominal_jambg" id="nominal_jambg" value="{{ old('nominal_jambg') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No Berita Aanwijzing Pelelangan</label>
                                        <input type="text" class="form-control" name="no_berita" id="no_berita" value="{{ old('no_berita') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Jangka Waktu</label>
                                        <input type="text" class="form-control" name="jangka_waktu" id="jangka_waktu" value="{{ old('jangka_waktu') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Masa berlaku Jaminan Penawaran</label>
                                        <input type="text" class="form-control" name="tgl_berlaku" id="tanggal1" value="{{ old('tgl_berlaku') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Sampai</label>
                                        <input type="text" class="form-control" name="tgl_berakhir" id="tanggal2" value="{{ old('tgl_berakhir') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Masa Sanggah</label>
                                        <input type="text" class="form-control" name="masa_sanggah" id="masa_sanggah" value="{{ old('masa_sanggah') }}">
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
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Upload Dokument Bank Garansi</label>
                                        <input type="file" class="form-control" name="file" id="file" value="{{ old('file') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="bandara_id" id="bandara_id" value="{{ Auth::user()->bandara_id }}">
                                        <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" class="form-control" name="profit_id" id="profit_id" value="{{ Auth::user()->profit_id }}">
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