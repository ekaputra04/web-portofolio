<?php
require 'functions.php';
$responses = query("SELECT * FROM response");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Hasil Biodata</title>
  <!-- <link rel="stylesheet" href="style-response.css"> -->
</head>

<body>
  <div class="content">
    <h2>Hasil Biodata:</h2>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>Pesan</th>
      </tr>

      <?php $i = 1 ?>
      <?php foreach ($responses as $response) : ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $response["nama"] ?></td>
        <td><?= $response["email"] ?></td>
        <td><?= $response["no_telepon"] ?></td>
        <td><?= $response["pesan"] ?></td>
        <?php $i++ ?>
      </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div>
    <a href="index.php">Kembali Ke Website</a>
  </div>

</body>

</html>