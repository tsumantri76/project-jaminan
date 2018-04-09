@extends('layouts.app')

  @section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Vendor
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data Vendor</li>
        </ol>
      </section>
      
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <a href="{{ route('setting_vendor.create') }}" class="btn btn-primary">
                  <span class="fa fa-plus"></span> Tambah Data
                </a>
              </div>
              <!-- /.box-header -->
              @if(count($vendors) > 0)
                
              <div class="box-body table-responsive">
                <table id="data-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Vendor</th>
                    <th>Vendor</th>
                    <th>No NPWP</th>
                    <th>E-Mail</th>
                    <th>PIC</th>
                    <th>Telpon</th>
                    <th>Alamat</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($vendors as $datavendors)
                    <tr>
                      <td></td>
                      <td>{{ $datavendors->novendor }}</td>
                      <td>{{ $datavendors->vendor }}</td>
                      <td>{{ $datavendors->npwp }}</td>
                      <td>{{ $datavendors->email }}</td>
                      <td>{{ $datavendors->pic }}</td>
                      <td>{{ $datavendors->telp }}</td>
                      <td>{{ $datavendors->alamat }}</td>
                      <td>
                        <center>
                          <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <span>
                                <a class="btn btn-info btn-xs" title="Detail" href="">
                                    <i class='fa fa-list'></i>
                                </a>
                            </span>
                            <span>
                                <a class="btn btn-primary btn-xs" title="Edit Data" href="">
                                    <i class='fa fa-edit'></i>
                                </a>
                            </span>
                            <span>
                                <button class="btn btn-danger btn-xs" title="Hapus Data" type="submit">
                                  <i class='fa fa-trash'></i>
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
                    <th>No Vendor</th>
                    <th>Vendor</th>
                    <th>No NPWP</th>
                    <th>E-Mail</th>
                    <th>PIC</th>
                    <th>Telpon</th>
                    <th>Alamat</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
              
              @else

              <div class="box-body">
                <h4>Data tidak ditemukan, Silahkan input data</h4>
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