@extends('template_admin')

@section('title_section')
   Stok Darah
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Stok Darah</h2>
    <h5 class="text-white op-7 mb-2">Halaman </h5>
@endsection

@section('container_section')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th> <a href="" class="far fa-calendar-alt fa-3x text-danger"></a></th>
                <th>Jenis Darah</th>
                <th>A</th>
                <th>B</th>
                <th>AB</th>
                <th>O</th>
                <th>
                    @can('admin')
                    <a href="/app-admin/stok/create" class="btn btn-success">Tambah Data</a>
                    @endcan
                </th>
                
            </tr>
            
           
            </thead>
            <tbody>
                @foreach ($stok as $stok)
                <tr>
                    <td>{{ $stok->jenis_darah }}</td>
                    <td>{{ $stok->a }}</td>
                    <td>{{ $stok->b }}</td>
                    <td>{{ $stok->ab }}</td>
                    <td>{{ $stok->o}}</td>
                    <td>
                        @can('admin')
                        <a href="/app-admin/stok/edit/{{ $stok->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/app-admin/stok/destroy/{{ $stok->id }}" class="btn btn-sm btn-danger">Hapus</a>
                        @endcan
                       
                    </td>
                </tr>
                
                @endforeach
            </tbody>
</table>
<h3><b>Jadwal Donor UTD PMI Indramayu</b></h3>
            <a href="" class="far fa-calendar-alt fa-2x text-danger"></a> <th>Senin - Minggu, 24 Jam</th>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script_section')
@endsection
