<?php

$koneksi = mysqli_connect("localhost", "root", "", "sim-alifia");


if (isset($_POST['login'])) {
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($koneksi, "select * from users where email = '$email' and password = '$password'");
    $hitung = mysqli_num_rows($cekuser);

    if ($hitung > 0) {
        $ambilData = mysqli_fetch_array($cekuser);
        $name = $ambilData['username'];
        $email = $ambilData['email'];

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        header('location: admin');
    } else {
        echo 'data tidak ditemukan';
    }
}


// if (isset($_POST['register'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $role = 'user';
//     $password = $_POST['password'];

//     $sql = "INSERT INTO users (name, email,role, password) 
//             VALUES ('$name', '$email', '$role', '$password')";
//     $stmt = $koneksi->prepare($sql);

//     $save = $stmt->execute();
//     if ($save) header("Location: login.php");
// }

if (isset($_POST['tambahBerita'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];

    $timestamp = time();
    $namaGambar = $timestamp . '_' . $gambar;

    $dir = "../assets/gambar/";
    $tmpFile = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $namaGambar);

    $result = mysqli_query($koneksi, "INSERT INTO berita (judul, deskripsi, gambar) VALUES ('$judul','$deskripsi','$namaGambar')");

    if ($result) {
        header("Location: berita.php");
    }
}

if (isset($_POST['ubahBerita'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];

    $queryShow = "SELECT * FROM berita WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);



    if ($_FILES['gambar']['name'] == "") {
        $namaGambar = $result['gambar'];
    } else {
        $gambar = $_FILES['gambar']['name'];
        unlink("../assets/gambar/" . $result['gambar']);
        $timestamp = time();
        $namaGambar = $timestamp . '_' . $gambar;
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/gambar/" . $namaGambar);
    }


    $query = "UPDATE berita SET judul='$judul',deskripsi='$deskripsi', gambar= '$namaGambar' WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: berita.php");
    }
}


if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $queryShow = "SELECT * FROM berita WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/gambar/" . $result['gambar']);

    $query = "DELETE FROM berita WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/berita.php");
}
