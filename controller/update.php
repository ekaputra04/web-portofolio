<?php
require "functions.php";

$id = $_GET["id"];

$response = query("SELECT * FROM response WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert('Data Berhasil Diubah');
        document.location.href = 'response.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal Diubah');
        document.location.href = 'response.php';
      </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../img/profile.png">
  <link rel="stylesheet" href="../assets/style-update.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Ubah Data Response</title>
</head>

<body>
  <div class="content" data-aos="fade-up" data-aos-duration="1500">
    <h2>Ubah Data Response</h2>

    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $response["id"] ?>" />
      <ul>
        <li>
          <label for="nama">Nama :</label>
          <input type="text" name="nama" id="nama" required value="<?= $response["nama"] ?>">
        </li>
        <li>
          <label for="email">Email :</label>
          <input type="email" name="email" id="email" required value="<?= $response["email"] ?>">
        </li>
        <li>
          <label for="no_telepon">No Telepon :</label>
          <input type="text" name="no_telepon" id="no_telepon" required value="<?= $response["no_telepon"] ?>">
        </li>
        <li>
          <label for="pesan">Pesan :</label>
          <input type="text" name="pesan" id="pesan" required value="<?= $response["pesan"] ?>">
        </li>
        <li>
          <button type="submit" name="submit">Ubah Data</button>
        </li>
      </ul>
    </form>
  </div>

  <div data-aos="fade-up" data-aos-duration="1500">
    <a href="response.php" class="back">Kembali Ke Response</a>
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>