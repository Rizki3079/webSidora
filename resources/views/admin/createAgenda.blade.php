@extends('template_admin')

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Tambah Agenda Donor</h2>
    <h5 class="text-white op-7 mb-2">Halaman Update</h5>
@endsection

@section('container_section')
<div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
    <form method="POST" action="/app-admin/agenda/store">
        {{ csrf_field() }}
        <input type="hidden" name="tanggal">
        <div class="mb-3">
            <label class="form-label">Tanggal Donor</label>
            <input type="date" name="tanggal" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Tempat Donor</label>
            <input type="text" name="tempat" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Target Kantong</label>
            <input type="text" name="target" class="form-control">
        </div>
        <a href="/app-admin/agenda" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="ml-2 btn btn-primary">TAMBAH</button>
    </form>
        
</div>
            </div>
        </div>
</div>
@endsection