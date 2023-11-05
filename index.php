<?php
$title = "Home";
include("template/user/header.php");
include("template/user/navbar.php");

require('function.php');
?>

<div class="">
    <img src="assets/img/Banner.jpg" alt="" class="w-100" style="height: 500px; object-fit:cover">
    <div style="background-color: #f8f9fc;">
        <div class="col p-4">
            <ul class="nav justify-content-center">
                <li class="nav-item mx-5">
                    <a class="nav-link text-center active" href="#">
                        <img src="assets/img/services.svg" width="80" alt="Menu 1" class="img-fluid">
                        <p class="text-secondary mt-2">Layanan Masyarakat</p>
                    </a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link  text-center" href="#">
                        <img src="assets/img/potensiDesa.svg" width="80" alt="Menu 2" class="img-fluid">
                        <p class="text-secondary mt-2">Potensi Desa</p>
                    </a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link  text-center" href="#">
                        <img src="assets/img/pembangunanDesa.svg" width="80" alt="Menu 3" class="img-fluid">
                        <p class="text-secondary mt-2">Pembangunan Desa</p>
                    </a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link  text-center" href="#">
                        <img src="assets/img/keuanganDesa.svg" width="80" alt="Menu 3" class="img-fluid">
                        <p class="text-secondary mt-2">Keuangan Desa</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-right text-primary mb-2">Berita Terkini</h2>
                <div class="border-bottom border-primary border-1 mb-3"></div>
                <?php $loop = mysqli_query($koneksi, "select * from berita ORDER BY tanggal DESC LIMIT 2");

                while ($a = mysqli_fetch_array($loop)) { ?>
                    <div class="d-flex flex-column flex-md-row mb-4 align-items-md-center">
                        <div class="w-md-25   mr-md-3 ">
                            <img src="assets/gambar/<?= $a['gambar'] ?>" alt="Gambar" width="800" class="img-fluid ">
                        </div>
                        <div style="margin-left: 1.25rem;">
                            <h3 class="text-primary mb-2"><a href="detail.php?detail=<?= $a['id'] ?>" style="text-decoration: none;"><?= $a['judul'] ?></a></h3>
                            <p>
                                <?= substr($a['deskripsi'], 0, 400); ?>
                                <a href="detail.php?detail=<?= $a['id'] ?>" class="btn-lihat-selengkapnya">Lihat Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4">
                <h2 class="text-left text-primary mb-2">Pengunguman</h2>
                <div class="border-bottom border-primary border-1 mb-3"></div>

                <div class="card" style="border-color: blue;">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <div class="fw-bold text-start text-uppercase">Oplas Awet Muda</div>
                    </button>

                    <div class="collapse" id="collapseExample">
                        <div class="card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but
                            revealed when
                            the user activates the relevant trigger.
                        </div>
                    </div>
                </div>

                <div class=" mt-3">
                    <h2 class="text-left text-primary mb-2">Agenda Kegiatan</h2>
                    <div class="border-bottom border-primary border-1 mb-3"></div>

                    <div class="d-flex mb-4">
                        <div class="bg-primary w-25 text-white fw-bold d-flex justify-content-center align-items-center">
                            Oct 15 2021</div>
                        <div style="margin-left: 1.25rem;">
                            <h6 class="text-primary">Grebek Vaksin Tahap 3</h6>
                            <p>
                                Lokasi Kantor Desa
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18977.676900650702!2d123.05819865902265!3d0.6455003100130698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327932b6f9ea9b47%3A0xe2e84ed52676426e!2sTupa%2C%20Kec.%20Bulango%20Utara%2C%20Kabupaten%20Bone%20Bolango%2C%20Gorontalo!5e0!3m2!1sid!2sid!4v1699152685497!5m2!1sid!2sid" class="w-100" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-4">
                <div style="overflow-x: auto;">
                    <div class="container">
                        <table>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Kode PUM</td>
                                <td>:</td>
                                <td style="font-size: small;">5201032004</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Tahun Pembentukan</td>
                                <td>:</td>
                                <td style="font-size: small;">2000</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Dasar Hukum</td>
                                <td>:</td>
                                <td style="font-size: small;">SURAT KEPUTUSAN GUBERNUR NTB NOMOR : 409 TAHUN 2000</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Tipologi</td>
                                <td>:</td>
                                <td style="font-size: small;">TERITORIAL</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Klasifikasi</td>
                                <td>:</td>
                                <td style="font-size: small;">SWAKARYA</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Kategori</td>
                                <td>:</td>
                                <td style="font-size: small;">MAJU</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Luas Wilayah</td>
                                <td>:</td>
                                <td style="font-size: small;">239.221 Ha</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Batas Sebelah Utara</td>
                                <td>:</td>
                                <td style="font-size: small;">DESA SEDAU</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Batas Sebelah Selatan</td>
                                <td>:</td>
                                <td style="font-size: small;">DESA PEMEPEK</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Batas Sebelah Timur</td>
                                <td>:</td>
                                <td style="font-size: small;">DESA PEMEPEK</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold; font-size: small; ">Batas Sebelah Barat</td>
                                <td>:</td>
                                <td style="font-size: small;">DESA GOLONG</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php include("template/user/footer.php") ?>