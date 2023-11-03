<?php
$title = "Struktur Organisasi";
include("template/user/header.php");
include("template/user/navbar.php");

$detail = isset($_GET['detail']) ? $_GET['detail'] : 'struktur_organisasi'; // Mengecek jika ada parameter detail di URL
?>

<div class="">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-3">
                <a class="dropdown-item <?php echo ($detail == 'struktur_organisasi') ? 'active' : ''; ?>" href="?detail=struktur_organisasi">Struktur Organisasi</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_desa') ? 'active' : ''; ?>" href="?detail=kepala_desa">Kepala Desa</a>
                <a class="dropdown-item <?php echo ($detail == 'sekretaris_desa') ? 'active' : ''; ?>" href="?detail=sekretaris_desa">Sekretaris Desa</a>
                <a class="dropdown-item <?php echo ($detail == 'kasi_pemerintahan') ? 'active' : ''; ?>" href="?detail=kasi_pemerintahan">Kasi Pemerintahan</a>
                <a class="dropdown-item <?php echo ($detail == 'kasi_kesejahteraan') ? 'active' : ''; ?>" href="?detail=kasi_kesejahteraan">Kasi Kesejahteraan</a>
                <a class="dropdown-item <?php echo ($detail == 'kasi_keuangan') ? 'active' : ''; ?>" href="?detail=kasi_keuangan">Kasi Keuangan</a>
                <a class="dropdown-item <?php echo ($detail == 'kaur_perencanaan') ? 'active' : ''; ?>" href="?detail=kaur_perencanaan">Kaur Perencanaan & Tata Usaha Umum</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_dusun_I') ? 'active' : ''; ?>" href="?detail=kepala_dusun_I">Kepala Dusun I Tanjakan</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_dusun_II') ? 'active' : ''; ?>" href="?detail=kepala_dusun_II">Kepala Dusun II Anggrek</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_dusun_III') ? 'active' : ''; ?>" href="?detail=kepala_dusun_III">Kepala Dusun III</a>
                <a class="dropdown-item <?php echo ($detail == 'kepala_dusun_IV') ? 'active' : ''; ?>" href="?detail=kepala_dusun_IV">Kepala Dusun IV</a>
            </div>
            <div class="col-md-9">
                <?php if ($detail == 'struktur_organisasi') : ?>
                    <h2 class="text-left text-primary mb-2">Struktur Organisasi</h2>
                    <img src="assets/img/StrukturOrganisasi.png" class="w-100" alt="">
                <?php elseif ($detail == 'kepala_desa') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Desa</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Neni Polihito, S. IP</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Desa</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala desa adalah pemerintah desa atau yang disebut dengan nama lain yang dibantu perangkat desa sebagai unsur penyelenggara pemerintahan desa. <br> <br>

                        Kepala Desa bertugas menyelenggarakan Pemerintahan Desa, melaksanakan Pembangunan Desa, pembinaan kemasyarakatan Desa, dan pemberdayaan masyarakat Desa. <br> <br>

                        Wewenang Kepala Desa : <br> <br>

                        1. memimpin penyelenggaraan Pemerintahan Desa; <br>
                        2. mengangkat dan memberhentikan perangkat Desa; <br>
                        3. memegang kekuasaan pengelolaan Keuangan dan Aset Desa; <br>
                        4. menetapkan Peraturan Desa; <br>
                        5. menetapkan Anggaran Pendapatan dan Belanja Desa; <br>
                        6. membina kehidupan masyarakat Desa; <br>
                        7. membina ketenteraman dan ketertiban masyarakat Desa; <br>
                        8. membina dan meningkatkan perekonomian Desa serta mengintegrasikannya agar mencapai perekonomian <br>
                        9. skala produktif untuk sebesar-besarnya kemakmuran masyarakat Desa; <br>
                        10. mengembangkan sumber pendapatan Desa;<br>
                        11. mengusulkan dan menerima pelimpahan sebagian kekayaan negara guna meningkatkan kesejahteraan masyarakat Desa;<br>
                        12. mengembangkan kehidupan sosial budaya masyarakat Desa;<br>
                        13. memanfaatkan teknologi tepat guna;<br>
                        14. mengoordinasikan Pembangunan Desa secara partisipatif;<br>
                        15. mewakili Desa di dalam dan di luar pengadilan atau menunjuk kuasa hukum untuk mewakilinya sesuai 16. dengan ketentuan peraturan perundang-undangan; dan<br>
                        17. melaksanakan wewenang lain yang sesuai denganketentuan peraturan perundang-undangan.</p>
                <?php elseif ($detail == 'sekretaris_desa') : ?>
                    <h2 class="text-left text-primary mb-2">Sekretaris Desa</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Wiwin Hasan, S. Sos</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Sekretaris Desa</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Sekretaris Desa atau yang sering disingkat menjadi SEKDES adalah pembantu Kepala Desa selaku pemegang kekuasaan pengelolaan keuangan desa. Sekdes merupakan unsur Staf Pemerintah Desa dipimpin oleh seorang Sekretaris Desa yang berada dibawah dan bertanggung jawab kepada Kepala Desa.<br> <br>

                        Tugas dan Fungsi Sekretaris Desa <br>
                        Dalam rangka penyelenggaraan pemerintahan desa yang baik (good governance), Sekretaris Desa mempunyai tanggung jawab untuk membantu Kepala Desa di bidang administrasi dan memberikan pelayanan teknis administrasi kepada seluruh perangkat Pemerintah Desa dan masyarakat.<br> <br>

                        Sekretaris desa mempunyai tugas sebagai berikut: <br> <br>

                        1. Sekretaris desa/kelurahan berkedudukan sebagai unsur staff yang membantu kepala desa/lurah dalam melaksanakan tugas dan wewenangnya serta memimpin sekretariat desa/lurah. <br>
                        2. Sekretaris desa/kelurahan mempunyai tugas menjalankan fungsi administrasi kelurahan, pembangunan dan kemasyarakatan. <br> <br>

                        Selain tugas tersebut di atas, seorang Sekretaris Desa harus mampu menjalankan fungsi administrator dengan penuh tanggungjawab. Berikut ini fungsi dari Sekdes, yaitu: <br> <br>

                        1. Sebagai pelaksana urusan surat menyurat, kearsipan dan laporan. <br>
                        2. Sebagai pelaksana urusan keuangan. <br>
                        3. Sebagai pelaksana urusan administrasi pemerintahan, pembangunan, dan kemasyarakatan. <br> <br>

                        Dalam melaksanakan tugas dan fungsinya sekretaris desa/kelurahan akan dibantu oleh Kepala Urusan. Merekalah yang menangani pelayanan ketatausahaan yang baik guna membantu Sekdes, diantaranya sebagai berikut: <br><br>

                        1. Kepala Urusan Tata Usaha dan Umum <br>
                        2. Kepala Urusan Perencanaan <br>
                        3. Kepala Urusan Keuangan <br></p>
                <?php elseif ($detail == 'kasi_pemerintahan') : ?>
                    <h2 class="text-left text-primary mb-2">Kasi Pemerintahan</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Verawaty Jahya, S.Pd</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kasi Pemerintahan</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala Seksi Pemerintahan atau biasa disingkat Kasi Pemerintahan adalah perangkat desa yang mempunyai kedudukan sebagai unsur pelaksana teknis yang ditugaskan membantu Kepala Desa sebagai pelaksana tugas operasional dibidang pemerintahan desa.<br> <br>

                        Dalam pengelolaan keuangan desa, Kepala Seksi (Kasi) Pemerintahan Desa bertugas sebagai Pelaksana Kegiatan Anggaran (PKA) dalam struktur Pelaksana Pengelolaan Keuangan Desa (PPKD) sesuai bidang tugasnya.<br> <br>

                        Tugas Kepala Seksi (Kasi) Pemerintahan Desa : <br>
                        Disamping tugas sebagaimana tersebut di atas, Kepala Seksi (Kasi) Pemerintahan Desa juga bertugas sebagai berikut: <br><br>

                        1. melakukan tindakan yang mengakibatkan pengeluaran atas beban anggaran belanja sesuai bidang tugasnya <br>
                        2. melaksanakan anggaran kegiatan sesuai bidang tugasnya <br>
                        3. mengendalikan kegiatan sesuai bidang tugasnya <br>
                        4. menyusun DPA (Dokumen Pelaksanaan Anggaran), DPPA (Dokumen Perubahan Pelaksanaan Anggaran), dan DPAL (Dokumen Pelaksanaan Anggaran Lanjutan) sesuai bidang tugasnya <br>
                        5. menandatangani perjanjian kerja sama dengan penyedia atas pengadaan barang/jasa untuk kegiatan yang berada dalam bidang tugasnya; dan <br>
                        6. menyusun laporan pelaksanaan kegiatan sesuai bidang tugasnya untuk pertanggungjawaban pelaksanaan 8.Anggaran Pendapatan dan Belanja Desa (APBDes) <br>

                        Fungsi Kepala Seksi (Kasi) Pemerintahan Desa : <br>
                        Kepala Seksi (Kasi) Pemerintahan Desa memiliki fungsi sebagai berikut:<br> <br>

                        1. melaksanakan manajemen tata praja Pemerintahan<br>
                        2. menyusun rancangan regulasi (Aturan) desa <br>
                        3. pembinaan masalah pertanahan <br>
                        4. pembinaan ketenteraman dan ketertiban <br>
                        5. pelaksanaan upaya perlindungan masyarakat <br>
                        6. kependudukan <br>
                        7. penataan dan pengelolaan wilayah <br>
                        8. pendataan dan pengelolaan Profil Desa. <br> <br></p>
                <?php elseif ($detail == 'kasi_kesejahteraan') : ?>
                    <h2 class="text-left text-primary mb-2">Kasi Kesejahteraan</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Verawaty Jahya, S.Pd</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kasi Pemerintahan</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Kepala Seksi Pemerintahan atau biasa disingkat Kasi Pemerintahan adalah perangkat desa yang mempunyai kedudukan sebagai unsur pelaksana teknis yang ditugaskan membantu Kepala Desa sebagai pelaksana tugas operasional dibidang pemerintahan desa.<br> <br>

                        Dalam pengelolaan keuangan desa, Kepala Seksi (Kasi) Pemerintahan Desa bertugas sebagai Pelaksana Kegiatan Anggaran (PKA) dalam struktur Pelaksana Pengelolaan Keuangan Desa (PPKD) sesuai bidang tugasnya.<br> <br>

                        Tugas Kepala Seksi (Kasi) Pemerintahan Desa : <br>
                        Disamping tugas sebagaimana tersebut di atas, Kepala Seksi (Kasi) Pemerintahan Desa juga bertugas sebagai berikut: <br><br>

                        1. melakukan tindakan yang mengakibatkan pengeluaran atas beban anggaran belanja sesuai bidang tugasnya <br>
                        2. melaksanakan anggaran kegiatan sesuai bidang tugasnya <br>
                        3. mengendalikan kegiatan sesuai bidang tugasnya <br>
                        4. menyusun DPA (Dokumen Pelaksanaan Anggaran), DPPA (Dokumen Perubahan Pelaksanaan Anggaran), dan DPAL (Dokumen Pelaksanaan Anggaran Lanjutan) sesuai bidang tugasnya <br>
                        5. menandatangani perjanjian kerja sama dengan penyedia atas pengadaan barang/jasa untuk kegiatan yang berada dalam bidang tugasnya; dan <br>
                        6. menyusun laporan pelaksanaan kegiatan sesuai bidang tugasnya untuk pertanggungjawaban pelaksanaan 8.Anggaran Pendapatan dan Belanja Desa (APBDes) <br>

                        Fungsi Kepala Seksi (Kasi) Pemerintahan Desa : <br>
                        Kepala Seksi (Kasi) Pemerintahan Desa memiliki fungsi sebagai berikut:<br> <br>

                        1. melaksanakan manajemen tata praja Pemerintahan<br>
                        2. menyusun rancangan regulasi (Aturan) desa <br>
                        3. pembinaan masalah pertanahan <br>
                        4. pembinaan ketenteraman dan ketertiban <br>
                        5. pelaksanaan upaya perlindungan masyarakat <br>
                        6. kependudukan <br>
                        7. penataan dan pengelolaan wilayah <br>
                        8. pendataan dan pengelolaan Profil Desa. <br> <br></p>
                <?php elseif ($detail == 'kasi_keuangan') : ?>
                    <h2 class="text-left text-primary mb-2">Kasi Keuangan</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Yusnar Palowa, SE</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kasi Keuangan</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita blanditiis quae nam, rerum quisquam accusamus quibusdam in esse distinctio dolorem. Praesentium eius saepe repudiandae quia adipisci expedita pariatur ipsa similique.</p>
                <?php elseif ($detail == 'kaur_perencanaan') : ?>
                    <h2 class="text-left text-primary mb-2">Kaur Perencanaan</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Suleman, S.Pd</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kaur Perencanaan & Tata Usaha Umum</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita blanditiis quae nam, rerum quisquam accusamus quibusdam in esse distinctio dolorem. Praesentium eius saepe repudiandae quia adipisci expedita pariatur ipsa similique.</p>
                <?php elseif ($detail == 'kepala_dusun_I') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Dusun I</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Roslinda Lihawa, A. Md, A.Pkt</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Dusun I Tanjakan</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita blanditiis quae nam, rerum quisquam accusamus quibusdam in esse distinctio dolorem. Praesentium eius saepe repudiandae quia adipisci expedita pariatur ipsa similique.</p>
                <?php elseif ($detail == 'kepala_dusun_II') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Dusun II</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Hardiyanti Abdullah, S.Pd</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Dusun II Anggrek</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita blanditiis quae nam, rerum quisquam accusamus quibusdam in esse distinctio dolorem. Praesentium eius saepe repudiandae quia adipisci expedita pariatur ipsa similique.</p>
                <?php elseif ($detail == 'kepala_dusun_III') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Dusun III</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Tribrata Harkitnas Wahidji</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Dusun III</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita blanditiis quae nam, rerum quisquam accusamus quibusdam in esse distinctio dolorem. Praesentium eius saepe repudiandae quia adipisci expedita pariatur ipsa similique.</p>
                <?php elseif ($detail == 'kepala_dusun_IV') : ?>
                    <h2 class="text-left text-primary mb-2">Kepala Dusun IV</h2>
                    <table class="table table-condensed">
                        <tr>
                            <td style="width: 150px;">Jabatan</td>
                            <td style="width: 5px;">:</td>
                            <td>Tohiti Ramsi Damiti</td>
                        </tr>
                        <tr>
                            <td>Nama Pejabat</td>
                            <td>:</td>
                            <td>Kepala Dusun IV</td>
                        </tr>
                        <tr>
                            <td>Nip</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita blanditiis quae nam, rerum quisquam accusamus quibusdam in esse distinctio dolorem. Praesentium eius saepe repudiandae quia adipisci expedita pariatur ipsa similique.</p>
                <?php else : ?>
                    <h2 class="text-left text-primary mb-2">Halaman Tidak Ditemukan</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include("template/user/footer.php") ?>