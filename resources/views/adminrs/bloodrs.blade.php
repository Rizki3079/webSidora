@extends('template_admin')

@section('title_section')
   stok darah
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">stok darah</h2>
    <h5 class="text-white op-7 mb-2">Halaman stok darah Rumah Sakit</h5>
@endsection

@section('container_section')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
        <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th>JENIS DARAH</th>
                
                <th align="center">A</th>
                <th>B</th>
                <th>AB</th>
                <th>O</th>
                <th></th>                
                
            </tr>
            
        </thead>
        <tbody>
            @foreach ( $bloodsrs as $bloodrs)
            <tr>
                <th>{{ $bloodrs->jenis_darah }}</th>
                <td>{{ $bloodrs->a }}</td>
                <td>{{ $bloodrs->b }}</td>
                <td>{{ $bloodrs->ab }}</td>
                <td>{{ $bloodrs->o }}</td>
                <td>
                @role('adminRs')
                    <a href="{{ url('/app-admin/edit/' . $bloodrs->id) }}" class="btn btn-sm btn-warning">Edit</a>
                @endrole
                </td>
                <!-- <a href='#' data-id="{{ $bloodrs->id }}" class="btn btn-warning btn-sm tombol-edit">Edit</a> -->
                
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>
</div>
</div>
    @endsection

@section('script_section')
@endsection
