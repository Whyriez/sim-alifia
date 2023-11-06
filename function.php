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
    $deskripsi = nl2br($deskripsi);
    $gambar = $_FILES['gambar']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambar = $timestamp . '_' . $gambar;

    $dir = "../assets/gambar/";
    $tmpFile = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $namaGambar);

    $result = mysqli_query($koneksi, "INSERT INTO berita (judul, deskripsi, gambar, tanggal) VALUES ('$judul','$deskripsi','$namaGambar', '$tanggal')");

    if ($result) {
        header("Location: berita.php");
    }
}

if (isset($_POST['ubahBerita'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi = nl2br($deskripsi);
    $gambar = $_FILES['gambar']['name'];
    $tanggal = date('Y-m-d');

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


    $query = "UPDATE berita SET judul='$judul',deskripsi='$deskripsi', gambar= '$namaGambar', tanggal= '$tanggal' WHERE id = '$id'";
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



if (isset($_POST['tambahPotensiDesa'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi = nl2br($deskripsi);
    $kategori = $_POST['kategori'];
    $gambar = $_FILES['gambar']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambar = $timestamp . '_' . $gambar;

    $dir = "../assets/gambar/";
    $tmpFile = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $namaGambar);

    $result = mysqli_query($koneksi, "INSERT INTO potensi_desa (judul, deskripsi, kategori, gambar, tanggal) VALUES ('$judul','$deskripsi','$kategori', '$namaGambar', '$tanggal')");

    if ($result) {
        header("Location: potensiDesa.php");
    }
}

if (isset($_POST['ubahPotensiDesa'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi = nl2br($deskripsi);
    $kategori = $_POST['kategori'];
    $gambar = $_FILES['gambar']['name'];
    $tanggal = date('Y-m-d');

    $queryShow = "SELECT * FROM potensi_desa WHERE id = '$id'";
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


    $query = "UPDATE potensi_desa SET judul='$judul',deskripsi='$deskripsi', kategori= '$kategori', gambar= '$namaGambar', tanggal= '$tanggal' WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: potensiDesa.php");
    }
}


if (isset($_GET['hapusPotensi'])) {
    $id = $_GET['hapusPotensi'];
    $queryShow = "SELECT * FROM potensi_desa WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/gambar/" . $result['gambar']);

    $query = "DELETE FROM potensi_desa WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/potensiDesa.php");
}

// Tambah Data Pengumuman
if (isset($_POST['tambahPengumuman'])) {
    $judul = $_POST['judulPengumuman'];
    $deskripsi = $_POST['deskripsiPengumuman'];
    $deskripsi = nl2br($deskripsi);
    $gambar = $_FILES['gambarPengumuman']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambar = $timestamp . '_' . $gambar;

    $dir = "../assets/gambar/";
    $tmpFile = $_FILES['gambarPengumuman']['tmp_name'];

    move_uploaded_file(
        $tmpFile,
        $dir . $namaGambar
    );

    $result = mysqli_query($koneksi, "INSERT INTO pengumuman (judul, deskripsi, gambar, tanggal) VALUES ('$judul','$deskripsi','$namaGambar', '$tanggal')");

    if ($result) {
        header("Location: pengumuman.php");
    }
}

// Edite Pengumuman
if (isset($_POST['ubahPengumuman'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi = nl2br($deskripsi);
    $gambar = $_FILES['gambar']['name'];
    $tanggal = date('Y-m-d');

    $queryShow = "SELECT * FROM pengumuman WHERE id = '$id'";
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


    $query = "UPDATE pengumuman SET judul='$judul',deskripsi='$deskripsi', gambar= '$namaGambar', tanggal= '$tanggal' WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: pengumuman    .php");
    }
}


// Hapus Pengumuman

if (isset($_GET['hapusPengumuman'])) {
    $id = $_GET['hapusPengumuman'];
    $queryShow = "SELECT * FROM pengumuman WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/gambar/" . $result['gambar']);

    $query = "DELETE FROM pengumuman WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/pengumuman.php");
}


