@extends('template_admin')

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Update Data Permohonan</h2>
    <h5 class="text-white op-7 mb-2">Halaman Update</h5>
@endsection

@section('container_section')
<div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                <table class="table table-bordered table-striped" id="example1">
        <thead>
    <form method="POST" action="/app-admin/updatePermohonan/{{ $datapermohonan->nip }}">
        {{ csrf_field() }}
        <input type="hidden" name="nip" value="{{ $datapermohonan->nip }}">
        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" class="form-control" value="{{ $datapermohonan->nip }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA INSTANSI</label>
            <input type="text" name="nama_instansi" class="form-control" value="{{ $datapermohonan->nama_instansi}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">TANGGAL PENGAJUAN</label>
            <input type="date" name="tanggal_pengajuan" class="form-control" value="{{ $datapermohonan->tanggal_pengajuan}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">JUMLAH KANTONG</label>
            <input type="number" name="jumlah_kantong" class="form-control" value="{{ $datapermohonan->jumlah_kantong}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">DOKUMEN</label>
            <input type="file" name="dokumen" class="form-control" value="{{ $datapermohonan->dokumen}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">STATUS</label>
            <input type="text" name="status" class="form-control" value="{{ $datapermohonan->status}}" required>
        </div>
        </select>
        </thead>
</div>
</table>
            </div>
        </div>
    </div>
    <a href="/app-admin/blood" class="btn btn-secondary">KEMBALI</a>
    <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
@endsection