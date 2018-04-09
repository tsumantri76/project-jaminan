@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Agenda</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                <li><a href="{{ route('post.index') }}"><i class="glyphicon glyphicon-calendar"></i> Agenda</a></li>
                <li class="active">Detail Data Agenda</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                        <h3 class="box-title">Detail Data Agenda ID : {{ $post->id }}</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <p>{{ $post->title }}</p>
                            </div>
                            <div class="form-group">
                                <label for="body">Body Content</label>
                                <p>{{ $post->body }}</p>
                            </div>
                            <div class="form-group">
                        </div>
                        <div class="box-footer">
                            <button type="button" class="btn btn-warning" onclick="self.history.back()"> Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection