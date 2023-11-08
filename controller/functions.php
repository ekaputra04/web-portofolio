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

function cari($keyword)
{
  $query = "SELECT * FROM response WHERE
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            no_telepon LIKE '%$keyword%' OR
            pesan LIKE '%$keyword%';";
  return query($query);
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

function hapus($id)
{
  global $conn;

  mysqli_query($conn, "DELETE FROM response WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;

  // ambil data tari setiap elemen dalam form
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $no_telepon = htmlspecialchars($data["no_telepon"]);
  $pesan = htmlspecialchars($data["pesan"]);

  // query insert data
  $query = "UPDATE response SET
            nama = '$nama',
            email = '$email',
            no_telepon = '$no_telepon',
            pesan = '$pesan'
            WHERE id = $id";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
