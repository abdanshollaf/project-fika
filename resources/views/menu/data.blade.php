@extends('layouts.app')
@section('title')
<title>Admin | Data Jurnal</title>
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
                            <h3 class="panel-title">Data Jurnal</h3>
                            <div class="right">
                                <a href="{{ route('dataadd') }}" class="btn btn-primary"><span
                                        class="fa fa-plus-circle"></span> Tambah</a>
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
                                        <th>Abstrak</th>
                                        <th>Nama File</th>
                                        <th>Diupload</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->penulis }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->Volume }}</td>
                                            <td>{{ $item->abstrak }}</td>
                                            <td>{{ $item->namafile }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td><a href="{{ route('pengujian',$item->id) }}"
                                                    class="btn btn-primary"><span class="fa fa-edit"></span> Uji</a>
                                                <a href="{{ route('datadelete',$item->id) }}"
                                                    onclick="return confirm('Are you sure to delete?')" type='submit'
                                                    class="btn btn-danger"><span class="fa fa-trash-o"></span> Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END RECENT PURCHASES -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
