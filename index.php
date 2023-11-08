<?php
require "./controller/functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data Berhasil Dikirim');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal Dikirim');
        document.location.href = 'index.php';
      </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="img/profile.png">
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Eka Putra</title>
</head>

<body>
  <header>
    <nav class="navbar" id="myTopnav">
      <ul>
        <li><a href="./controller/response.php"><img src="img/profile.png" alt="Profile" /></a></li>
        <li><a href="#about">Tentang Saya</a></li>
        <li><a href="#education">Pendidikan</a></li>
        <li><a href="#project">Project</a></li>
        <li><a href="#pengalaman">Pengalaman</a></li>
        <li><a href="#achievement">Prestasi</a></li>
        <li><a href="#contact">Hubungi Saya</a></li>
      </ul>
    </nav>
  </header>

  <section id="welcome">
    <div class="name" data-aos="fade-right" data-aos-duration="2000">
      <p><b>Eka Putra</b></p>
      <div id="typewriter-text"></div>
    </div>
    <div class="profile" data-aos="fade-left" data-aos-duration="1000">
      <img src="img/profile.png" alt="Foto Anda" />
    </div>
  </section>

  <section id="about">
    <h2 data-aos="fade-up" data-aos-duration="1000">Tentang Saya</h2>
    <br />
    <div class="deskripsi">
      <p data-aos="fade-right" data-aos-duration="1500">
        <b>I Putu Eka Putra Juniawan</b>, atau kerap disapa <b>Ebik</b> lahir di
        Gianyar, Bali, pada tanggal <b>4 Juni 2003</b>. Sejak kecil, saya selalu
        tertarik dengan teknologi dan komputer. Saya sering membongkar-mainkan
        komputer lama keluarga dan mencoba memperbaikinya. Saya melanjutkan
        pendidikannya di SMA Negeri 1 Gianyar. Setelah lulus SMA, Saya
        memutuskan untuk melanjutkan pendidikan ke jenjang universitas. Saya
        meraih nilai yang baik dalam ujian masuk universitas dan berhasil
        diterima di Universitas Udayana pada jurusan Teknologi Informasi.
      </p>
      <br />
      <p data-aos="fade-left" data-aos-duration="1500">
        Saya memulai studi di Universitas Udayana dengan semangat tinggi. Selama
        kuliah, saya aktif dalam berbagai kegiatan di kampus, termasuk menjadi
        anggota himpunan dan mengikuti berbagai kepanitiaan di program studi
        Teknologi Informasi. Sampai saat ini, saya telah mencapai beberapa
        pencapaian di kampus. Saya juga berencana untuk menyelesaikan gelar
        sarjana dalam waktu dekat dan bermimpi untuk bekerja di perusahaan
        teknologi terkemuka atau bahkan mendirikan perusahaan sendiri di bidang
        teknologi.
      </p>
    </div>
  </section>

  <section id="education">
    <h2 data-aos="fade-up" data-aos-duration="1500">Pendidikan</h2>
    <br />
    <div class="sekolah">
      <ul data-aos="fade-up" data-aos-duration="2000">
        <li class="card-sekolah">
          <h3>SD Negeri 2 Gianyar</h3>
          <p>2011 - 2017</p>
          <br />
          <div class="image-container">
            <img src="img/sd-2-gianyar.jpg" alt="" />
          </div>
          <br />
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.551630510785!2d115.33063427470887!3d-8.542833686590546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd216840995c161%3A0x7c43a5cde5baf5cf!2sSD%20Negeri%202%20Gianyar!5e0!3m2!1sid!2sid!4v1695173894473!5m2!1sid!2sid"
            width="200" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </li>
        <li class="card-sekolah">
          <h3>SMP Negeri 1 Gianyar</h3>
          <p>2017 - 2019</p>
          <br />
          <div class="image-container">
            <img src="img/smp-negeri-1-gianyar.png" alt="" />
          </div>
          <br />
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.576192534623!2d115.32287340000003!3d-8.5404589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2165e1e1d350d%3A0xe34256587b608ac6!2sSMP%20Negeri%201%20Gianyar!5e0!3m2!1sid!2sid!4v1695174029685!5m2!1sid!2sid"
            width="200" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </li>
        <li class="card-sekolah">
          <h3>SMA Negeri 1 Gianyar</h3>
          <p>2019 - 2022</p>
          <br />
          <div class="image-container">
            <img src="img/sma-negeri-1-gianyar.jpg" alt="" />
          </div>
          <br />
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.553814018849!2d115.3335547!3d-8.542622600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2165e02f9c31f%3A0x4aa95e83ead67ab2!2sSMA%20Negeri%201%20Gianyar!5e0!3m2!1sid!2sid!4v1695174058507!5m2!1sid!2sid"
            width="200" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </li>
        <li class="card-sekolah">
          <h3>Universitas</h3>
          <p>2022 - now.</p>
          <br />
          <div class="image-container">
            <img src="img/teknologi-informasi-udayana.jpeg" alt="" />
          </div>
          <br />
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.889920267349!2d115.17636379999999!3d-8.796411700000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244bd5227dd5b%3A0x2987c2fa4d855e33!2sUniversitas%20Udayana-Teknologi%20Informasi!5e0!3m2!1sid!2sid!4v1695174092681!5m2!1sid!2sid"
            width="200" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </li>
      </ul>
    </div>
  </section>

  <section id="project">
    <h2 data-aos="fade-up" data-aos-duration="1500">Project </h2>
    <br />
    <div class="accordion-box">
      <button class="accordion" data-aos="fade-left" data-aos-duration="1500">Praktikum Algoritma dan
        Pemrograman</button>
      <div class="panel">
        <p>Praktikum algoritma dan pemrograman adalah komponen penting dalam pendidikan di
          bidang ilmu komputer dan
          teknologi informasi. Praktikum ini dirancang untuk membantu mahasiswa memahami dan menguasai konsep-konsep
          dasar
          dalam algoritma, pemrograman, dan ilmu komputer secara umum. Beberapa materi dalam praktikum ini di antaranya
          :</p>
        <ul>
          <li>
            Dasar Pemrograman dan Fungsi
          </li>
          <li>
            Percabangan dan Perulangan
          </li>
          <li>
            Array dan Pointer
          </li>
          <li>
            Mengelola File Eksternal
          </li>
        </ul>
        <a href=" https://github.com/ekaputra04/PRAKTIKUM-ALGORITMA-DAN-PEMROGRAMAN" target="_blank">Github</a>
      </div>
      <button class="accordion" data-aos="fade-right" data-aos-duration="2000">Program Menghitung Rekening Air</button>
      <div class="panel">
        <p>Program ini bertujuan untuk menghitung besar pengeluaran atas pemakaian air PDAM. Program ini dapat
          menghitung segala jenis kategori pelanggan berdasarkan konsumsinya pada air PDAM. Setelah selesai menghitung,
          maka akan menampilkan struk pembayaran berupa file txt.</p>
        <a href="https://github.com/ekaputra04/REKENING-AIR-PDAM" target="_blank">Github</a>
      </div>
      <button class="accordion" data-aos="fade-left" data-aos-duration="2500">Bali United Cafe</button>
      <div class="panel">
        <p>Program ini bertujuan untuk memesan makanan pada Bali United Cafe. Program akan menampilkan pilihan menu yang
          tersedia, kemudian user dapat memesannya dengan cara login terlebih dahulu. Jika selesai memesan, akan
          didapatkan total harga serta user akan membayarnya.</p>
        <a href="https://github.com/ekaputra04/bali-united-cafe" target="_blank">Github</a>
      </div>
      <button class="accordion" data-aos="fade-right" data-aos-duration="3000">Java E-Commerce API</button>
      <div class="panel">
        <p>Program ini adalah API yang dapat melakukan operasi Get, Post, Put, Delete pada sebuah database marketplace.
          Program ini menggunakan bahasa pemrograman Java dan merupakan tugas mata kuliah Pemrograman Berbasis Objek
          Semester II. </p>
        <a href="https://github.com/ekaputra04/java-ecommerce-api" target="_blank">Github</a>
      </div>
      <button class="accordion" data-aos="fade-left" data-aos-duration="3500">Image Enhancement</button>
      <div class="panel">
        <p>Program ini adalah pengolahan citra berupa operasi Aritmatika Citra. Program dapat melakukan penjumlahan,
          pengurangan, perkalian, images blending, dan logika operator pada citra warna maupun citra grayscale. Program
          dibangun dengan bahasa pemrograman python dan menggunakan library openCV. Untuk tampilan UI menggunakan HTML
          serta backend menggunakan library Flask dari Python. </p>
        <a href="https://github.com/ekaputra04/java-ecommerce-api" target="_blank">Github</a>
      </div>
    </div>
  </section>

  <section id="pengalaman">
    <h2 data-aos="fade-up" data-aos-duration="1500">Pengalaman</h2>
    <br />
    <div class="pengalaman-slider" data-aos="fade-up" data-aos-duration="1500">
      <div>
        <img src="img/kepanitiaan/it-esega.jpg" alt="" />
      </div>
      <div>
        <img src="img/kepanitiaan/it-versary.jpg" alt="" />
      </div>
      <div>
        <img src="img/kepanitiaan/itcc.jpg" alt="" />
      </div>
      <div>
        <img src="img/kepanitiaan/pilmapres.jpg" alt="" />
      </div>
      <div>
        <img src="img/kepanitiaan/sporti.jpg" alt="" />
      </div>
    </div>
  </section>

  <section id="achievement">
    <h2 data-aos="fade-up" data-aos-duration="1500">Prestasi</h2>
    <br />
    <div class="achievement-content">
      <div class="achievement-slider" data-aos="fade-right" data-aos-duration="1500">
        <div>
          <img src="img/prestasi/1.jpg" alt="" />
        </div>
        <div>
          <img src="img/prestasi/2.jpg" alt="" />
        </div>
        <div>
          <img src="img/prestasi/3.jpg" alt="" />
        </div>
        <div>
          <img src="img/prestasi/4.jpg" alt="" />
        </div>
        <div>
          <img src="img/prestasi/5.jpg" alt="" />
        </div>
        <div>
          <img src="img/prestasi/6.jpg" alt="" />
        </div>
        <div>
          <img src="img/prestasi/7.jpg" alt="" />
        </div>
        <div>
          <img src="img/prestasi/8.jpg" alt="" />
        </div>
        <div>
          <img src="img/prestasi/9.jpg" alt="" />
        </div>
      </div>
      <div data-aos="fade-left" data-aos-duration="1500">
        <ul class="deskripsi">
          <li>
            Juara II Lomba Fotografi | Sabha Gotra PKN STAN 2023
          </li>
          <li>
            Juara II Lomba Desain Poster | Ufonity 2023
          </li>
          <li>
            Juara II Gema Lomba Essay | Educuption Undiksha 2023
          </li>
          <li>
            Finalis Kontes Robot Indonesia divisi KRSBI 2023
          </li>
          <li>
            Finalis Lomba Essay | Enfiction 2023
          </li>
          <li>
            Finalis Lomba Poster | Enfiction 2023
          </li>
          <li>
            Peserta Lomba Poster | Educuption 2023
          </li>
          <li>
            Peserta Lomba Poster | Enfivest 2023
          </li>
          <li>
            Peserta Lomba Esay | Sabha Gotra PKN STAN 2023
          </li>
          <li>
            Peserta Lomba Mobile Legends | IT-ESEGA 2023
          </li>
          <li>
            Peserta Lomba NPC | FNWMU UYEC 2023
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section id="contact">
    <h2 data-aos="fade-up" data-aos-duration="1500">Hubungi Saya</h2>
    <br />
    <form action="" method="post" data-aos="fade-up" data-aos-duration="1500">
      <ul>
        <li>
          <label for="nama">Nama </label>
          <input type="text" name="nama" id="nama" placeholder="Eka Putra Juniawan" />
        </li>
        <li>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="ekaputrajuniawan@gmail.com" />
        </li>
        <li>
          <label for="no_telepon">No Telepon</label>
          <input type="text" name="no_telepon" id="no_telepon" placeholder="081246504468" />
        </li>
        <li>
          <label for="pesan">Masukkan Pesan</label>
          <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="Hallo, boleh kenalan?"></textarea>
        </li>
        <li>
          <button type="submit" name="submit">Kirim Pesan</button>
        </li>
      </ul>
    </form>

    <div class="medsos">
      <ul>
        <li>
          <a href="https://github.com/ekaputra04"><img src="img/medsos/github.png" alt="" /></a>
        </li>
        <li>
          <a href="https://www.instagram.com/ptekaptra/"><img src="img/medsos/instagram.png" alt="" /></a>
        </li>
        <li>
          <a href="https://line.me/ti/p/wXH_mPMUSI"><img src="img/medsos/line.png" alt="" /></a>
        </li>
        <li>
          <a href="https://t.me/ptekaptr
            "><img src="img/medsos/telegram.png" alt="" /></a>
        </li>
        <li>
          <a href="https://wa.me/6281246504468"><img src="img/medsos/whatsapp.png" alt="" /></a>
        </li>
      </ul>
    </div>
  </section>

  <div id="scroll-to-top" class="scroll-to-top">&#8593;</div>

  <footer>
    <p>© 2023 by Eka Putra</p>
  </footer>

  <script src="./scripts/script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script>
  AOS.init();
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.pengalaman-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });

    $('.achievement-slider').slick({
      infinite: true,
      slidesToShow: 1,
    });
  });
  </script>
</body>

</html>