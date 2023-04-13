@extends('template_admin')

       <!-- START FORM -->
    
       @section('header_section')
    <h2 class="text-white pb-2 fw-bold">Edit Data Permohonan</h2>
    <h5 class="text-white op-7 mb-2">Halaman</h5>
        @endsection
       @section('container_section')
       <br>
       <br>
       <a href="/app-admin/datapermohonan" class="btn btn-danger">Kembali</a>
       <br>
       
              <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nip' id="nip">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_instansi" class="col-sm-2 col-form-label">Nama Instansi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_instansi' required  id="nama_instansi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_pengajuan" class="col-sm-2 col-form-label" >Tanggal Pengajuan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tanggal_pengajuan' required id="tanggal_pengajuan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Kantong</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='jumlah_kantong' required id="jumlah_kantong">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dokumen" class="col-sm-2 col-form-label">Dokumen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='dokumen' required id="dokumen">
                </div>
           
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
        <a href="/app-admin/datapermohonan" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
@endsection