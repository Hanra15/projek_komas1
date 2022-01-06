<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Masjid Jami' Al-huda - Cibinong</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:masjidalhudacibinong@gmail.com">masjidalhudacibinong@gmail.com</a></i>
        <!-- <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i> -->
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
        <a href="https://wa.me/081283215772" target="_blank" class="whatsapp bi bi-phone d-flex align-items-center ms-4"><span> Contact Person : +62 8123 4567 8910</span></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <a href="index.html" class="logo"><img src="assets/img/favicon.png" alt=""></a> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="logo"><a href="#">Masjid Al-Huda Cibinong<span>.</span></a></h1>
      
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#kegiatan">Kegiatan</a></li>
          <li><a class="nav-link scrollto " href="#galeri">Galeri</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <!-- <li class="dropdown"><a href="#kegiatan"><span>Kegiatan Masjid</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#kegiatan">Galeri Kegiatan</a></li>
              <li class="dropdown"><a href="#"><span>Peringatan Hari Besar Islam</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#pengajian">PengajianIdul Fitri</a></li>
                  <li><a href="#iduladha">Hari Raya Idul Adha</a></li>
                  <li><a href="#phbi">Hari Besar Islam</a></li>
                  <li><a href="#maulid">Maulid Nabi Muhammad SAW</a></li>
                  <li><a href="#isra">Isra Mi'raj</a></li>
                </ul>
              </li>
              <li><a href="#">Jadwal Imam Harian</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 
  <!-- waktu sholat -->
  <div class="table-responsive-sm waktusholat">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Subuh</th>
          <th scope="col">Dhuha</th>
          <th scope="col">Dzuhur</th>
          <th scope="col">Ashar</th>
          <th scope="col">Maghrib</th>
          <th scope="col">Isya</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $datalist['subuh']; ?></td>
          <td><?php echo $datalist['dhuha']; ?></td>
          <td><?php echo $datalist['dzuhur']; ?></td>
          <td><?php echo $datalist['ashar']; ?></td>
          <td><?php echo $datalist['maghrib']; ?></td>
          <td><?php echo $datalist['isya']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end waktu sholat -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div>
        
      </div>
      <h1>Selamat <span>Datang</span></h1>
      <h2>Dari Abu Hurairah Radhiyallahu'anhu, ia berkata, “Rasûlullâh Shallallahu 'alaihi wa sallam bersabda:
        Yang artinya : Sholat seorang laki-laki dengan berjama'ah akan dilipat-gandakan 25 (dua puluh lima) kali lipat daripada sholat yang dilakukan di rumah dan di pasarnya"</h2>
      <div class="d-flex">
        <a href="#tentang" class="btn-get-started scrollto">Info Masjid</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= tentang Section ======= -->
    <section id="tentang" class="tentang section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <h3>Masjid Jami' <span>Al-huda</span></h3>
          <!-- <p>Jl. Raya Jkt Bogor No.18, Cibinong, Bogor, Jawa Barat 16911</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/galeri/tentangmasjid.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Tentang Masjid Al-Huda</h3>
            <p class="fst-italic">
              Masjid Jami' Al-Huda berlokasi di Jalan Raya JKT Bogor No.18, tepatnya dekat pusat perbelanjaan Cibinong City Mall. <br>
            </p>
            <p>
              Masjid Jami' Al-Huda Cibinong awal mulanya berupa mushola sekitar tahun 70an, namun pada tahun 1985 memulai pembangunan masjid yang didirikan oleh Pak Husen, sampai saat ini masjid masih kokoh dan ramai oleh jama'ah sekitar.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End tentang Section -->

    <!-- ======= Kegiatan Section ======= -->
    <section id="kegiatan" class="kegiatan">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kegiatan</h2>
          <h3>Kegiatan <span>Masjid Al-Huda Cibinong</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">

        <div class="col-lg-6 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4><a href="">Pengajian rutin mingguan</a></h4>
              <p>Melaksakan pengajian Rutin tiap minggu untuk jama'ah sekitar</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-calendar-week"></i></div>
              <h4><a href="">Sholat Jum'at Berjama'ah</a></h4>
              <p>Melaksanakan Sholat Jum'at Berjama'ah untuk warga sekitar</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book-open"></i></div>
              <h4><a href="">Pengajian Yasinan</a></h4>
              <p>Melaksakan pengajian yasin rutin tiap malam jumat</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-moon"></i></div>
              <h4><a href="">Perayaan Hari Besar Islam</a></h4>
              <p>Turut merayakan hari besar islam seperti idul fitri, idul adha, dll</p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End kegiatan Section -->

    <!-- ======= quotes Section ======= -->
    <section id="quotes" class="quotes">
      <div class="container" data-aos="zoom-in">

        <div class="quotes-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="quote-item">
                <img src="assets/img/logohadits.png" class="quote-img" alt="">
                <h3>Hadits of the day</h3>
                <h4>Masjid Al-Huda Cibinong</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  HR. Bukhari No : 740, dari Sahabat Abi Hurairah RA, Rasulullah SAW Bersabda : <br>
                  Jika Imam membaca “Ghairil Maghdluubi Alaihim Wa la dldlaalliin” maka ucapkanlah “Aamiin” karena siapa yang ucapan aminnya bersamaan dengan aamiinnya Malaikat maka dosanya yang telah lalu akan diampuni.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End quote item -->

            <div class="swiper-slide">
              <div class="quote-item">
                <img src="assets/img/logohadits.png" class="quote-img" alt="">
                <h3>Hadits of the day</h3>
                <h4>Masjid Al-Huda Cibinong</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  HR. Ibnu Majah  No : 766 dari sahabat Abu Hurairah, Rasulullah SAW Bersabda :
                  <br>
                  Jika salah seorang dari kalian berwudlu dan membaguskannya, kemudian datang ke masjid, dan tidak ada yang menggerakkannya menuju masjid kecuali shalat maka tidaklah ia melangkahkan kaki kecuali dengannya Allah akan mengangkat derajad dan menghapus dosanya hingga ia masuk masjid, dan jika masuk masjid maka ia akan tetap dalam hitungan shalat selama shalatlah yang menahannya ( dari keinginan pulang).
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End quote item -->

            <div class="swiper-slide">
              <div class="quote-item">
                <img src="assets/img/logohadits.png" class="quote-img" alt="">
                <h3>Hadits of the day</h3>
                <h4>Masjid Al-Huda Cibinong</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  HR. Abu Daud no. 426. Syaikh Al Albani mengatakan bahwa hadits ini shahih :
                  <br>
                  Dari Ummu Farwah, ia berkata, “Rasulullah shallallahu 'alaihi wa sallam pernah ditanya, amalan apakah yang paling afdhol. Beliau pun menjawab, “Shalat di awal waktunya.” 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End quote item -->

            <div class="swiper-slide">
              <div class="quote-item">
                <img src="assets/img/logohadits.png" class="quote-img" alt="">
                <h3>Hadits of the day</h3>
                <h4>Masjid Al-Huda Cibinong</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Shahih Bukhari HN 614, dari  Abu Musa: “Nabi SAW bersabda :
                  <br>
                  Orang yang paling banyak mendapatkan pahala dalam shalat adalah mereka yang paling jauh (jarak rumahnya ke masjid), karena paling jauh dalam perjalanannya menuju masjid. Dan orang yang menunggu shalat hingga dia melaksanakan shalat bersama imam lebih besar pahalanya dari orang yang melaksanakan shalat kemudian tidur
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End quote item -->

            <div class="swiper-slide">
              <div class="quote-item">
                <img src="assets/img/logohadits.png" class="quote-img" alt="">
                <h3>Hadits of the day</h3>
                <h4>Masjid Al-Huda Cibinong</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Muttafaqun 'alaih, Lu'lu wal Marjan, yang disepakati oleh Bukhari dan Muslim 1/131 no. 387, Abu Hurairah, Nabi Shallallahu 'alaihi wa sallam bersabda :
                  <br>
                  Shalat seseorang (di masjid dengan berjama'ah) itu dilebihkan dengan 25 derajat dari shalat yang dikerjakan di rumah dan di pasar, sesungguhnya salah seorang di antara kalian jika berwudlu kemudian menyempurnakannya lalu mendatangi masjid, tak ada keinginan yang lain kecuali untuk shalat, maka tidaklah ia melangkah dengan satu langkah pun kecuali Allah mengangkatnya satu derajat, dan terhapus darinya satu kesalahan hingga ia masuk masjid …
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End quote item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End quotes Section -->

    <!-- ======= Galeri Section ======= -->
    <section id="galeri" class="galeri">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
          <h3>Galeri <span> Kegiatan Masjid</span></h3>
          <!-- <p>Kegiatan Masjid Al-huda Cibinong meliputi kegiatan peringatan hari besar islam, Sholat Jum'at berjama'ah, dan pelaksanaan sholat 5 waktu setiap hari nya.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="galeri-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-kegiatan1" id="pengajian">Pengajian</li>
              <li data-filter=".filter-kegiatan2" id="tempat">Masjid</li>
              <li data-filter=".filter-kegiatan3" id="phbi">Hari Besar Islam</li>
            </ul>
          </div>
        </div>

        <div class="row galeri-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 galeri-item filter-kegiatan2">
            <img src="assets/img/galeri/masjid1.jpg" class="img-fluid" alt="">
            <div class="galeri-info">
              <h4>Masjid</h4>
              <a href="assets/img/galeri/masjid1.jpg" data-gallery="galeriGallery" class="galeri-lightbox preview-link" title=""><i class="bx bx-search"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item filter-kegiatan2">
            <img src="assets/img/galeri/masjid3.jpg" class="img-fluid" alt="">
            <div class="galeri-info">
              <h4>Tempat Wudhu</h4>
              <a href="assets/img/galeri/masjid3.jpg" data-gallery="galeriGallery" class="galeri-lightbox preview-link" title=""><i class="bx bx-search"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item filter-kegiatan2">
            <img src="assets/img/galeri/masjid5.jpg" class="img-fluid" alt="">
            <div class="galeri-info">
              <h4>Mading</h4>
              <a href="assets/img/galeri/masjid5.jpg" data-gallery="galeriGallery" class="galeri-lightbox preview-link" title=""><i class="bx bx-search"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End kegiatan Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Kontak Kami</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Masjid</h3>
              <p>Jl. Raya Jkt Bogor No.18, Cibinong, Bogor, Jawa Barat 16911</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Kami</h3>
              <p>masjidalhudacibinong@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Contact Person</h3>
              <p>+62 8123 4567 9810</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5606.345127463777!2d106.8437059116239!3d-6.485590395711811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1befc1bf7f3%3A0xc0f4823513f71fba!2sMasjid%20Jami%20Al-Huda!5e0!3m2!1sen!2sid!4v1638428781250!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Masjid Jami' Al-Huda <span>Cibinong</span></h3>
            <p>
              Jl. Raya Jkt Bogor No.18, <br>
              No.18, Cibinong, Bogor,<br>
              Jawa Barat 16911 <br><br>
              <strong>Phone:</strong> +62 8123 4567 8910<br>
              <strong>Email:</strong> masjidalhudacibinong@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#tentang">Tentang kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#kegiatan">Kegiatan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#galeri">Galeri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Kegiatan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sholat Jum'at</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peringatan Hari Besar Islam</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengajian Rutin</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Jadwal Imam</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hadits</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Komas1</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>