<?php
include 'functions.php';

// ambil dat dari url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["kirim"])) {
  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "<script>alert('data berhasil diubah');
    document.location.href='index.php';</script>";
  } else {
    echo "<script>alert('data gagal diubah!');
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
  <title>Ubah data mahasiswa</title>
</head>

<body>
  <h1>tambah data mahasiswa</h1>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <ul>
      <li><label for="nama">
          Nama :
          <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']; ?>">
        </label></li>
      <li><label for="npm">
          NPM :
          <input type="text" name="npm" id="npm" required value="<?= $mhs['npm']; ?>">
        </label></li>
      <li><label for="email">
          Email :
          <input type="text" name="email" id="email" required value="<?= $mhs['email']; ?>">
        </label></li>
      <li><label for=" jurusan">
          Jurusan :
          <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']; ?>">
        </label></li>
      <li><label for="gambar">
          Gambar :
          <input type="text" name="gambar" id="gambar" required value="<?= $mhs['gambar']; ?>">
        </label></li>
      <button type="kirim" name="kirim">Ubah data!</button>
    </ul>

    <body>
  </form>
</body>

</html>