@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Nomor Rekening
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Nomor Rekening</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <a href="{{ url('admin/setting_rekening/create') }}" class="btn btn-primary btn-sm">
                  <span class="fa fa-plus"></span> Tambah Data
                </a>
              </div>
              <!-- /.box-header -->
              @if (count($rekenings) > 0 )
                
              <div class="box-body table-responsive">
                <table id="data-table" class="table table-bordered table-condensed table-hover">
                  <thead>
                  <tr>
                    <th width="3%">No</th>
                    <th>Nama Bank</th>
                    <th>No Rekening</th>
                    <th>Kode Profit Center</th>
                    <th width="8%">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; ?>
                  @foreach($rekenings as $row)
                    <tr>
                      <td>{{ $no }}</td>
                      <td>{{ $row->nama_bank }}</td>
                      <td>{{ $row->nomor_rekening }}</td>
                      <td>{{ $row->kode_profit }}</td>
                      <td>
                        <center>
                        <form action="{{ url('admin/setting_rekening/'.$row->id.'/destroy') }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('PATCH') }}

                          <span>
                              <a class="btn btn-primary btn-xs" title="Edit Data" data-toggle="tooltip" href="{{ url('admin/setting_rekening/'.$row->id.'/edit') }}">
                                  <i class='glyphicon glyphicon-edit'></i>
                              </a>
                          </span>
                          <span>
                              <button class="btn btn-danger btn-xs" title="Hapus Data" data-toggle="tooltip" type="submit">
                                <i class='glyphicon glyphicon-trash'></i>
                              </button>
                          </span>
                          <div class="form-group">
                              <input type="hidden" class="form-control" name="del_status" id="del_status" value="YA">
                          </div>
                        </form>
                        <center>
                      </td>
                    </tr>
                    <?php $no++; ?>
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