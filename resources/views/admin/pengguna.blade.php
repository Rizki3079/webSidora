@extends('template_admin')

@section('title_section')
   Pengguna
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Pengguna</h2>
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
                <th>ID</th>
                <th>Nama </th>
                {{-- <th>Tanggal Pengajuan</th> --}}
                <th>Role</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
                @foreach($pengguna as $pengguna )
                    <tr>
                    
                    <td>{{ $pengguna->id }}</td>
                                        <td>{{ $pengguna->name }}</td>   
                                        {{-- <td>{{ $datapengiriman->tanggal_pengajuan }}</td> --}}
                                        <td>{{ $pengguna->role}}</td>
                                        <td>{{ $pengguna->email}}</td>  
                                                  
                                          
                        
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