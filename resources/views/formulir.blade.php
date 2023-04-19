@extends('template_admin')

       <!-- START FORM -->
    
       @section('header_section')
    <h2 class="text-white pb-2 fw-bold">Formulir Donor Darah</h2>
    <h5 class="text-white op-7 mb-2">Halaman Formulir</h5>
        @endsection
       @section('container_section')
       <br>
       <br>
       <a href="/app-admin/agenda" class="btn btn-danger">Kembali</a>
       <br>
       <form action='{{ route("generate-pdf") }}' method='POST'>
       {{ csrf_field() }} 
       <input type="hidden" name='tgl_donor' value="{{$agenda->tanggal}}">
              <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nik" class="col-sm-2 col-form-label">Nomor Induk Kependudukan (NIK)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nik' id="nik">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' required  id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label" >Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' required id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tlp" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='tlp' required id="tlp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='pekerjaan' required id="pekerjaan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='tempat_lahir' required id="tempat_lahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl_lahir' required id="tgl_lahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kartu_Donor" class="col-sm-2 col-form-label">Kartu Donor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='kartu_Donor' id="kartu_Donor">
                    <small class="text-danger">*Tidak Wajib Diisi</small>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jk' required id="jk">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="desa" class="col-sm-2 col-form-label">Desa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='desa' required id="desa">
                </div>
            </div>
            
            <div class="mb-3 row">
            <label for="kabupaten" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <select class="custom-select custom-select-sm" name="kecamatan">
                    <option selected disabled>Pilih Kecamatan</option>
                    <option value="Jatibarang">Jatibarang</option>
                    <option value="Sindang">Sindang</option>
                    <option value="Indramayu">Indramayu</option>
                    <option value="Lohbener">Lohbener</option>
                    <option value="Jatibarang">Jatibarang</option>
                    <option value="Anjatan">Anjatan</option>
                    <option value="Arahan">Arahan</option>
                    <option value="Balongan">Balongan</option>
                    <option value="Jatibarang">Bangodua</option>
                    <option value="Sindang">Bongas</option>
                    <option value="Indramayu">Cantigi</option>
                    <option value="Lohbener">Cikedung</option>
                    <option value="Jatibarang">Gabuswetan</option>
                    <option value="Anjatan">Gantar</option>
                    <option value="Arahan">Haurgeulis</option>
                    <option value="Balongan">Juntinyuat</option>
                </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='kabupaten' required id="kabupaten">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kabupaten" class="col-sm-2 col-form-label">Jenis Darah</label>
                <div class="col-sm-10">
                    <select class="custom-select custom-select-sm" name="jenis_darah">
                        <option selected disabled>Pilih Jenis Darah</option>
                        <option value="Whole Blood">Whole Blood</option>
                        <option value="Package Red Cell">Package Red Cell</option>
                        <option value="Trombocyte">Trombocyte</option>
                        <option value="Fresh Frozen Plasma">Fresh Frozen Plasma</option>
                    </select>
                    <small class="text-danger">*Tidak Wajib Diisi</small>
                </div>
            </div>
            <div class="mb-3 row">
            <label for="kabupaten" class="col-sm-2 col-form-label">Tipe Darah</label>
                <div class="col-sm-10">
                    <select class="custom-select custom-select-sm" name="tipe_darah">
                        <option selected disabled>Type Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    <small class="text-danger">*Tidak Wajib Diisi</small>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="status_pernikahan" class="col-sm-2 col-form-label">Status Pernikahan</label>
                <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="status_pernikahan" required id="menikah" value="1">
                    <label for="menikah" class="form-check-label">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="status_pernikahan" class="form-check-input" required id="belum_menikah" value="2">
                    <label for="belum_menikah" class="form-check-label">Belum Menikah</label>
                </div>
            </div>
            </div><br>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">CETAK FORMULIR</button></div>
            </div>
          </form>
        </div>
    
@endsection