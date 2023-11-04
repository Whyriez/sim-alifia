<?php
$title = "Home";
include("template/user/header.php");
include("template/user/navbar.php"); ?>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-right text-primary mb-2" style="font-size:25px;">Berita</h2>
                <div class="border-bottom border-primary border-1 mb-3"></div>
                <div class="d-flex mb-4">
                    <img src="assets/img/object.jpeg" alt="Gambar" class="img-fluid w-25 mr-3">
                    <div style="margin-left: 1.25rem;">
                        </svg>
                        <h3 class="text-primary mb-2" style="font-size: 18px; font-weight:bold;">Surat Edaran Bupati Lombok</h3>
                        <i class=" fa fa-calendar text-primary" aria-hidden="true" style="font-size: 14px;"></i>
                            <i class="text-primary" style="font-size: 14px;">april, 18, 2023</i>
                            <i class="fa fa-user text-primary ms-2" aria-hidden=" true" style="font-size: 14px;"></i>
                            <i class="text-primary" style=" font-size: 14px;">admin desa keru</i>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius corrupti autem vero provident
                                veritatis repellat... <a href="" style="font-size: 11px; font-weight: 500; padding: 3px 8px; " class=" btn btn-primary"> selengkapnya <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </p>
                    </div>
                </div>



            </div>
            <div class="col-md-4">
                <div class="input-group" style="display:flex; align-items:center;">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" placeholder="Search" />
                    </div>
                    <button type="button" class="btn btn-primary" style="height: 35px; width: 50px; display: flex; align-items:center;
    justify-content:center;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>




            </div>
        </div>
    </div>
</div>


<?php include("template/user/footer.php") ?>