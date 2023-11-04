<?php $page = basename($_SERVER['PHP_SELF']); ?>

<div style="background-color: #0088cc" class="navbar navbar-expand-lg py-3">
    <div class="container d-flex justify-content-between text-white align-items-center">
        <div>
            <h6 class="m-0">088828323 | Desatupa@gmail.com</h6>
        </div>
        <h6 class="m-0">088828323</h6>
    </div>
</div>
<nav class="navbar navbar-expand-lg p-3 bg-body-tertiary">
    <div class="container">
        <div class="d-flex align-items-center">
            <a class="navbar-brand text-dark" href="index.php"><img src="assets/img/LogoBonebolango.png" width="50" alt="">
            </a>
            <a href="index.php" class="text-dark" style="text-decoration: none">
                <h6>Desa Tupa</h6>
                <h6 class="fw-normal">Kabupaten Bone Bolango</h6>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0  text-uppercase  mx-auto">
                <!-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li> -->
                <li class="nav-item dropdown ">
                    <a class="nav-link <?php if ($page == 'index.php' || $page == 'visiMisi.php' || $page == 'sejarah.php' || $page == 'geografis.php' || $page == 'demografi.php') : echo 'bg-primary rounded text-white';
                                        endif; ?>  text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil Desa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php">Home</a></li>
                        <li><a class="dropdown-item" href="visiMisi.php">Visi Misi </a></li>
                        <li><a class="dropdown-item" href="sejarah.php">Sejarah Desa</a></li>
                        <li><a class="dropdown-item" href="geografis.php">Geografis Desa</a></li>
                        <li><a class="dropdown-item" href="demografi.php">Demografis Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark <?php if ($page == 'perangkatDesa.php' || $page == 'lembagaDesa.php' || $page == 'strukturOrganisasi.php') : echo 'bg-primary rounded text-white';
                                                                    endif; ?> " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pemerintahan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="strukturOrganisasi.php">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="perangkatDesa.php">Perangkat Desa</a></li>
                        <li><a class="dropdown-item" href="lembagaDesa.php">Lembaga Desa</a></li>
                        <li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Berita</a></li>
                        <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                        <li><a class="dropdown-item" href="#">APBDesa</a></li>
                        <li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php if ($page == 'potensiDesa.php') : echo 'bg-primary rounded text-white';
                                                    endif; ?>" aria-current="page" href="potensiDesa.php">Potensi Desa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Media Sosial
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Facebook</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="login.php">Login</a>
                </li>

            </ul>
        </div>
    </div>
</nav>