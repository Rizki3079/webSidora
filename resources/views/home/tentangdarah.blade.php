@extends('template_home')

@section('container_section')
<div class="page-section">       
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- <div class="card"> --}}
            <ul class="list-unstyled">
            <li class="media">
              {{-- <img class="mr-3" src="/template_home/img/1.png" alt="Generic placeholder image"> --}}
              <div class="media-body">
                <h5 class="mt-0 mb-1"><b>Mengapa harus mendonorkan darah?</b></h5>
                Karena Donor darah adalah kegiatan yang positif dan mulia dan kita bisa menolong sesama. Donor darah bisa membantu mereka yang membutuhkan darah dalam situasi mendesak. Karena seringkali saat pasien dalam kondisi kritis, pihak PMI atau rumah sakit tak memiliki stok darah yang cukup. Nyatanya, donor darah tak hanya bermanfaat bagi penerima (resipien) saja, namun pendonor juga menerima manfaat yang luar biasa. Banyak penelitian yang berhasil membuktikan secara medis bahwa mendonorkan darah sebenarnya menguntungkan.
              </div>
            </li>
            <li class="media my-4">
              {{-- <img class="mr-3" src="..." alt="Generic placeholder image"> --}}
              <div class="media-body">
                <h5 class="mt-0 mb-1"><b>Apa saja syarat mendonorkan darah?</b></h5>
                Sehat jasmani dan rohani; Usia 17 sampai dengan 60 tahun dan Sampai 65 tahun untuk pendonor darah yang sudah rutin mendonorkan darahnya sampai akhirnya berhenti atas pertimbangan dokter; Berat badan minimal 45 Kg; Tekanan darah normal (Sistole 100 - 180 dan Diastole 70 - 100); Kadar haemoglobin 12,5-17,0 gr/dL%; Demi keamanan dan keselamatan pendonor sesuai dengan PERMENKES 91 Tahun 2015 interval waktu sejak donor darah terkahir minimal 2 bulan.
              </div>
            </li>
            {{-- <li class="media"> --}}
              {{-- <img class="mr-3" src="..." alt="Generic placeholder image"> --}}
              {{-- <div class="media-body">
                <h5 class="mt-0 mb-1"><b>Kapan harus menunda untuk menyumbangkan darah ?</b></h5>
                Sedang sakit demam atau influenza tunggu 1 minggu setelah sembuh; setalah cabut gigi, tunggu 5 hari setalah sembuh; setelah operasi kecil, tunggu 6 bulan; setelah operasi besar, tunggu 1 tahun; setelah transfusi, tunggu 1 tahun; setelah tato, tindik, tusuk jarum, dan transplantasi tunggu 1 tahun; bila kontak erat dengan penderita hepatitis, tunggu 1 tahun; sedang hamil, tunggu 6 setelah melahirkan; sedang menyusui, tunggu 3 bulan setelah berhenti menyusui; setelah sakit malaria, tunggu 3 tahun setalah bebas dari gejala malaria; setelah berkunjung dari daerah endemis malaria, tunggu 1 tahun; bila tinggal di daerah endemis malaria selama 5 tahun berturut-turut, tunggu 3 tahun setelah keluar dari daerah tersebut; bila sakit tipus, tunggu 6 bulan setelah sembuh; setelah vaksin, tunggu 8 minggu; ada gejala alergi tunggu 1 minggu setalah sembuh; ada infeksi kulit pada daerah yang akan ditusuk, tunggu 1 minggu setelah sembuh.
            </li> --}}
          {{-- </ul> --}}
          <li class="media">
            {{-- <img class="mr-3" src="..." alt="Generic placeholder image"> --}}
            <div class="media-body">
              <h5 class="mt-0 mb-1"><b>Tips sebelum melakukan donor darah</b></h5>
             <P> Persiapan untuk donor darah memaksimalkan darah yang didonorkan menjadi lebih sehat dan lebih banyak. Berikut ini persiapan donor darah yang harus dilakukan sebelum melakukannya, yaitu: </P>
             <li class="list-group list-group-numbered">1. Perbanyak Konsumsi Makanan dengan Zat Besi</li>
             <p  > Salah satu hal yang harus dilakukan sebagai persiapan untuk memberikan donor darah adalah banyak mengonsumsi makanan yang kaya zat besi. Kandungan mineral tersebut penting untuk tubuh memproduksi hemoglobin, yang berfungsi untuk membawa oksigen dari paru-paru ke seluruh tubuh.
              Konsumsi makanan yang kaya zat besi membantu untuk menyimpan lebih banyak zat besi. Jika hal tersebut mengalami kekurangan saat kamu melakukan donor darah, maka mungkin saja anemia defisiensi zat besi terjadi pasca donor darah dilakukan. Makanan yang dapat dikonsumsi adalah daging, telur, dan ikan </p>
              <li class="list-group list-group-numbered">2. Perbanyak Konsumsi Air</li>
              <p>tengah dari kandungan darah di tubuh terbuat dari air, maka perbanyak konsumsi air penting untuk persiapan donor darah. Hal ini membuat kamu tetap terhidrasi dan membuat darah yang dihasilkan tubuh lebih banyak. Jika tidak, kamu dapat mengalami penurunan tekanan darah yang berakibat pada pusing.</p>
             <li class="list-group list-group-numbered">3. Berolahraga</li>
             <P>ndari melakukan latihan keras atau mengangkat beban yang berat sebelum dan sesudah darah dari tubuh kamu diambil. Kamu harus menjaga tubuh tetap dalam keadaan istirahat agar dapat mengisi kembali cairan yang hilang selama donor dilakukan. Hal ini membuat kamu terhindar dari pusing dan menjaga tetap sehat.</P>
          </li>
        </ul>
        <h5 class="mt-0 mb-1"><b>Tata Cara melakukan donor darah</b></h5>
        <li class="list-group list-group-numbered">1. Calon Pendonor mengisi Formulir pada website resmi PMI.</li>
        <li class="list-group list-group-numbered">2. Calon Pendonor datang ke PMI untuk di timbang berat badannya.</li>
        <li class="list-group list-group-numbered">3. Calon Pendonor diperiksa kesehatannya oleh dokter PMI.</li>
        <li class="list-group list-group-numbered">4. Calon Pendonor di periksa tekanan darahnya.</li>
        <li class="list-group list-group-numbered">5. Calon Pendonor diperiksa golongan darah dan kadar haemoglobin (HB).</li>
        <li class="list-group list-group-numbered">6. Setelah memenuhi syarat untuk donor, Calon Pendonor dipersilakan menempati tempat pengambilan darah (Aftap).</li>
        <li class="list-group list-group-numbered">7. Setelah selesai, Pendonor kembali ke bagian administrasi donor darah untuk menerima menu donor dan kartu donor yang telah diregistrasi oleh petugas.</li>
        <li class="list-group list-group-numbered">8. Pendonor dapat kembali menyumbangkan darahnya setelah 3 bulan berikutnya.</li>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>

@endsection