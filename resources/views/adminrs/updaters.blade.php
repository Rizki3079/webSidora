@extends('template_admin')

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Update Jumlah Darah</h2>
    <h5 class="text-white op-7 mb-2">Halaman Update</h5>
@endsection

@section('container_section')
<div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                <table class="table table-bordered table-striped" id="example1">
        <thead>
    <form method="POST" action="/app-admin/update/{{ $dataBloodrs->jenis_darah }}">
        {{ csrf_field() }}
        <input type="hidden" name="jenis_darah" value="{{ $dataBloodrs->jenis_darah }}">
        <div class="mb-3">
            <label class="form-label">JENIS DARAH</label>
            <input type="text" class="form-control" value="{{ $dataBloodrs->jenis_darah }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">A</label>
            <input type="number" name="a" class="form-control" value="{{ $dataBloodrs->a}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">B</label>
            <input type="number" name="b" class="form-control" value="{{ $dataBloodrs->b}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">AB</label>
            <input type="number" name="ab" class="form-control" value="{{ $dataBloodrs->ab}}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">O</label>
            <input type="number" name="o" class="form-control" value="{{ $dataBloodrs->o}}" required>
        </div>
        </select>
        </thead>
</div>
</table>
            </div>
        </div>
    </div>
    <a href="/app-admin/bloodrs" class="btn btn-secondary">KEMBALI</a>
    <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
@endsection