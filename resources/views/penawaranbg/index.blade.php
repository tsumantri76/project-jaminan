@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Penawaran Bank Garansi
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Penawaran Bank Garansi</li>
        </ol>
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary">
              <div class="box-header">
                <a href="{{ url('admin/penawaran_bg/create') }}" class="btn btn-primary btn-flat btn-sm">
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
                    <th>No Tanda Terima</th>
                    <th>Vendor</th>
                    <th>Bank Penjamin</th>
                    <th>Nominal Jaminan</th>
                    <th>Nama Pekerjaan</th>
                    <th>Jatuh Tempo</th>
                    <th width="10%">Pilihan</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach($bg as $row)
                    <tr>
                      <th>{{ $no++ }}</th>
                      <th>{{ $row->no_terima }}</th>
                      <th>{{ $row->vendor_id }}</th>
                      <th>{{ $row->nama_bank }}</th>
                      <th>Rp. {{ number_format($row->nominal_jambg,2,',','.') }}</th>
                      <th>{{ $row->pekerjaan }}</th>
                      <th>{{ $row->tgl_berakhir }}</th>
                      <td>
                        <center>
                          <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <span>
                              <a class="btn btn-success btn-xs btn-flat" data-toggle="tooltip" title="Print Data" href="{{ url('admin/penawaran_bg/'.$row->id.'/print') }}" target="_blank">
                                    <i class='glyphicon glyphicon-print'></i>
                                </a>
                            </span>
                            <span>
                              <a class="btn btn-info btn-xs btn-flat" data-toggle="tooltip" title="Update Status" href="{{ url('admin/penawaran_bg/'.$row->id.'/status') }}">
                                  <i class='glyphicon glyphicon-plus-sign'></i>
                              </a>
                            </span>
                            <span>
                              <a class="btn btn-primary btn-xs btn-flat" data-toggle="tooltip" title="Edit Data" href="{{ url('admin/penawaran_bg/'.$row->id.'/edit') }}">
                                    <i class='glyphicon glyphicon-edit'></i>
                                </a>
                            </span>
                            <span>
                                <button class="btn btn-danger btn-xs btn-flat" data-toggle="tooltip" title="Hapus Data" type="submit">
                                  <i class='glyphicon glyphicon-trash'></i>
                                </button>
                            </span>

                          </form>
                        </center>
                      </td>
                    </tr>
                  @endforeach
                  
                  </tbody>
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