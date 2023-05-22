@extends('template_admin')

       <!-- START FORM -->
    
 @section('header_section')
    <h2 class="text-white pb-2 fw-bold">Edit Data Permohonan</h2>
    <h5 class="text-white op-7 mb-2">Halaman Update</h5>
@endsection
        
    @section('container_section')
        <div class="row mt--2">
        <div class="col-md-12">
        <div class="card full-height">
        <div class="card-body">
            <form method="POST" action="/app-admin/datapermohonan/updatePermohonan">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $datapermohonan->id }}">
                {{-- <input type="hidden" name="status" value="{{ $datapermohonan->status}}"> --}}
                {{-- <div class="mb-3">

                    <label class="form-label">NIP</label>
                    <input type="number" name="nip" value="{{ $datapermohonan->nip }}" class="form-control" >
                </div> --}}
                <div class="mb-3">
                    <label class="form-label">Nama Instanasi</label>
                    <input type="text" name="nama_instansi" value="{{ $datapermohonan->nama_instansi }}" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Pengajuan</label>
                    <input type="date" name="tanggal_pengajuan" value="{{ $datapermohonan->tanggal_pengajuan }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Kantong</label>
                    <input type="number" name="jumlah_kantong" value="{{ $datapermohonan->jumlah_kantong }}" class="form-control">
                </div>
                <div class="mb-3 row">
                <label for="status" class="col-sm-2 col-form-label"  >Status </label>
                <div class="col-sm-10">
                    <select class="custom-select custom-select-sm" name="status" value="{{ $datapermohonan->status }}">
                            <option selected disabled>Pilih Ubah Status</option>
                            <option value="Diajukan">Diajukan</option>
                            <option value="Sedang Diproses">Sedang Diproses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                     </div>
                <a href="/app-admin/datapermohonan" class="btn btn-secondary">KEMBALI </a> 
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
                
        </div>
        </div>
        </div>
        </div>
     @endsection
            
       
