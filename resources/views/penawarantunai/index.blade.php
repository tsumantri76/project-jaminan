@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Penawaran Tunai
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Penawaran Tunai</li>
        </ol>
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary">
              <div class="box-header">
                <a href="{{ url('admin/penawaran_tunai/create') }}" class="btn btn-primary btn-sm">
                  <span class="fa fa-plus"></span> Tambah Data
                </a>
              </div>
              <!-- /.box-header -->
              @if (count($tunai) > 0 )
                
              <div class="box-body table-responsive">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Surat Keterangan</th>
                    <th>Vendor</th>
                    <th>Bank Penjamin</th>
                    <th>Nominal Jaminan</th>
                    <th>Nama Pekerjaan</th>
                    <th>Jatuh Tempo</th>                    
                    <th width="10%">Pilihan</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no = 1; @endphp
                  @foreach($tunai as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->no_terima }}</td>
                        <td>{{ $row->vendor_id }}</td>
                        <td>{{ $row->nama_bank }}</td>
                        <td>{{ kerp($row->nominal_jamper) }}</td>
                        <td>{{ $row->pekerjaan }}</td>
                        <td>{{ strtodate($row->jatuh_tempo) }}</td>
                      <td>
                        <center>
                          <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <span>
                              <a class="btn btn-success btn-xs" title="Export Word" data-toggle="tooltip" href="">
                                  <i class='fa fa-file-word-o'></i>
                              </a>
                            </span>
                            <span>
                                <a class="btn btn-info btn-xs" title="Update Status" data-toggle="tooltip" href="">
                                    <i class='glyphicon glyphicon-plus'></i>
                                </a>
                            </span>
                            <span>
                                <a class="btn btn-primary btn-xs" title="Edit Data" data-toggle="tooltip" href="">
                                    <i class='glyphicon glyphicon-edit'></i>
                                </a>
                            </span>
                            <span>
                                <button class="btn btn-danger btn-xs" title="Hapus Data" data-toggle="tooltip" type="submit">
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