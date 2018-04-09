@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Profit Center
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Profit Center</li>
        </ol>
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <a href="{{ url('admin/setting_profit/create') }}" class="btn btn-primary btn-flat btn-sm">
                  <span class="fa fa-plus"></span> Tambah Data
                </a>
              </div>
              <!-- /.box-header -->
              @if (count($profits) > 0 )
                
              <div class="box-body table-responsive">
                <table id="data-table" class="table table-bordered table-hover table-condensed" width="100%">
                  <thead>
                    <tr>
                      <th width="2%"> No</th>
                      <th> Kode Profit</th>
                      <th> Proyek/Cabang</th>
                      <th width="10%"> Pilihan</th>
                      <th width="8%"> Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                
                  @php
                    $no = 1;
                  @endphp
                  @foreach($profits as $row)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $row->kode_profit }}</td>
                      <td>{{ $row->nama_proyek }}</td>
                      <td>
                          <span>
                              <a data-toggle="tooltip" class="btn btn-info btn-xs btn-flat" title="Tambah Data Rekening" href="{{ url('admin/setting_profit/'.$row->id.'/rekening') }}">
                                  <i class='glyphicon glyphicon-plus'></i> Tambah Rekening
                              </a>
                          </span>
                      </td>
                      <td>
                        <center>
                          <form action="{{ url('admin/setting_profit/'.$row->id.'/destroy') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="del_status" id="del_status" value="YA">
                            </div>
                            <span>
                                <a data-toggle="tooltip" class="btn btn-success btn-xs btn-flat" title="Detail Data" href="{{ url('admin/setting_profit/'.$row->id.'/show') }}">
                                    <i class='glyphicon glyphicon-list-alt'></i>
                                </a>
                            </span>
                            <span>
                                <a data-toggle="tooltip" class="btn btn-primary btn-xs btn-flat" title="Edit Data" href="{{ url('admin/setting_profit/'.$row->id.'/edit') }}">
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
                <h4>Data tidak ditemukan, silahkan input data</h4>
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