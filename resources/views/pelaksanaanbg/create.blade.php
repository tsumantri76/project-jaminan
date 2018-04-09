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
                            <div class="box-header with-border">
                                <h3 class="box-title">Input Data Penawaran Bank Garansi</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{ url('admin/penawaran_bg/store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="bahasan">No Surat Keterangan</label>
                                        <input type="text" class="form-control" name="no_surat_ket" id="no_surat_ket" value="{{ getnosuratketbg() }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasan">No Tanda Terima</label>
                                        <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ getnopelaksanaanbg() }}" readonly>
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
                                        <label for="title">Cabang</label>
                                        <input type="text" class="form-control" name="cabang" id="cabang" value="{{ old('status') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No Bank Garansi</label>
                                        <input type="text" class="form-control" name="no_bankgr" id="no_bankgr" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Seri Bank Garansi</label>
                                        <input type="text" class="form-control" name="seri_bankgr" id="seri_bankgr" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Vendor</label>
                                        <input type="text" class="form-control" name="id_vendor" id="id_vendor" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Tanggal Bank Garansi</label>
                                        <input type="text" class="form-control" name="tgl_bankgr" id="tanggal" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nominal Jaminan Pelaksanaan</label>
                                        <input type="text" class="form-control" name="nominal_jambg" id="nominal_jambg" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Nama Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">No Surat Penunjukkan Pemenang (SPP)</label>
                                        <input type="text" class="form-control" name="no_spp" id="no_spp" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Jangka Waktu</label>
                                        <input type="text" class="form-control" name="jangka_waktu" id="jangka_waktu" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Masa berlaku Jaminan Pelaksanaan</label>
                                        <input type="text" class="form-control" name="tgl_berlaku" id="tanggal1" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Sampai</label>
                                        <input type="text" class="form-control" name="tgl_berakhir" id="tanggal2" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Masa Sanggah</label>
                                        <input type="text" class="form-control" name="masa_sanggah" id="masa_sanggah" value="{{ old('pemahaman') }}">
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
                                        <input type="text" class="form-control" name="id_user" id="id_user" value="{{ Auth::user()->id }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="id_profit" id="id_profit" value="{{ old('pemahaman') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Upload Dokument Bank Garansi</label>
                                        <input type="file" class="form-control" name="file" id="file" value="{{ old('pemahaman') }}">
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