@extends('layouts.app')
@section('title')
<title>Admin | Dashboard</title>
@endsection
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- RECENT PURCHASES -->
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @elseif(Session::has('danger_msg'))
                        <div class="alert alert-danger">{{ Session::get('danger_msg') }}</div>
                    @endif
                    <div class="panel panel-scrolling">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dokumen Yang Telah Diupload</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i
                                        class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Author</th>
                                        <th>Judul</th>
                                        <th>Volume</th>
                                        <th>Terakhir Diupload</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->penulis }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->volume }}</td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END RECENT PURCHASES -->
                </div>
                <div class="col-md-12">
                    <!-- MULTI CHARTS -->
                    <div class="panel panel-scrolling">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dokumen Terakhir Diuji</h3>
                            <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i
                                        class="lnr lnr-chevron-up"></i></button>
                                <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                            </div>
                        </div>
                        <div class="panel-body no-padding">
                            <div class="pull-right">
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kata Yang Salah</th>
                                        <th>Hasil Koreksi Kata</th>
                                        <th>Tanggal Pengujian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $item)
                                        <tr>
                                            <td>{{ $item->kata_salah }}</td>
                                            <td>{{ $item->hasil }}</td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
