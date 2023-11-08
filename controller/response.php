<?php
require 'functions.php';
$responses = query("SELECT * FROM response");

// jika tombol cari ditekan
if (isset($_POST["cari"])) {
  $responses = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/style-response.css">
  <link rel="icon" type="image/x-icon" href="../img/profile.png">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Hasil Biodata</title>
</head>

<body>
  <div class="content" data-aos="fade-up" data-aos-duration="1500">
    <h2>Pencarian Data</h2>
    <form method="POST">
      <input type="text" name="keyword" placeholder="Masukkan kata kunci">
      <input type="submit" name="cari" value="Cari">
    </form>


    <h2>Hasil Response</h2>

    <table border="0" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>Pesan</th>
        <th>Aksi</th>
      </tr>

      <?php $i = 1 ?>
      <?php foreach ($responses as $response) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $response["nama"] ?></td>
          <td><?= $response["email"] ?></td>
          <td><?= $response["no_telepon"] ?></td>
          <td><?= $response["pesan"] ?></td>
          <td>
            <a href="update.php?id=<?= $response["id"] ?>">Update</a>
            <a href="delete.php?id=<?= $response["id"] ?>" onclick="return confirm('Yakin menghapus data?')">Delete</a>
          </td>
          <?php $i++ ?>
        </tr>
      <?php endforeach ?>
    </table>
  </div>

  <a href="./../index.php" class="back">Kembali Ke Website</a>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>