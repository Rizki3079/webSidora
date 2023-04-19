@extends('template_admin')

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Tambah Data Pengiriman</h2>
    <h5 class="text-white op-7 mb-2">Halaman Update</h5>
@endsection

{{-- @section('container_section')
<div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
    <form method="POST" action="/app-admin/datapengiriman/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Nama Instansi</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Pemrosesan</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Kantong</label>
            <input type="text" name="jumlah" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Dokumen</label>
            <input type="string" name="dokumen" class="form-control">
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Statuss</label>
            <div class="col-sm-10">
                <select class="custom-select custom-select-sm" name="status">
                    <option selected disabled>Pilih Status</option>
                    <option value="Diajukan">Diajukan</option>
                    <option value="Sedang Diproses">Sedang Diproses</option>
                    <option value="Selesai">Selesai</option>
        </div>
        <a href="/app-admin/datapengiriman" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="ml-2 btn btn-primary">TAMBAH</button>
    </form>
</div>
</div>
</div>
@endsection --}}

@section('container_section')
<div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
    <form method="POST" action="/app-admin/agenda/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Instansi</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Pemrosesan</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Kantong</label>
            <input type="text" name="jumlah" class="form-control">
        </div>
        <div class="mb-3">
            <label for="status" class="col-sm-2 col-form-label">Statuss</label>
            <select class="custom-select custom-select-sm" name="tipe_darah">
                <option selected disabled>Pilih Status</option>
                    <option value="Diajukan">Diajukan</option>
                    <option value="Sedang Diproses">Sedang Diproses</option>
                    <option value="Selesai">Selesai</option>
            </select>
        </div>
        
        <a href="/app-admin/agenda" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="ml-2 btn btn-primary">TAMBAH</button>
    </form>
        
</div>
            </div>
        </div>
</div>
@endsection