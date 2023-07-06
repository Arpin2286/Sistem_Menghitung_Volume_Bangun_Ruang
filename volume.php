<?php 
    function volumeTabung($jari, $tinggi){
        $volume = pi()*pow($jari,2)*$tinggi;

        return $volume;
    }

    function volumeKubus($sisi){
        $volume = pow($sisi,3);

        return $volume;
    }

    function volumeKerucut($jari, $tinggi) {
        $volume = pi()*pow($jari, 2)*$tinggi/3;

        return $volume;
    }

    function volumeBola($jari) {
        $volume = 4/3*pi()*pow($jari,3);
        
        return $volume;
    }

    function volumeBalok($panjang, $lebar, $tinggi) {
        $volume = $panjang*$lebar*$tinggi;

        return $volume;
    }

    if(isset($_POST['proses-tabung'])){
        $jari = $_POST['r'];
        $tinggi = $_POST['t'];

        $volume = volumeTabung($jari, $tinggi);
    };

    if(isset($_POST['proses-kubus'])){
        $sisi = $_POST['s'];

        $volume = volumeKubus($sisi);
    }

    if(isset($_POST['proses-kerucut'])){
        $jari = $_POST['r'];
        $tinggi = $_POST['t'];

        $volume = volumeKerucut($jari,$tinggi);
    }

    if(isset($_POST['proses-bola'])){
        $jari = $_POST['r'];

        $volume = volumeBola($jari);
    }

    if(isset($_POST['proses-balok'])){
        $panjang = $_POST['p'];
        $lebar = $_POST['l'];
        $tinggi = $_POST['t'];

        $volume = volumeBalok($panjang, $lebar, $tinggi);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hitung Volume Bangun Ruang</title>
  </head>
  <body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Sistem Menghitung Volume Bangun Ruang</h1>
        <p>Bangun Ruang Tabung, Kubus, Kerucut, Bola, Balok.</p> 
    </div>

    <div class="container mt-4 mb-4">
        <!-- Menghitung Volume Tabung -->
        <form action="" method="post">
        <h3>Volume Tabung</h3>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jari-jari</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="r">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tinggi</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="t">
                </div>
            </div>
        </div>
        <input type="submit" name="proses-tabung" value="proses" class="btn btn-primary">
        </form>

        <?php if(isset($_POST['proses-tabung'])) : ?>
            <div class="alert alert-primary mt-3" role="alert">
                Hasil Perhitungan Volume Tabung : <?= $volume ?> cm<sup>3</sup>
            </div>
        <?php endif; ?>
        
        <!-- Menghitung volume Kubus -->
        <form action="" method="post" class="mt-4">
            <h3>Volume Kubus</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Panjang Sisi</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="s">
            </div>
            <input type="submit" class="btn btn-primary" name="proses-kubus" value="proses">
        </form>
        <?php if(isset($_POST['proses-kubus'])) : ?>
            <div class="alert alert-primary mt-3" role="alert">
                Hasil Perhitungan Volume Kubus : <?= $volume ?> cm<sup>3</sup>
            </div>
        <?php endif; ?>
        
        <!-- Volume Kerucut -->
        <form action="" method="post" class="mt-4">
            <h3>Volume Kerucut</h3>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jari-jari</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="r">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tinggi</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="t">
                    </div>
                </div>
            </div>
            <input type="submit" name="proses-kerucut" value="proses" class="btn btn-primary">
        </form>
        
        <?php if(isset($_POST['proses-kerucut'])) : ?>
            <div class="alert alert-primary mt-3" role="alert">
                Hasil Perhitungan Volume Tabung : <?= $volume ?> cm<sup>3</sup>
            </div>
            <?php endif; ?>
        </form>
        
        <!-- Menghitung volume Bola -->
        <form action="" method="post" class="mt-4">
            <h3>Volume Bola</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">jari-jari</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="r">
            </div>
            <input type="submit" class="btn btn-primary" name="proses-bola" value="proses">
        </form>
        
        <?php if(isset($_POST['proses-bola'])) : ?>
            <div class="alert alert-primary mt-3" role="alert">
                Hasil Perhitungan Volume Kubus : <?= $volume ?> cm<sup>3</sup>
            </div>
        <?php endif; ?>
        
        <!-- Volume Balok -->
        <form action="" method="post" class="mt-4">
            <h3>Volume Balok</h3>
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Panjang</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="p">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lebar</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="l">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tinggi</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="t">
                    </div>
                </div>
            </div>
            <input type="submit" name="proses-balok" value="proses" class="btn btn-primary">
            </form>

            <?php if(isset($_POST['proses-balok'])) : ?>
                <div class="alert alert-primary mt-3" role="alert">
                    Hasil Perhitungan Volume Tabung : <?= $volume ?> cm<sup>3</sup>
                </div>
            <?php endif; ?>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>