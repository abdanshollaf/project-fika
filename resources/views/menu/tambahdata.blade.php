@extends('layouts.app')
@section('title')
<title>Admin | Tambah Data Jurnal</title>
@endsection
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @elseif(Session::has('danger_msg'))
                        <div class="alert alert-danger">{{ Session::get('danger_msg') }}</div>
                    @endif
                    <!-- RECENT PURCHASES -->
                    <div class="panel panel-scrolling">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tambah Data Jurnal</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i
                                        class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <br>
                            <form class="form-horizontal" action="{{ route('datastore') }}"
                                method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="penulis"
                                        class="control-label col-md-3 col-sm03 col-xs-12">Author</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="penulis" id="penulis" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="penulis" class="control-label col-md-3 col-sm03 col-xs-12">Nomor</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="no" id="no" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="penulis" class="control-label col-md-3 col-sm03 col-xs-12">Tahun</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="tahun" id="tahun" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="penulis"
                                        class="control-label col-md-3 col-sm03 col-xs-12">Volume</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="volume" id="volume" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="control-label col-md-3 col-sm03 col-xs-12">Judul</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="judul" id="judul" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="penulis" class="control-label col-md-3 col-sm03 col-xs-12">Upload
                                        Dokumen</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="dokumen" id="dokumen" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END RECENT PURCHASES -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
