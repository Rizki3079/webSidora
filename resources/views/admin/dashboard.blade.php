@extends('template_admin')

@section('title_section')
    Dashbord Admin
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
    <h5 class="text-white op-7 mb-2">Halaman Dashboard</h5>
@endsection

@section('container_section')
  @can('admin')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title"><b>Hallo Admin</div>
                </div>
                
            </div>
        </div>
    </div>
   @endcan
@endsection

@section('container_section')
    @can('user')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title"><b>Selamat Datang Di Website Sistem Informasi Donor Darah</b></div>
                </div>
                
            </div>
        </div>
    </div>
    @endcan
@endsection

@section('script_section')
@endsection
