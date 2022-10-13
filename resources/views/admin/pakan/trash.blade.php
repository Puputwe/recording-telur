@extends('layouts.master')
@section('heading', 'Daftar Pakan')
@section('page')
    <li class="breadcrumb-item active">Daftar Pakan</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="/pakan/delete_all" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus Semua</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="pakan-datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pakan</th>
                                    <th>Jenis Pakan</th>
                                    <th>Perusahaan</th>
                                    <th>Stok</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($pakan_trash as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jenis }}</td>
                                        <td>{{ $data->perusahaan }}</td>
                                        <td>{{ number_format($data->stok) }} Kg</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>
                                            <a href="/pakan/restore/{{$data->id}}" class="btn btn-success btn-sm">Restore</a>
                                            <a href="/pakan/delete_kill/{{$data->id}}" class="btn btn-danger btn-sm">Hapus Permanen</a>
                                        </td>
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
@include('sweetalert::alert')
@endsection
 
@section('footer')
     <script>
      $(document).ready(function() {
        $('#pakan-datatable').DataTable();
                        });
    </script>
 @endsection
