<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mochamad fakih mujahidin - Portfolio</title>
   <link rel="icon" type="image/png" href="images/logo_portofolio.png">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">

    <!-- navbar -->
    <nav class="nav-container">
      <ul class="ul-nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#portofolio">Portofolio</a></li>
        <li><a href="#opini">Opini</a></li>
        <li><a href="#contact">Contact Me</a></li>
        <li class="dropdown-nav">
          <a href="#">More ▾</a>
          <ul class="ul-dropdown">
            <li><a href="https://facebook.com" target="_blank"> facebook</a></li>
            <li><a href="https://instagram.com" target="_blank"> instagram</a></li>
            <li><a href="https://www.tiktok.com" target="_blank"> tiktok</a></li>
          </ul>
        </li>
      </ul>
      <div class="logo-nav">
        <img src="images/Desain tanpa judul.gif" alt="logo">
      </div>
    </nav>
    <!-- navbar -->

    <!-- content -->
    <!-- home-content -->
    <section id="home" class="home-container">
      <img src="images/fotosaya-removebg-preview.png" alt="mochamad fakih mujahidin">
      <div class="text-home">
        <h1>Hi, I'm Mochamad Fakih Mujahidin.</h1>
        <h2>Informatics Student & Front END Developer.</h2>
        <a href="#about" class="about-home">about me</a>
      </div>
    </section>
    <!-- home-content -->

    <!-- about-content -->
    <section id="about" class="about-container">
      <h2>About Me</h2>
      <div class="text-about">
        <p>
          Saya adalah mahasiswa Program Studi Teknik Informatika di Universitas Nahdlatul Ulama Sunan Giri (UNUGIRI)
          Bojonegoro yang memiliki semangat tinggi dalam mempelajari dan mengembangkan ilmu di bidang teknologi
          informasi. Saya tertarik pada pemrograman, pengembangan perangkat lunak, serta pemecahan masalah berbasis
          teknologi digital. Selain aktif dalam kegiatan perkuliahan, saya juga berusaha untuk mengembangkan
          keterampilan melalui proyek-proyek mandiri dan kerja tim. Dengan latar belakang ini, saya terus berupaya
          meningkatkan kompetensi teknis dan soft skill guna mempersiapkan diri menghadapi tantangan di dunia industri
          yang terus berkembang.
        </p>
        <img src="images/fotopribadi.jpg" alt="fotopribadi">
      </div>
    </section>
    <!-- about-content -->

    <!-- portofolio-content -->
    <section id="portofolio">
      <h2>Portofolio</h2>
       <a href="index.php">
        <div class="button-container">
    <button class="tambah_data">Tambah Data</button>
</a>
</div>
      <table border="1">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Kegiatan</th>
            <th>Waktu</th>
            <th>Bukti</th>
          </tr>
        </thead>
        <tbody>
<?php
          $query = "SELECT * FROM portofolio";
          $result = mysqli_query($koneksi, $query);
          $no = 1;
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $no++ . "</td>";
              echo "<td>" . $row['Nama_kegiatan'] . "</td>";
              echo "<td>" . $row['Tanggal'] . "</td>";
              echo "<td><img src='uploads/" . $row['Bukti'] . "' alt='Bukti' class='sertifikat-img'></td>";
          }
          ?>
</tbody>

      </table>
    </section>
    <!-- portofolio-content -->

    <!-- opini-content -->
    <section id="opini" class="opini-section">
      <h2 class="section-title">Opini</h2>
      <div class="opini-grid">
        <!-- Baris Atas -->
        <a href="https://www.w3schools.com/html/default.asp" target="_blank" class="opini-card-link">
          <div class="opini-card">
            <img src="images/Logo.jpeg" alt="Google Solution Challenge">
            <hr>
            <div class="opini-info">
              <h3>HTML</h3>
            </div>
          </div>
        </a>

        <a href="https://www.malasngoding.com//" target="_blank" class="opini-card-link">
          <div class="opini-card">
            <img src="images/web development.jpeg" alt="Google Solution Challenge">
            <hr>
            <div class="opini-info">
              <h3>Dasar Web Development</h3>
            </div>
          </div>
        </a>

        <a href="https://www.jagoweb.com/" target="_blank" class="opini-card-link">
          <div class="opini-card">
            <img src="images/web hosting.jpeg" alt="Google Solution Challenge">
            <div class="opini-info">
              <h3>Web Hosting</h3>
            </div>
          </div>
        </a>

        <!-- Baris Bawah -->
        <a href="https://www.petanikode.com/" target="_blank" class="opini-card-link">
          <div class="opini-card">
            <img src="images/panen kode.png" alt="Google Solution Challenge">
            <div class="opini-info">
              <h3>Belajar budidaya kode</h3>
            </div>
          </div>
        </a>
    </section>
    <!-- opini-content -->


    <!-- contact me-content -->
    <section id="contact" class="contact-container">
      <h2>Contact Me</h2>
      <div class="container-contact">
        <form>
          <input type="email" placeholder="Masukkan email anda">
          <input type="text" placeholder="Masukkan nama anda">
          <input type="text" placeholder="Subjek pesan">
          <textarea placeholder="Tulis pesan anda disini"></textarea>
          <button type="submit">Kirim</button>
        </form><br>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7918.3981105559305!2d111.9445251!3d-7.1029145!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1746677135013!5m2!1sid!2sid"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <!-- contact me-content -->
    <!-- content -->

    <!-- footer -->
    <footer>
      <p>Copyright © by mochamad fakih mujahidin</p>
    </footer>
    <!-- footer -->

  </div>
</body>

</html>