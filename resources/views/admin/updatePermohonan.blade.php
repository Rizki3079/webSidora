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
    <form method="POST" action="/app-admin/updatePermohonan/{{ $datapermohonan->id }}">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="id" value="{{ $datapermohonan->id }}"> --}}
        {{-- <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" class="form-control" value="{{ $datapermohonan->nip }}" disabled>
        </div> --}}
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
        {{-- <div class="mb-3">
            <label class="form-label">DOKUMEN</label>
            <input type="file" name="dokumen" class="form-control" value="{{ $datapermohonan->dokumen}}" required>
        </div> --}}
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select class="custom-select custom-select-sm" name="status">
                    <option selected disabled>Ubah Status</option>
                    <option value="Diajukan">Diajukan</option>
                    <option value="Sedang Diproses">Sedang Diproses</option>
                    <option value="Selesai">Selesai</option>
                </select>
    </div>
        </select>
        </thead>
</div>
</table>
            </div>
        </div>
    </div>
    <a href="/app-admin/updatePermohonan" class="btn btn-secondary">KEMBALI</a>
    
    <button type="submit"  class="btn btn-primary">UPDATE</button>
</form>
@endsection