@extends('layouts.app')

@section('content')

<section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h3 class="page-header">
          {{ $cek->no_terima }}
          <small class="pull-right">Dibuat Tanggal : {{ strtodate($cek->created_at) }}</small>
        </h3>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-2 invoice-col">
        <address>
          <strong> Bandara/Profit Center</strong><br>
          <strong> Nama Vendor</strong><br>
          <strong> Bank Penjamin</strong><br>
          <strong> Nomor Bank Garansi</strong><br>
          <strong> Nomor Seri Bank Garansi</strong><br>
          <strong> Tanggal Bank Garansi</strong><br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-3 invoice-col">
        <address>
            <strong>: {{ $cek->kode_profit }}</strong><br>
            <strong>: {{ $cek->vendor_id }}</strong><br>
            <strong>: {{ $cek->nama_bank }}</strong><br>
            <strong>: {{ $cek->no_bankgr }}</strong><br>
            <strong>: {{ $cek->seri_bankgr }}</strong><br>
            <strong>: {{ strtodate($cek->tgl_bankgr) }}</strong><br>
        </address>
      </div>
      <div class="col-sm-3 invoice-col">
        <address>
          <strong> Nominal Jaminan Penawaran</strong><br>
          <strong> No Berita Aanwijzing</strong><br>
          <strong> Nama Pekerjaan</strong><br>
          <strong> Masa Berlaku</strong><br>
          <strong> Jatuh Tempo</strong><br>
          <strong> Minimum Tanggal Penarikan Jaminan</strong><br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
            <strong>: Rp. {{ number_format($cek->nominal_jambg,2,',','.') }}</strong><br>
            <strong>: {{ $cek->no_berita }}</strong><br>
            <strong>: {{ $cek->pekerjaan }}</strong><br>
            <strong>: {{ strtodate($cek->tgl_berlaku) }}</strong><br>
            <strong>: {{ strtodate($cek->tgl_berakhir) }}</strong><br>
            <strong>: {{ strtodate($cek->min_tarik_jaminan) }}</strong><br>
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <h4 class="page-header"> Status</h4>
    <div class="row invoice-info">
        <div class="col-sm-2 invoice-col">
            <address>
            <strong> Perpanjangan</strong><br>
            <strong> Penarikan</strong><br>
            <strong> Pencairan</strong><br>
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-3 invoice-col">
            <address>
                <strong>: </strong><br>
                <strong>: </strong><br>
                <strong>: </strong><br>
            </address>
        </div>
    </div>
    <h4 class="page-header"> Lampiran File/Dokumen</h4>
    <div class="row no-print">
        <div class="col-md-12">
            @if($cek->path_file > '')
                <a class="btn btn-info btn-sm btn-flat" href="{{ url('/admin/penawaran_bg/'.$cek->id.'/view') }}" title="Lihat {{ $cek->nama_file }}" target="_blank">
                    Lihat Dokumen Bank Garansi
                </a>
            @else
                <h4>Dokument Belum diupload</h4>
            @endif
        </div>
    </div>
    <hr>  
    <div class="row no-print">
        <div class="col-md-12">
            <div class="btn btn-group">
                <button type="button" class="btn btn-warning btn-flat btn-sm" onclick="self.history.back()"> Back</button>
            </div>
            <div class="btn btn-group pull-right">
                <button type="button" class="btn btn-info btn-flat btn-sm" data-toggle="modal" data-target="#perpanjangan"> Perpanjangan</button>
                <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#penarikan"> Penarikan</button>
                <button type="button" class="btn btn-success btn-flat btn-sm" data-toggle="modal" data-target="#pencairan"> Pencairan</button>
            </div>

        </div>
    </div>
  </section>

<!-- Modal Perpanjang-->
    <div id="perpanjangan" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Perpanjangan Vendor : {{ $cek->vendor_id }}</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="bahasan">No Tanda Terima</label>
                            <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ $cek->no_terima }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="bahasan">No Tanda Terima Perpanjangan</label>
                            <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ getnopenawaranbg() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="title">Jatuh Tempo</label>
                            <input type="text" class="form-control" name="jatuh_tempo" id="jatuh_tempo" value="{{ $cek->tgl_berakhir }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="title">Tanggal Perpanjangan</label>
                            <input type="text" class="form-control" name="tgl_perpanjang" id="tanggal1" value="{{ old('tgl_perpanjang') }}">
                        </div>
                        <div class="form-group">
                            <label for="bahasan">Nominal Perpanjangan</label>
                            <input type="text" class="form-control" name="nominal" id="nominal" value="{{ old('nominal') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Upload Dokumen Perpanjangan</label>
                            <input type="file" class="form-control" name="file" id="file" value="{{ old('file') }}">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

<!-- Modal Penarikan-->
    <div id="penarikan" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Perpanjangan Vendor : {{ $cek->vendor_id }}</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="bahasan">No Tanda Terima</label>
                            <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ $cek->no_terima }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="bahasan">No Tanda Terima Penarikan</label>
                            <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ getnopenawaranbg() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="title">Jatuh Tempo</label>
                            <input type="text" class="form-control" name="jatuh_tempo" id="jatuh_tempo" value="{{ $cek->tgl_berakhir }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="title">Tanggal Perpanjangan</label>
                            <input type="text" class="form-control" name="tgl_perpanjang" id="tanggal2" value="{{ old('tgl_perpanjang') }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Upload Dokumen Perpanjangan</label>
                            <input type="file" class="form-control" name="file" id="file" value="{{ old('file') }}">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

<!-- Modal Pencairan-->
    <div id="pencairan" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Perpanjangan Vendor : {{ $cek->vendor_id }}</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="bahasan">No Tanda Terima</label>
                            <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ $cek->no_terima }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="bahasan">No Tanda Terima Pencairan</label>
                            <input type="text" class="form-control" name="no_terima" id="no_terima" value="{{ getnopenawaranbg() }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="title">Jatuh Tempo</label>
                            <input type="text" class="form-control" name="jatuh_tempo" id="jatuh_tempo" value="{{ $cek->tgl_berakhir }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="title">Tanggal Perpanjangan</label>
                            <input type="text" class="form-control" name="tgl_perpanjang" id="tanggal" value="{{ old('tgl_perpanjang') }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Upload Dokumen Perpanjangan</label>
                            <input type="file" class="form-control" name="file" id="file" value="{{ old('file') }}">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

@endsection