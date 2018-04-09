@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pelaksanaan Bank Garansi
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Pelaksanaan Bank Garansi</li>
        </ol>
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary">
              <div class="box-header">
                <a href="{{ url('admin/pelaksanaan_bg/create') }}" class="btn btn-primary">
                  <span class="fa fa-plus"></span> Tambah Data
                </a>
              </div>
              <!-- /.box-header -->
              @if (count($bg) > 0 )
                
              <div class="box-body table-responsive">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Surat Keterangan</th>
                    <th>Vendor</th>
                    <th>Bank Peminjam</th>
                    <th>No Bank Garansi</th>
                    <th>Seri Bank Garansi</th>
                    <th>Tanggal Bank Garansi</th>
                    <th>Nominal Jaminan</th>
                    <th>No Berita Aanwijzing</th>
                    <th>Nama Pekerjaan</th>
                    <th>Masa Berlaku</th>
                    <th>Jatuh Tempo</th>
                    <th>Min. Tanggal Penarikan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($bg as $row)
                    <tr>
                      <th>No</th>
                      <th>Surat Keterangan</th>
                      <th>Vendor</th>
                      <th>Bank Peminjam</th>
                      <th>No Bank Garansi</th>
                      <th>Seri Bank Garansi</th>
                      <th>Tanggal Bank Garansi</th>
                      <th>Nominal Jaminan</th>
                      <th>No Berita Aanwijzing</th>
                      <th>Nama Pekerjaan</th>
                      <th>Masa Berlaku</th>
                      <th>Jatuh Tempo</th>
                      <th>Min. Tanggal Penarikan</th>
                      <th>Status</th>
                      <td>
                        <center>
                          <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <span>
                                <a class="btn btn-info btn-xs" title="Detail" href="">
                                    <i class='glyphicon glyphicon-list'></i>
                                </a>
                            </span>
                            <span>
                                <a class="btn btn-primary btn-xs" title="Edit Data" href=") }}">
                                    <i class='glyphicon glyphicon-edit'></i>
                                </a>
                            </span>
                            <span>
                                <button class="btn btn-danger btn-xs" title="Hapus Data" type="submit">
                                  <i class='glyphicon glyphicon-trash'></i>
                                </button>
                            </span>

                          </form>
                        </center>
                      </td>
                    </tr>
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Surat Keterangan</th>
                    <th>Vendor</th>
                    <th>Bank Peminjam</th>
                    <th>No Bank Garansi</th>
                    <th>Seri Bank Garansi</th>
                    <th>Tanggal Bank Garansi</th>
                    <th>Nominal Jaminan</th>
                    <th>No Berita Aanwijzing</th>
                    <th>Nama Pekerjaan</th>
                    <th>Masa Berlaku</th>
                    <th>Jatuh Tempo</th>
                    <th>Min. Tanggal Penarikan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
              
              @else

              <div class="box-body">
                <h4>Data tidak ditemukan, silahkan input data.</h4>
              </div>

              @endif

            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

      
    </div>
  @endsection