if (isset($_POST['kirimSuratPindahPenduduk'])) {
    //Surat Pindah Penduduk
    $nama1 = $_POST['nama1'];
    $nomor1 = $_POST['nomor1'];
    $suratPernyataan1 = $_FILES['suratPernyataan1']['name'];
    $kk1 = $_FILES['kk1']['name'];
    $ktp1 = $_FILES['ktp1']['name'];
    $bukuNikah1 = $_FILES['bukuNikah1']['name'];
    $selfieKtp1 = $_FILES['selfieKtp1']['name'];
    $ijasah1 = $_FILES['ijasah1']['name'];
    $alamat1 = $_POST['alamat1'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarsuratPernyataan1 = $timestamp . '_' . uniqid() . '_' . $suratPernyataan1;
    $namaGambarkk1 = $timestamp . '_' . uniqid() . '_' . $kk1;
    $namaGambarktp1 = $timestamp . '_' . uniqid() . '_' . $ktp1;
    $namaGambarbukuNikah1 = $timestamp . '_' . uniqid() . '_' . $bukuNikah1;
    $namaGambarselfieKtp1 = $timestamp . '_' . uniqid() . '_' . $selfieKtp1;
    $namaGambarijasah1 = $timestamp . '_' . uniqid() . '_' . $ijasah1;


    $dir = "assets/dokumen/";
    $tmpFilesuratPernyataan1 = $_FILES['suratPernyataan1']['tmp_name'];
    $tmpFilekk1 = $_FILES['kk1']['tmp_name'];
    $tmpFilektp1 = $_FILES['ktp1']['tmp_name'];
    $tmpFilebukuNikah1 = $_FILES['bukuNikah1']['tmp_name'];
    $tmpFileselfieKtp1 = $_FILES['selfieKtp1']['tmp_name'];
    $tmpFileijasah1 = $_FILES['ijasah1']['tmp_name'];

    move_uploaded_file($tmpFilesuratPernyataan1, $dir . $namaGambarsuratPernyataan1);
    move_uploaded_file($tmpFilekk1, $dir . $namaGambarkk1);
    move_uploaded_file($tmpFilektp1, $dir . $namaGambarktp1);
    move_uploaded_file($tmpFilebukuNikah1, $dir . $namaGambarbukuNikah1);
    move_uploaded_file($tmpFileselfieKtp1, $dir . $namaGambarselfieKtp1);
    move_uploaded_file($tmpFileijasah1, $dir . $namaGambarijasah1);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, kk, ktp, buku_nikah,foto, ijasah, alamat, tanggal, jenis) VALUES ('$nama1', '$nomor1', '$namaGambarsuratPernyataan1','$namaGambarkk1','$namaGambarktp1', '$namaGambarbukuNikah1','$namaGambarselfieKtp1','$namaGambarijasah1','$alamat1', '$tanggal', 1)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuratPengantarNikah'])) {
    $nama2 = $_POST['nama2'];
    $nomor2 = $_POST['nomor2'];
    $kk2 = $_FILES['kk2']['name'];
    $ktp2 = $_FILES['ktp2']['name'];
    $bukuNikah2 = $_FILES['bukuNikah2']['name'];
    $pasFoto2 = $_FILES['pasFoto2']['name'];
    $ijasah2 = $_FILES['ijasah2']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarkk2 = $timestamp . '_' . uniqid() . '_' . $kk2;
    $namaGambarktp2 = $timestamp . '_' . uniqid() . '_' . $ktp2;
    $namaGambarbukuNikah2 = $timestamp . '_' . uniqid() . '_' . $bukuNikah2;
    $namaGambarpasFoto2 = $timestamp . '_' . uniqid() . '_' . $pasFoto2;
    $namaGambarijasah2 = $timestamp . '_' . uniqid() . '_' . $ijasah2;


    $dir = "assets/dokumen/";
    $tmpFilesuratPernyataan1 = $_FILES['suratPernyataan1']['tmp_name'];
    $tmpFilekk2 = $_FILES['kk2']['tmp_name'];
    $tmpFilektp2 = $_FILES['ktp2']['tmp_name'];
    $tmpFilebukuNikah2 = $_FILES['bukuNikah2']['tmp_name'];
    $tmpFilepasFoto2 = $_FILES['pasFoto2']['tmp_name'];
    $tmpFileijasah2 = $_FILES['ijasah2']['tmp_name'];

    move_uploaded_file($tmpFilekk2, $dir . $namaGambarkk2);
    move_uploaded_file($tmpFilektp2, $dir . $namaGambarktp2);
    move_uploaded_file($tmpFilebukuNikah2, $dir . $namaGambarbukuNikah2);
    move_uploaded_file($tmpFilepasFoto2, $dir . $namaGambarpasFoto2);
    move_uploaded_file($tmpFileijasah2, $dir . $namaGambarijasah2);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, kk, ktp, buku_nikah,foto, ijasah, tanggal, jenis) VALUES ('$nama2','$nomor2', '$namaGambarkk2','$namaGambarktp2', '$namaGambarbukuNikah2','$namaGambarpasFoto2','$namaGambarijasah2', '$tanggal', 2)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuratKeteranganMeninggal'])) {
    $nama3 = $_POST['nama3'];
    $nomor3 = $_POST['nomor3'];
    $suketRumahSakit = $_FILES['suketRumahSakit']['name'];
    $kk3 = $_FILES['kk3']['name'];
    $ktp3 = $_FILES['ktp3']['name'];
    $ktp3other = $_FILES['ktp3other']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarsuketRumahSakit = $timestamp . '_' . uniqid() . '_' . $suketRumahSakit;
    $namaGambarkk3 = $timestamp . '_' . uniqid() . '_' . $kk3;
    $namaGambarktp3 = $timestamp . '_' . uniqid() . '_' . $ktp3;
    $namaGambarktp3other = $timestamp . '_' . uniqid() . '_' . $ktp3other;


    $dir = "assets/dokumen/";
    $tmpFilesuketRumahSakit = $_FILES['suketRumahSakit']['tmp_name'];
    $tmpFilekk3 = $_FILES['kk3']['tmp_name'];
    $tmpFilektp3 = $_FILES['ktp3']['tmp_name'];
    $tmpFilektp3other = $_FILES['ktp3other']['tmp_name'];

    move_uploaded_file($tmpFilesuketRumahSakit, $dir . $namaGambarsuketRumahSakit);
    move_uploaded_file($tmpFilekk3, $dir . $namaGambarkk3);
    move_uploaded_file($tmpFilektp3, $dir . $namaGambarktp3);
    move_uploaded_file($tmpFilektp3other, $dir . $namaGambarktp3other);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, kk, ktp, other_ktp, tanggal, jenis) VALUES ('$nama3', '$nomor3','$namaGambarsuketRumahSakit', '$namaGambarkk3','$namaGambarktp3', '$namaGambarktp3other', '$tanggal', 3)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuratAhliWaris'])) {
    $nama4 = $_POST['nama4'];
    $nomor4 = $_POST['nomor4'];
    $suketMeninggalDunia = $_FILES['suketMeninggalDunia']['name'];
    $kk4AhliWaris = $_FILES['kk4AhliWaris']['name'];
    $ktp4AhliWaris = $_FILES['ktp4AhliWaris']['name'];
    $ktp4Pemohon = $_FILES['ktp4Pemohon']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarsuketMeninggalDunia = $timestamp . '_' . uniqid() . '_' . $suketMeninggalDunia;
    $namaGambarkk4AhliWaris = $timestamp . '_' . uniqid() . '_' . $kk4AhliWaris;
    $namaGambarktp4AhliWaris = $timestamp . '_' . uniqid() . '_' . $ktp4AhliWaris;
    $namaGambarktp4Pemohon = $timestamp . '_' . uniqid() . '_' . $ktp4Pemohon;


    $dir = "assets/dokumen/";
    $tmpFilesuketMeninggalDunia = $_FILES['suketMeninggalDunia']['tmp_name'];
    $tmpFilekk4AhliWaris = $_FILES['kk4AhliWaris']['tmp_name'];
    $tmpFilektp4AhliWaris = $_FILES['ktp4AhliWaris']['tmp_name'];
    $tmpFilektp4Pemohon = $_FILES['ktp4Pemohon']['tmp_name'];

    move_uploaded_file($tmpFilesuketMeninggalDunia, $dir . $namaGambarsuketMeninggalDunia);
    move_uploaded_file($tmpFilekk4AhliWaris, $dir . $namaGambarkk4AhliWaris);
    move_uploaded_file($tmpFilektp4AhliWaris, $dir . $namaGambarktp4AhliWaris);
    move_uploaded_file($tmpFilektp4Pemohon, $dir . $namaGambarktp4Pemohon);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, kk, ktp, other_ktp, tanggal, jenis) VALUES ('$nama4', '$nomor4','$namaGambarsuketMeninggalDunia', '$namaGambarkk4AhliWaris','$namaGambarktp4AhliWaris', '$namaGambarktp4Pemohon', '$tanggal', 4)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuratKelahiran'])) {
    $nama5 = $_POST['nama5'];
    $nomor5 = $_POST['nomor5'];
    $suratKelahiran = $_FILES['suratKelahiran']['name'];
    $kk5 = $_FILES['kk5']['name'];
    $ktp5 = $_FILES['ktp5']['name'];
    $bukuNikah5 = $_FILES['bukuNikah5']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarsuratKelahiran = $timestamp . '_' . uniqid() . '_' . $suratKelahiran;
    $namaGambarkk5 = $timestamp . '_' . uniqid() . '_' . $kk5;
    $namaGambarktp5 = $timestamp . '_' . uniqid() . '_' . $ktp5;
    $namaGambarbukuNikah5 = $timestamp . '_' . uniqid() . '_' . $bukuNikah5;


    $dir = "assets/dokumen/";
    $tmpFilesuratKelahiran = $_FILES['suratKelahiran']['tmp_name'];
    $tmpFilekk5 = $_FILES['kk5']['tmp_name'];
    $tmpFilektp5 = $_FILES['ktp5']['tmp_name'];
    $tmpFilebukuNikah5 = $_FILES['bukuNikah5']['tmp_name'];

    move_uploaded_file($tmpFilesuratKelahiran, $dir . $namaGambarsuratKelahiran);
    move_uploaded_file($tmpFilekk5, $dir . $namaGambarkk5);
    move_uploaded_file($tmpFilektp5, $dir . $namaGambarktp5);
    move_uploaded_file($tmpFilebukuNikah5, $dir . $namaGambarbukuNikah5);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor,surat, kk, ktp, buku_nikah, tanggal, jenis) VALUES ('$nama5','$nomor5','$namaGambarsuratKelahiran', '$namaGambarkk5','$namaGambarktp5', '$namaGambarbukuNikah5', '$tanggal', 5)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuratKeteranganTanah'])) {
    $nama6 = $_POST['nama6'];
    $nomor6 = $_POST['nomor6'];
    $buktiKepemilikanTanah = $_FILES['buktiKepemilikanTanah']['name'];
    $ktp6 = $_FILES['ktp6']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarbuktiKepemilikanTanah = $timestamp . '_' . uniqid() . '_' . $buktiKepemilikanTanah;
    $namaGambarktp6 = $timestamp . '_' . uniqid() . '_' . $ktp6;

    $dir = "assets/dokumen/";
    $tmpFilebuktiKepemilikanTanah = $_FILES['buktiKepemilikanTanah']['tmp_name'];
    $tmpFilektp6 = $_FILES['ktp6']['tmp_name'];

    move_uploaded_file($tmpFilebuktiKepemilikanTanah, $dir . $namaGambarbuktiKepemilikanTanah);
    move_uploaded_file($tmpFilektp6, $dir . $namaGambarktp6);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, ktp, tanggal, jenis) VALUES ('$nama6','$nomor6', '$namaGambarbuktiKepemilikanTanah','$namaGambarktp6', '$tanggal', 6)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuratKartuKeluarga'])) {
    $nama7 = $_POST['nama7'];
    $nomor7 = $_POST['nomor7'];
    $akta7 = $_FILES['akta7']['name'];
    $bukuNikah7 = $_FILES['bukuNikah7']['name'];
    $rapor7 = $_FILES['rapor7']['name'];
    $ijasah7 = $_FILES['ijasah7']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarakta7 = $timestamp . '_' . uniqid() . '_' . $akta7;
    $namaGambarbukuNikah7 = $timestamp . '_' . uniqid() . '_' . $bukuNikah7;
    $namaGambarrapor7 = $timestamp . '_' . uniqid() . '_' . $rapor7;
    $namaGambarijasah7 = $timestamp . '_' . uniqid() . '_' . $ijasah7;


    $dir = "assets/dokumen/";
    $tmpFileakta7 = $_FILES['akta7']['tmp_name'];
    $tmpFilebukuNikah7 = $_FILES['bukuNikah7']['tmp_name'];
    $tmpFilerapor7 = $_FILES['rapor7']['tmp_name'];
    $tmpFileijasah7 = $_FILES['ijasah7']['tmp_name'];

    move_uploaded_file($tmpFileakta7, $dir . $namaGambarakta7);
    move_uploaded_file($tmpFilebukuNikah7, $dir . $namaGambarbukuNikah7);
    move_uploaded_file($tmpFilerapor7, $dir . $namaGambarrapor7);
    move_uploaded_file($tmpFileijasah7, $dir . $namaGambarijasah7);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, buku_nikah, rapor, ijasah, tanggal, jenis) VALUES ('$nama7','$nomor7','$namaGambarakta7', '$namaGambarbukuNikah7','$namaGambarrapor7', '$namaGambarijasah7', '$tanggal', 7)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuratAktaKelahiran'])) {
    $nama8 = $_POST['nama8'];
    $nomor8 = $_POST['nomor8'];
    $suketLahir = $_FILES['suketLahir']['name'];
    $kk8 = $_FILES['kk8']['name'];
    $ktp8 = $_FILES['ktp8']['name'];
    $ktp8Saksi = $_FILES['ktp8Saksi']['name'];
    $bukuNikah8 = $_FILES['bukuNikah8']['name'];
    $ijasah8 = $_FILES['ijasah8']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarsuketLahir = $timestamp . '_' . uniqid() . '_' . $suketLahir;
    $namaGambarkk8 = $timestamp . '_' . uniqid() . '_' . $kk8;
    $namaGambarktp8 = $timestamp . '_' . uniqid() . '_' . $ktp8;
    $namaGambarktp8Saksi = $timestamp . '_' . uniqid() . '_' . $ktp8Saksi;
    $namaGambarbukuNikah8 = $timestamp . '_' . uniqid() . '_' . $bukuNikah8;
    $namaGambarijasah8 = $timestamp . '_' . uniqid() . '_' . $ijasah8;


    $dir = "assets/dokumen/";
    $tmpFilesuketLahir = $_FILES['suketLahir']['tmp_name'];
    $tmpFilekk8 = $_FILES['kk8']['tmp_name'];
    $tmpFilektp8 = $_FILES['ktp8']['tmp_name'];
    $tmpFilektp8Saksi = $_FILES['ktp8Saksi']['tmp_name'];
    $tmpFilebukuNikah8 = $_FILES['bukuNikah8']['tmp_name'];
    $tmpFileijasah8 = $_FILES['ijasah8']['tmp_name'];

    move_uploaded_file($tmpFilesuketLahir, $dir . $namaGambarsuketLahir);
    move_uploaded_file($tmpFilekk8, $dir . $namaGambarkk8);
    move_uploaded_file($tmpFilektp8, $dir . $namaGambarktp8);
    move_uploaded_file($tmpFilektp8Saksi, $dir . $namaGambarktp8Saksi);
    move_uploaded_file($tmpFilebukuNikah8, $dir . $namaGambarbukuNikah8);
    move_uploaded_file($tmpFileijasah8, $dir . $namaGambarijasah8);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, kk, ktp, other_ktp, buku_nikah, ijasah, tanggal, jenis) VALUES ('$nama8','$nomor8','$namaGambarsuketLahir', '$namaGambarkk8','$namaGambarktp8', '$namaGambarktp8Saksi', '$namaGambarbukuNikah8', '$namaGambarijasah8', '$tanggal', 8)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuketTidakMampu'])) {
    $nama9 = $_POST['nama9'];
    $nomor9 = $_POST['nomor9'];
    $suratPernyataan = $_FILES['suratPernyataan']['name'];
    $kk9 = $_FILES['kk9']['name'];
    $ktp9 = $_FILES['ktp9']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarsuratPernyataan = $timestamp . '_' . uniqid() . '_' . $suratPernyataan;
    $namaGambarkk9 = $timestamp . '_' . uniqid() . '_' . $kk9;
    $namaGambarktp9 = $timestamp . '_' . uniqid() . '_' . $ktp9;


    $dir = "assets/dokumen/";
    $tmpFilesuratPernyataan = $_FILES['suratPernyataan']['tmp_name'];
    $tmpFilekk9 = $_FILES['kk9']['tmp_name'];
    $tmpFilektp9 = $_FILES['ktp9']['tmp_name'];

    move_uploaded_file($tmpFilesuratPernyataan, $dir . $namaGambarsuratPernyataan);
    move_uploaded_file($tmpFilekk9, $dir . $namaGambarkk9);
    move_uploaded_file($tmpFilektp9, $dir . $namaGambarktp9);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, kk, ktp, tanggal, jenis) VALUES ('$nama9','$nomor9','$namaGambarsuratPernyataan', '$namaGambarkk9','$namaGambarktp9', '$tanggal', 9)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SuketPenghasilan'])) {
    $nama10 = $_POST['nama10'];
    $nomor10 = $_POST['nomor10'];
    $suratPernyataan10 = $_FILES['suratPernyataan10']['name'];
    $ktp10 = $_FILES['ktp10']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarsuratPernyataan10 = $timestamp . '_' . uniqid() . '_' . $suratPernyataan10;
    $namaGambarktp10 = $timestamp . '_' . uniqid() . '_' . $ktp10;


    $dir = "assets/dokumen/";
    $tmpFilesuratPernyataan10 = $_FILES['suratPernyataan10']['tmp_name'];
    $tmpFilektp10 = $_FILES['ktp10']['tmp_name'];
    $tmpFilerapor7 = $_FILES['rapor7']['tmp_name'];
    $tmpFileijasah7 = $_FILES['ijasah7']['tmp_name'];

    move_uploaded_file($tmpFilesuratPernyataan10, $dir . $namaGambarsuratPernyataan10);
    move_uploaded_file($tmpFilektp10, $dir . $namaGambarktp10);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, ktp, tanggal, jenis) VALUES ('$nama10','$nomor10', '$namaGambarsuratPernyataan10', '$namaGambarktp10', '$tanggal', 10)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_POST['SPORADIK'])) {
    $nama11 = $_POST['nama11'];
    $nomor11 = $_POST['nomor11'];
    $suratJualBeli = $_FILES['suratJualBeli']['name'];
    $suketWaris = $_FILES['suketWaris']['name'];
    $ktp11 = $_FILES['ktp11']['name'];
    $tanggal = date('Y-m-d');

    $timestamp = time();
    $namaGambarsuratJualBeli = $timestamp . '_' . uniqid() . '_' . $suratJualBeli;
    $namaGambarsuketWaris = $timestamp . '_' . uniqid() . '_' . $suketWaris;
    $namaGambarktp11 = $timestamp . '_' . uniqid() . '_' . $ktp11;


    $dir = "assets/dokumen/";
    $tmpFilesuratJualBeli = $_FILES['suratJualBeli']['tmp_name'];
    $tmpFilesuketWaris = $_FILES['suketWaris']['tmp_name'];
    $tmpFilektp11 = $_FILES['ktp11']['tmp_name'];

    move_uploaded_file($tmpFilesuratJualBeli, $dir . $namaGambarsuratJualBeli);
    move_uploaded_file($tmpFilesuketWaris, $dir . $namaGambarsuketWaris);
    move_uploaded_file($tmpFilektp11, $dir . $namaGambarktp11);

    $result = mysqli_query($koneksi, "INSERT INTO pelayanan_surat (nama, nomor, surat, other_surat, ktp, tanggal, jenis) VALUES ('$nama11','$nomor11', '$namaGambarsuratJualBeli', '$namaGambarsuketWaris','$namaGambarktp11', '$tanggal', 11)");

    if ($result) {
        header("Location: pelayananSurat.php");
    }
}

