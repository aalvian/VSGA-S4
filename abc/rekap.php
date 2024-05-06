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


            <!-- PRINT -->
            <div class="card">
                <div class="card-header text-center">
                    BUKTI PEMESANAN PAKET WISATA
                </div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>M. Alvian</td>
                        </tr>
                        <tr>
                            <td>Jumlah Peserta</td>
                            <td>4 Orang</td>
                        </tr>
                        <tr>
                            <td>Waktu Perjalan</td>
                            <td>5 Hari</td>
                        </tr>
                        <tr>
                            <td>Layanan Paket</td>
                            <td>Penginapan, Transportasi</td>
                        </tr>
                        <tr>
                            <td>Pilihan Paket</td>
                            <td>Paket 1</td>
                        </tr>
                        <tr>
                            <td>Harga Layanan</td>
                            <td>Rp. 1.000.000</td>
                        </tr>
                        <tr>
                            <td>Harga Paket</td>
                            <td>Rp. 1.000.000</td>
                        </tr>
                        <tr>
                            <td>Total Pembayaran</td>
                            <td>Rp. 2.000.000</td>
                        </tr>
                    </table>

                </div>

            </div>

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
                        <iframe src="https://www.youtube.com/embed/7uWymLYgdmM?si=yVmnNFLL6CIPO_Bl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>