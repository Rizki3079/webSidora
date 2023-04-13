@extends('template_admin')

@section('title_section')
   Data Permohonan
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Data Permohonan</h2>
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
                <th>NIP</th>
                <th>Nama Instansi</th>
                <th>Tanggal Pengajuan</th>
                <th>Jumlah Kantong</th>
                <th>Dokumen</th>
                <th>Status</th>
                
            </tr>
            </thead>
            <tbody>
            @foreach($datapermohonan as $datapermohonan )
                <tr>
                
                <td>{{ $datapermohonan->nip }}</td>
                                    <td>{{ $datapermohonan->nama_instansi }}</td>
                                    <td>{{ $datapermohonan->tanggal_pengajuan}}</td> 
                                    <td>{{ $datapermohonan->jumlah_kantong}}</td> 
                                    <td>{{ $datapermohonan->dokumen}}</td> 
                                    <td>{{ $datapermohonan->status }}</td>
                                    <td>

                                    <a href="/app-admin/{{ $datapermohonan->id }}/editPermohonan" class="btn btn-sm btn-primary">Edit</a>

                                    </td>                  
                    
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
