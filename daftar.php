<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "vsga";
$conn = new mysqli($hostname, $username, $password, $database);

$query = "SELECT * FROM pemesanan";
$result = $conn->query($query);
// print_r($result);
?>



<div class="position-relative">
    <!-- Gambar Banner -->
    <img src="assets/image/banner1.jpg" class="img-fluid" alt="Banner">

    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h1>Daftar Pesanan</h1>
    </div>
</div>

<div class="container mt-3">
    <!-- Body -->
    <div class="text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Tanggal</th>
                    <th>Jumlah Hari</th>
                    <th>Jumlah Peserta</th>
                    <th>Penginapan</th>
                    <th>Transportasi</th>
                    <th>Makanan</th>
                    <th>Total Pembayaran</th>
                    <!-- <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody class="table-group-divider">
               
               <?php
                $count = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $count++;
                        echo "<tr>";
                        echo "<td>$count</td>";
                        echo "<td>". $row['nama'] ."</td>";
                        echo "<td>". $row['paket'] ."</td>";
                        echo "<td>". $row['tanggal'] ."</td>";
                        echo "<td>". $row['durasi'] ."</td>";
                        echo "<td>". $row['jml_peserta'] ."</td>";
                        echo "<td>". $row['penginapan'] ."</td>";
                        echo "<td>". $row['transportasi'] ."</td>";
                        echo "<td>". $row['makanan'] ."</td>";
                        echo "<td>". $row['total_pembayaran'] ."</td>";
                        // echo  "<td>"; 
                        //             echo "<a href='modifikasi.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Ubah</a>";
                        //             echo "<a href='hapus.php?id=" . $row['id'] . "' class='ms-3 btn btn-danger btn-sm' onclick='return confirm(\"Anda yakin akan hapus ?\")'>Hapus</a>";
                        //          echo "</td>";
                    }
                }   
                ?>

            </tbody>
        </table>
    </div>
</div>

<?php include 'layout/footer.php' ?>