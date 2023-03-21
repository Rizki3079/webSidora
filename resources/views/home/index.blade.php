@extends('template_home')

@section('container_section')
    <div class="page-hero bg-image overlay-dark" style="background-image: url({{ url('/') }}/template_home/img/pmi1.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                {{-- <span class="subhead">Sistem Informasi Donor Darah</span> --}}
                <h1 class="display-4">KATAKAN SIDORA</h1>
                <a href="registrasi" class="btn btn-danger">Daftar</a>
            </div>
        </div>
    </div>

  <div class="bg-light">

  

    <div class="page-section pb-0" id="tentangdarah">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Selamat Datang <br> Salam Kemanusiaan</h1>
            <p class="text-grey mb-4">Informasi seputar Donor Darah</p>
            <a href="/tentang-darah" class="btn btn-danger">Baca Selengkapnya</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="{{ url('/') }}/template_home/img/blood.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section" id="agendadonor">
    <div class="container">
    </div>
    <div class="row">

        <div class="col-lg-6">
          <div class="card ml-4">
            <div class="row">
              <div class="col-lg-8">
                  <div class="card-body">
                    <h5 class="card-title">
                      Agenda Donor
                    </h5>
                    <p>Agenda Donor merupakan jadwal Donor Darah yang sedang berlangsung di berbagai tempat di beberapa daerah Kabupaten Indramayu.</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <img class="card-img" src="/template_home/img/agenda.png" alt="Card image cap">
              </div>
            </div>
            <div class="row mb-3 mr-2">
              <div class="col-lg-12">
                <div class="text-right ">
                  <a href="agenda-donor" class="btn btn-danger float-right">Lihat Jadwal</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="row">
              <div class="col-lg-8">
                  <div class="card-body">
                    <h5 class="card-title">
                     Stok Darah
                    </h5>
                    <p>Stok Darah yang tersedia di UTD PMI Indramayu sesuai dengan data yang terbaru.</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <img class="card-img" src="/template_home/img/darah1.png" alt="Card image cap">
              </div>
            </div>
            <div class="row mb-3 mr-2">
              <div class="col-lg-12">
                <div class="text-right">
                  <a href="stok-darah" class="btn btn-danger float-right">Lihat Stok</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      {{-- <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ url('/') }}/template_home/img/doctors/doctor_1.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Stein Albert</p>
              <span class="text-sm text-grey">Cardiology</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ url('/') }}/template_home/img/doctors/doctor_2.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Alexa Melvin</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ url('/') }}/template_home/img/doctors/doctor_3.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ url('/') }}/template_home/img/doctors/doctor_3.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{ url('/') }}/template_home/img/doctors/doctor_3.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. fria</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Tentang Kami</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                {{-- <a href="#"></a> --}}
              </div>
              <a href="https://instagram.com/indramayupmikabupaten?igshid=YmMyMTA2M2Y=" class="post-thumb">
                <img src="{{ url('/') }}/template_home/img/1.JPEG" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="https://instagram.com/indramayupmikabupaten?igshid=YmMyMTA2M2Y=">Giat PMI Kab.Indramayu</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{ url('/') }}/template_home/img/logopmi.PNG" alt="">
                  </div>
                  <span>@indramayupmikabupaten</span>
                </div>
                <span class="mai-time"></span>Rabu, 23 November 2022
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                {{-- <a href="#"></a> --}}
              </div>
              <a href="https://instagram.com/indramayupmikabupaten?igshid=YmMyMTA2M2Y=" class="post-thumb">
                <img src="{{ url('/') }}/template_home/img/2.jpeg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="https://instagram.com/indramayupmikabupaten?igshid=YmMyMTA2M2Y="> Gempa bumi di Kab. Cianjur</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{ url('/') }}/template_home/img/logopmi.PNG" alt="">
                  </div>
                  <span>@indramayupmikabupaten</span>
                </div>
                <span class="mai-time"></span> Selasa, 22 November 2022
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                {{-- <a href="#">Covid19</a> --}}
              </div>
              <a href="https://instagram.com/indramayupmikabupaten?igshid=YmMyMTA2M2Y=" class="post-thumb">
                <img src="{{ url('/') }}/template_home/img/3.jpeg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="https://instagram.com/indramayupmikabupaten?igshid=YmMyMTA2M2Y=">Korps Sukarela PMI Kab.Indramayu</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="{{ url('/') }}/template_home/img/logopmi.PNG" alt="">
                  </div>
                  <span>@indramayupmikabupaten</span>
                </div>
                <span class="mai-time"></span> Sabtu s.d Minggu 29-30 November 2022
              </div>
            </div>
          </div>
        </div

        <div class="col-12 text-center mt-4 wow zoomIn">
          {{-- <a href="blog.html" class="btn btn-danger">Read More</a> --}}
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->

  {{-- <div class="page-section"> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5414300004077!2d108.321994888855!3d-6.3237989999999975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebbfeabadcf9b%3A0xc95ce3ecdcef17ae!2sUDD%20PMI%20Kabupaten%20Indramayu!5e0!3m2!1sen!2sid!4v1671264998570!5m2!1sen!2sid" width="1262" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    {{-- <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-danger mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div> --}}
  </div> <!-- .page-section -->
@endsection