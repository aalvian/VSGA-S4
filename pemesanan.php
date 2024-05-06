<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>


<div class="position-relative">
    <!-- Gambar Banner -->
    <img src="assets/image/banner1.jpg" class="img-fluid" alt="Banner">

    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h1>Booking Tempat Wisata Terbaik</h1>
    </div>
</div>

<div class="container mt-3">

    <!-- Body -->
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <h2>Form Pemesanan Paket Wisata</h2>
            <form action="simpan.php" method="POST" autocomplete="off">
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control form-Control-sm" id="nama-pemesan" name="nama-pemesan" placeholder="Masukkan Nama" required>
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                        <label for="nama-paket" class="form-label">Nama Paket</label>
                        <select class="form-select" aria-label="Default select example" id="nama-paket" name="nama-paket" onchange="updateHargaPaket()">
                            <option selected>Pilih Paket</option>
                            <option value="1">Paket 1</option>
                            <option value="2">Paket 2</option>
                            <option value="3">Paket 3</option>
                            <option value="4">Paket 4</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="tgl-pesan" class="form-label">Tanggal Pesan</label>
                        <input type="date" class="form-control form-Control-sm" id="tgl-pesan" name="tgl-pesan" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="durasi" class="form-label">Durasi</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-Control-sm" id="durasi" name="durasi" aria-describedby="bassic-addon2" min="1" required>
                            <span class="input-group-text" id="bassic-addon2">hari</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-3">
                        <label for="jml-peserta" class="form-label">Jumlah Peserta</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control form-Control-sm" id="jml-peserta" name="jml-peserta" aria-describedby="bassic-addon2" min="1" required>
                            <span class="input-group-text" id="bassic-addon2">orang</span>
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-md-9">
                        <label for="nama-pemesan" class="form-label">Pelayanan Paket Perjalanan</label>
                        <div class="d-lg-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Y" id="penginapan" name="penginapan" onclick="handlePenginapan(this)">
                                <label class="form-check-label" for="penginapan">Penginapan (Rp. 300.000)</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Y" id="transportasi" name="transportasi" onclick="handleTransportasi(this)">
                                <label class="form-check-label" for="transportasi">Transportasi (Rp. 200.000)</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Y" id="makanan" name="makanan" onclick="handleMakanan(this)">
                                <label class="form-check-label" for="makanan">Makanan (Rp. 150.000)</label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-paket" class="form-label">Harga Paket</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="bassic-addon2">Rp</span>
                            <input type="text" class="form-control form-Control-sm" id="harga-paket" name="harga-paket" aria-describedby="bassic-addon2">
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-layanan" class="form-label">Harga Layanan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="bassic-addon2">Rp</span>
                            <input type="text" class="form-control form-Control-sm" id="harga-layanan" name="harga-layanan" aria-describedby="bassic-addon2">
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="total-pembayaran" class="form-label">Total Pembayaran</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="bassic-addon2">Rp</span>
                            <input type="text" class="form-control form-Control-sm" id="total-pembayaran" name="total-pembayaran" aria-describedby="bassic-addon2">
                        </div>
                    </div>
                </div>

                <input type="submit" class="btn btn-sm btn-primary" value="simpan">
                <button type="button" class="btn btn-sm btn-success" onclick="hitung()">Hitung</button>
                <button type="reset" class="btn btn-sm btn-danger" value="reset">Reset</button>

            </form>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
    penginapan = false;
    transportasi = false;
    makanan = false;

    function updateHargaPaket() {
        nilai = Number(document.getElementById("nama-paket").value);
        paket = document.getElementById("harga-paket");
        hargaPaket = 0;

        if (nilai == 1) {
            hargaPaket = 500000;
        } else if (nilai == 2) {
            hargaPaket = 750000;
        } else if (nilai == 3) {
            hargaPaket = 1000000;
        } else if (nilai == 4) {
            hargaPaket = 1250000;
        }

        paket.value = hargaPaket;
    }

    function handlePenginapan(cb) {
        penginapan = cb.checked;
        hl = document.getElementById("harga-layanan");
        hl.value = hitungLayanan();
    }

    function handleTransportasi(cb) {
        transportasi = cb.checked;
        hl = document.getElementById("harga-layanan");
        hl.value = hitungLayanan();
    }

    function handleMakanan(cb) {
        makanan = cb.checked;
        hl = document.getElementById("harga-layanan");
        hl.value = hitungLayanan();
    }

    function hitungLayanan() {
        totalLayanan = 0;

        if (penginapan) {
            totalLayanan = totalLayanan + 300000;
        }
        if (transportasi) {
            totalLayanan = totalLayanan + 200000;
        }
        if (makanan) {
            totalLayanan = totalLayanan + 150000;
        }
        return totalLayanan;
    }

    function hitung(){
       var hari = Number(document.getElementById("durasi").value);
       var jumlahPeserta = Number(document.getElementById("jml-peserta").value);
       var hargaPaket = Number(document.getElementById("harga-paket").value);
       var hargalayanan = Number(document.getElementById("harga-layanan").value);

        hargaPaket = hargaPaket || 0;
        jumlahPeserta = jumlahPeserta || 0;
        hargalayanan = hargalayanan || 0;
        hari = hari || 0;

       var jumlahTagihan = ( hargaPaket * jumlahPeserta) + (hargalayanan * jumlahPeserta * hari);
       document.getElementById("total-pembayaran").value = jumlahTagihan;
       
    }
</script>

<?php include 'layout/footer.php' ?>