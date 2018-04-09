@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Bank
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Bank</li>
        </ol>
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                  <a href="{{ url('admin/setting_bank/create') }}" class="btn btn-primary">
                    <span class="fa fa-plus"></span> Tambah Data
                  </a>
              </div>
              <!-- /.box-header -->
              @if (count('$posts') > 0 )
                
              <div class="box-body table-responsive">
                <table id="data-table" class="table table-bordered table-condensed table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Bank</th>
                    <th>Cabang</th>
                    <th>Rekening</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach($banks as $row)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $row->bank }}</td>
                      <td>{{ $row->cabang }}</td>
                      <td>{{ $row->rekening }}</td>
                      <td>
                        <center>
                          <form action="{{ url('admin/setting_bank/'.$row->id.'/destroy') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <span>
                                <a class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit Data" href="{{ url('admin/setting_bank/'.$row->id.'/edit') }}">
                                    <i class='glyphicon glyphicon-edit'></i>
                                </a>
                            </span>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="del_status" id="del_status" value="YA">
                            </div>
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
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Bank</th>
                    <th>Cabang</th>
                    <th>Rekening</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
              
              @else

              <div class="box-body">
                <h4>Datas Not Found</h4>
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