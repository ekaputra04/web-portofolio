<?php
$conn =  mysqli_connect("localhost", "root", "", "response_user");

function query($query)
{
  // membuat variabel conn menjadi global
  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  // ambil data tari setiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $no_telepon = htmlspecialchars($data["no_telepon"]);
  $pesan = htmlspecialchars($data["pesan"]);

  // query insert data
  $query = "INSERT INTO response VALUES
            ('', '$nama', '$email', '$no_telepon', '$pesan')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
