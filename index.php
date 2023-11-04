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
                    <div class="d-flex mb-4">
                        <img src="assets/gambar/<?= $a['gambar'] ?>" alt="Gambar" class="img-fluid w-25 mr-3">
                        <div style="margin-left: 1.25rem;">
                            <h3 class="text-primary mb-2"><?= $a['judul'] ?></h3>
                            <p>
                                <?= substr($a['deskripsi'], 0, 100); ?>
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
</div>

<?php include("template/user/footer.php") ?>