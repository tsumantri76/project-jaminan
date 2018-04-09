@extends('layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h4>Quick Menus</h4>
            </div>
            <div class="col-md-12 col-xs-12 col-lg-6">
                <ol>
                    <li>Penawaran :
                        <a href=""> Penawaran Bank Garansi</a>, 
                        <a href=""> Penawaran Tunai</a>
                    </li>
                    <li>Pelaksanaan :
                        <a href=""> Pelaksanaan Bank Garansi</a>,
                        <a href=""> Pelaksanaan Tunai</a>, 
                    </li>
                    <li>Manajemen Data :
                        <a href=""> Bandara</a>, 
                        <a href=""> Unit</a>,
                        <a href=""> Proyek</a>, 
                        <a href=""> Profit Center</a>, 
                        <a href=""> Bank</a>,
                        <a href=""> Vendor</a>
                    </li>
                    <li>Report Data :
                        <a href=""> Bandara</a>, 
                        <a href=""> Unit</a>,
                        <a href=""> Proyek</a>, 
                        <a href=""> Profit Center</a>, 
                    </li>
                    <li>Pengaturan Akun :
                        <a href=""> Edit Akun</a>
                    </li>
                </ol> 
            </div>
            <div class="col-md-12 col-xs-12 col-lg-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h4>Hallo!</h4>
                        @php
                            if(Auth::user()->role_id == 1) {
                                $role = 'Administrator';
                            }
                            elseif (Auth::user()->role_id == 2) {
                                $role = 'Kasir';
                            }
                            elseif (Auth::user()->role_id == 3) {
                                $role = 'Unit';
                            }
                        @endphp
                        <p>{{ Auth::user()->nama }} kamu login sebagai {{ $role }} di Bandara {{ Auth::user()->id_bandara }}</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Small boxes (Stat box) -->
        {{-- <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bandara</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Vendor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row --> --}}
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection