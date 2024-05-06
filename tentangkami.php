<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>

<?php
   include("lib/file_util.php");
?>


<div class="position-relative">
    <!-- Gambar Banner -->
    <img src="assets/image/banner1.jpg" class="img-fluid" alt="Banner">

    <!-- Tulisan di atas banner -->
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center">

        <h1>Panduan Masuk Ke Indonesia</h1>
    </div>
</div>

<div class="container text-center mt-5">
        <hr class="mx-auto">
        <iframe width=100% height="500" src="https://www.youtube.com/embed/4pU73psmtPQ?si=n3tmXWi6NPBXVlhW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <p style="text-align: justify">
            <?php
            $fileObject = new FileUtil("sejarah.txt");
            $str_data = $fileObject->readTxtFile();
            echo $str_data;
            ?>
        </p>
    </div>

<!-- <div class="container mt-3">

    <div class="row mt-3 text-center">
        <iframe width="100" height="500" src="https://www.youtube.com/embed/jhBM2shbDB8?si=dAEI7_mzRDu3OZqf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <div class="text-justify">
            <p style="text-align: justify;">
                Penjenamaan atau pemerekan atau pelabelan suatu negara (country branding atau nation branding) adalah suatu hal yang sangat penting bagi suatu negara-bangsa (nation state), tidak terkecuali Negara Kesatuan Republik Indonesia (NKRI). Country branding sangat penting karena terkait erat dengan kepribadian (personality), jati diri (identity), citra (image), dan nama baik (reputation), bahkan kepercayaan (trust) negara-bangsa di mata dunia internasional. Dan, kesemuanya akan bermuara pada pariwisata (tourism). Penjenamaan pariwisata negara (country branding atau nation branding) yang baik dengan sendirinya akan meningkatkan nilai tambah (value added) negara tersebut.

                <br><br>Jenama (brand) adalah suatu nama, peristilahan, lambang, atau rancang bangun atau gabungannya yang ditujukan untuk memperkenalkan barang dan jasa penjual atau kelompok penjual dan untuk membedakannya dari para pesaingnya. Pengertian jenama yang dipergunakan dalam dunia manajemen pemasaran ini pada hakikatnya tidak jauh berbeda dengan dunia kepariwisataan di tengah dunia yang terus berubah dan penuh dengan persaingan untuk dapat bertahan hidup (survive) dan memenangkan persaingan.

                Dalam suatu buku editan tentang diplomasi publik baru (new public diplomacy) yang membahas kekuatan perangkat lunak dalam hubungan internasional (soft power in international relations) disebutkan bahwa pariwisata (tourism) adalah suatu soft power tersendiri. Pariwisata merupakan industri keempat terbesar di dunia dan tumbuh hampir dua digit persen per tahunnya. Beberapa negara bahkan sangat tergantung pada pariwisatanya. Penjenamaan nasional (national branding) sekarang menjadi agenda utama bagi negara. Suatu citra negara yang atraktif kini merupakan suatu aset yang lebih dari sekadar harga.

                Dalam pada itu, Kementerian Pariwisata Republik Indonesia telah membuat penjenamaan pariwisata Indonesia untuk menjadi ujung tombak segenap upaya peningkatan pariwisata Indonesia, baik di dalam maupun luar negeri.
            </p>
        </div>
    </div>
</div> -->

<?php include 'layout/footer.php' ?>