@extends('template_admin')

@section('title_section')
   Data Pengiriman
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Data Pengiriman</h2>
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
                {{-- <th>Tanggal Pengajuan</th> --}}
                <th>Tanggal Pemrosesan</th>
                <th>Jumlah Kantong</th>
                <th>Dokumen</th>
                <th>Status</th>
                <th>
                    <a href="/app-admin/datapengiriman/create" class="btn btn-success">Tambah Data</a>
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach($datapengiriman as $datapengiriman )
                    <tr>
                    
                    <td>{{ $datapengiriman->nip }}</td>
                                        <td>{{ $datapengiriman->nama_instansi }}</td>   
                                        {{-- <td>{{ $datapengiriman->tanggal_pengajuan }}</td> --}}
                                        <td>{{ $datapengiriman->tanggal_pemrosesan }}</td>
                                        <td>{{ $datapengiriman->jumlah_kantong}}</td>  
                                        <td>{{ $datapengiriman->dokumen }}</td>
                                        <td>{{ $datapengiriman->status }}</td>             
                    
                        
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