<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "vsga";
$conn = new mysqli($hostname, $username, $password, $database);

$nama = $_POST['nama-pemesan'];
$paket = $_POST['nama-paket'];
$tggl = $_POST['tgl-pesan'];
$durasi = $_POST['durasi'];
$jmlPeserta = $_POST['jml-peserta'];

$penginapan = isset($_POST['penginapan']) ? "Y" : "N";
$transportasi = isset($_POST['transportasi']) ? "Y" : "N";
$makanan = isset($_POST['makanan']) ? "Y" : "N";

$hargaPaket = $_POST["harga-paket"];
$hargaLayanan = $_POST["harga-layanan"];
$totalPembayaran = $_POST["total-pembayaran"];

$query = "INSERT INTO pemesanan (nama,paket,tanggal,durasi,jml_peserta,penginapan,transportasi,makanan,total_pembayaran)
            values ('$nama','$paket','$tggl','$durasi','$jmlPeserta','$penginapan','$transportasi','$makanan','$totalPembayaran')";

$sukses = mysqli_query($conn, $query);
// if($sukses){ 
//     echo"data berhasil disimpan";
// }else{
//     echo "data gagal disimpan";
// }
?>


<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>

<div class="position-relative">
    <!-- Gambar Banner -->
    <img src="assets/image/banner1.jpg" class="img-fluid" alt="Banner">
</div>

<div class="container mt-3">

    <!-- Body -->
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat</strong> Pesanan Anda Berhasil Di Buat.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <!-- TABEL -->
            <div class="card">
                <div class="card-header text-center">
                    BUKTI PEMESANAN PAKET WISATA
                </div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>: <?php echo date('d F Y', strtotime($tggl)); ?></td>
                        </tr>
                        <tr>
                            <td>Waktu Perjalan</td>
                            <td>: <?php echo $durasi; ?> hari</td>
                        </tr>
                        <tr>
                            <td>Jumlah Peserta</td>
                            <td>: <?php echo $jmlPeserta; ?> orang</td>
                        </tr>
                        <tr>
                            <td>Layanan Paket</td>
                            <td>: 
                                <?php
                                if ($penginapan == 'Y') {
                                    echo 'Penginapan';
                                }?>
                                <?php
                                if ($transportasi == 'Y') {
                                    echo 'Transportasi';
                                }?>
                                <?php
                                if ($makanan == 'Y') {
                                    echo 'Makanan';
                                }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga Layanan</td>
                            <td>: Rp. <?php echo $hargaLayanan; ?></td>
                        </tr>
                        <tr>
                            <td>Harga Paket</td>
                            <td>: Rp. <?php echo $hargaPaket; ?></td>
                        </tr>
                        <tr>
                            <td>Total Pembayaran</td>
                            <td>: Rp. <?php echo $totalPembayaran; ?></td>
                        </tr>
                    </table>
                </div>

            </div>
            <!-- TABEL -->

            <!-- PILIHAN -->
            <div class="card text-center">
                <span>Pesan Lagi?</span>
                <row>
                    <a href="pemesanan.php" class="btn btn-primary">Ya</a>
                    <a href="index.php" class="btn btn-danger">Tidak</a>
                </row>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <!-- Paket Wisata 1 -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Paket Wisata 1</h5>
                    <div class="text-center ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/7uWymLYgdmM?si=yVmnNFLL6CIPO_Bl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- Paket Wisata 2 -->
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Paket Wisata 2</h5>
                    <div class="text-center ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/Lv_GojoT1v4?si=tLwADjnOXyrVJL7e" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>