if (isset($_GET['gambar'])) {
    $gambar = $_GET['gambar'];

    // Tentukan path ke direktori gambar
    $path = 'assets/dokumen/' . $gambar;

    // Periksa apakah file gambar ada
    if (file_exists($path)) {
        // Set header untuk mengatur tipe konten dan memberi tahu browser akan ada unduhan
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($path));
        header('Content-Length: ' . filesize($path));

        // Baca dan kirim konten file
        readfile($path);

        exit;
    } else {
        // Jika file tidak ditemukan
        echo "File tidak ditemukan.";
    }
}

if (isset($_GET['hapusSuratTidakMampu'])) {
    $id = $_GET['hapusSuratTidakMampu'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['kk']);
    unlink("assets/dokumen/" . $result['surat']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suratTidakMampu.php");
}

if (isset($_GET['hapusSuratPindah'])) {
    $id = $_GET['hapusSuratPindah'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['kk']);
    unlink("assets/dokumen/" . $result['surat']);
    unlink("assets/dokumen/" . $result['foto']);
    unlink("assets/dokumen/" . $result['ijasah']);
    unlink("assets/dokumen/" . $result['buku_nikah']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suratPindahPenduduk.php");
}

if (isset($_GET['hapusPengantarNikah'])) {
    $id = $_GET['hapusPengantarNikah'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['kk']);
    unlink("assets/dokumen/" . $result['buku_nikah']);
    unlink("assets/dokumen/" . $result['foto']);
    unlink("assets/dokumen/" . $result['ijasah']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suratPengantarNikah.php");
}

if (isset($_GET['hapusSuratMeninggal'])) {
    $id = $_GET['hapusSuratMeninggal'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['surat']);
    unlink("assets/dokumen/" . $result['other_ktp']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suratMeninggalDunia.php");
}

if (isset($_GET['hapusKK'])) {
    $id = $_GET['hapusKK'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['buku_nikah']);
    unlink("assets/dokumen/" . $result['surat']);
    unlink("assets/dokumen/" . $result['ijasah']);
    unlink("assets/dokumen/" . $result['rapor']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suratKK.php");
}

if (isset($_GET['hapusSuratAkta'])) {
    $id = $_GET['hapusSuratAkta'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['buku_nikah']);
    unlink("assets/dokumen/" . $result['surat']);
    unlink("assets/dokumen/" . $result['ijasah']);
    unlink("assets/dokumen/" . $result['kk']);
    unlink("assets/dokumen/" . $result['other_ktp']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suratAkta.php");
}

if (isset($_GET['hapusSuketTanah'])) {
    $id = $_GET['hapusSuketTanah'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['surat']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suketTanah.php");
}

if (isset($_GET['hapusPenghasilan'])) {
    $id = $_GET['hapusPenghasilan'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['surat']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suketPenghasilan.php");
}

if (isset($_GET['hapusKelahiran'])) {
    $id = $_GET['hapusKelahiran'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['kk']);
    unlink("assets/dokumen/" . $result['surat']);
    unlink("assets/dokumen/" . $result['buku_nikah']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suketKelahiran.php");
}

if (isset($_GET['hapusAhliWaris'])) {
    $id = $_GET['hapusAhliWaris'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['kk']);
    unlink("assets/dokumen/" . $result['other_ktp']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/suketAhliWaris.php");
}

if (isset($_GET['hapusSppbd'])) {
    $id = $_GET['hapusSppbd'];
    $queryShow = "SELECT * FROM pelayanan_surat WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/dokumen/" . $result['ktp']);
    unlink("assets/dokumen/" . $result['surat']);
    unlink("assets/dokumen/" . $result['other_surat']);

    $query = "DELETE FROM pelayanan_surat WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin/sppbd.php");
}
