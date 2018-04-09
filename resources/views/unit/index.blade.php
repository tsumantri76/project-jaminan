@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Unit Teknis
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Unit Teknis</li>
        </ol>
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <a href="{{ url('admin/setting_unit/create') }}" class="btn btn-primary btn-sm">
                    <span class="fa fa-plus"></span> Tambah Data
                  </a>
              </div>
              <!-- /.box-header -->
              @if (count($units) > 0 )
                
              <div class="box-body table-responsive">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode unit</th>
                    <th>Nama Unit</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach($units as $row)
                    <tr>
                      <th>{{ $no++ }}</th>
                      <th>{{ $row->kode_unit }}</th>
                      <th>{{ $row->nama_unit }}</th>
                      <td>
                        <center>
                        <form action="{{ url('admin/setting_unit/'.$row->id.'/destroy') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <span>
                              <a class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit Data" href="{{ url('admin/setting_unit/'.$row->id.'/edit') }}">
                                    <i class='glyphicon glyphicon-edit'></i>
                                </a>
                            </span>
                            <span>
                                <button class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Data" type="submit">
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
                    <th>Kode unit</th>
                    <th>Nama Unit</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </tfoot>
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