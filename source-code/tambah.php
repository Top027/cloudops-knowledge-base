<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli(
    "172.31.37.186",
    "portfolio",
    "Password123!",
    "portfolio"
);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $devisi = $_POST['devisi'];
    $jabatan = $_POST['jabatan'];

    $sql = "INSERT INTO karyawan (nama, devisi, jabatan)
            VALUES ('$nama','$devisi','$jabatan')";

    if($conn->query($sql)){
        echo "<script>
                alert('Data berhasil ditambahkan');
                window.location='index.php';
              </script>";
        exit;
    } else {
        die("MYSQL ERROR : " . $conn->error);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Tambah Karyawan</h2>

<form method="POST">

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Divisi</label>
        <input type="text" name="devisi" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">
        Simpan
    </button>

    <a href="index.php" class="btn btn-secondary">
        Kembali
    </a>

</form>

</body>
</html>
