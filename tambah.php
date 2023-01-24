<?php
include 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["kirim"])) {
  // cek apakah data berhasil ditmbahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "<script>alert('data berhasil ditambahkan');
    document.location.href='index.php';</script>";
  } else {
    echo "<script>alert('data gagal ditambahkan!');
    document.location.href='index.php';</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data mahasiswa</title>
</head>

<body>
  <h1>Tambah data mahasiswa</h1>
  <form action="" method="post">
    <ul>
      <li><label for="nama">
          Nama :
          <input type="text" name="nama" id="nama" required>
        </label></li>
      <li><label for="npm">
          NPM :
          <input type="text" name="npm" id="npm" required>
        </label></li>
      <li><label for="email">
          Email :
          <input type="text" name="email" id="email" required>
        </label></li>
      <li><label for="jurusan">
          Jurusan :
          <input type="text" name="jurusan" id="jurusan" required>
        </label></li>
      <li><label for="gambar">
          Gambar :
          <input type="text" name="gambar" id="gambar" required>
        </label></li>
      <button type="kirim" name="kirim">Tambah data!</button>
    </ul>

    <body>
  </form>
</body>

</html>