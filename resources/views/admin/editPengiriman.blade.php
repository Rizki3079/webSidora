@extends('template_admin')

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Update Data Pengiriman</h2>
    <h5 class="text-white op-7 mb-2">Halaman Update</h5>
@endsection

@section('container_section')
<div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
    <form method="POST" action="/app-admin/datapengiriman/update">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" name="nip" value="{{ $datapengiriman->nip }}" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Instansi</label>
            <input type="text" name="nama" value="{{ $datapengiriman->nama }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Pemrosesan</label>
            <input type="date" name="tanggal" value="{{ $datapengiriman->tanggal }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Kantong</label>
            <input type="text" name="jumlah" value="{{ $datapengiriman->tanggal }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Dokumen</label>
            <input type="string" name="dokumen" value="{{ $datapengiriman->dokumen }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" value="{{ $datapengiriman->status }}" class="form-control">
        </div>
        <a href="/app-admin/datapengiriman" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="ml-2 btn btn-primary">UPDATE</button>
    </form>
        
</div>
            </div>
        </div>
</div>
@endsection