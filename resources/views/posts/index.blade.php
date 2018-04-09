@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Agenda
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Agenda</li>
        </ol>
      </section>

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <a href="{{ route('post.create') }}" class="btn btn-primary">
                  <span class="fa fa-plus"></span> Tambah Data
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Agenda</h3>
              </div>
              <!-- /.box-header -->
              @if (count('$posts') > 0 )
                
              <div class="box-body table-responsive">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Titile</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $datapost)
                    <tr>
                      <td>{{ count($posts) }}</td>
                      <td>{{ $datapost->id }}</td>
                      <td>{{ $datapost->title }}</td>
                      <td>
                        <center>
                          <form action="{{ route('post.destroy', $datapost->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <span>
                                <a class="btn btn-info btn-xs" title="Detail" href="{{ route('post.show', $datapost->id) }}">
                                    <i class='glyphicon glyphicon-list'></i>
                                </a>
                            </span>
                            <span>
                                <a class="btn btn-primary btn-xs" title="Edit Data" href="{{ route('post.edit', $datapost->id) }}">
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
                    <th>ID</th>
                    <th>Titile</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
              
              @else

              <div class="box-body">
                <h3>Datas Not Found</h3>
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