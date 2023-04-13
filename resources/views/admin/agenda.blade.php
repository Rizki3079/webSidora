@extends('template_admin')

@section('title_section')
   Agenda Donor
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">agenda donor</h2>
    <h5 class="text-white op-7 mb-2">Halaman agenda</h5>
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
                <th>Lokasi</th>
                <th>Target Kantong</th>
                
                <th>
                    @can('admin')
                    <a href="/app-admin/agenda/create" class="btn btn-success">Tambah Data</a>
                    @endcan
                </th>
                
            </tr>
            
           
            </thead>
            <tbody>
                @foreach ($agenda as $agenda)
                <tr>
                    <td>{{ $agenda->tanggal }}</td>
                    <td>{{ $agenda->tempat }}</td>
                    <td>{{ $agenda->target }}</td>
                    <td>
                        @can('admin')
                        <a href="/app-admin/agenda/edit/{{ $agenda->id }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/app-admin/agenda/destroy/{{ $agenda->id }}" class="btn btn-sm btn-danger">Hapus</a>
                        @endcan
                        @can('user') 
                        <a href="/app-admin/{{ $agenda->id }}/formulir" class="btn btn-sm btn-primary">Donor</a>
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
