<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content">
        <div class="head">
        <h1>BIOSKOP ALMAHYRA</h1>
        <h4>Jl. Siliwangi 127A Kel.Sepanjang Jaya Kota Bekasi</h4>
        </div>
        <hr>
        <div class="php">
            <?php
            $idPelanggan = $_POST["idPelanggan"];
            $status = "";
            $diskon = 0;
            $hari = $_POST["hari"];
            $film = $_POST["film"];
            $harga = 0;
            $ppn = 0.11;
            $jumlahBeli = $_POST["jumlahBeli"];

            if ($hari == "weekday") {
                $harga = 45000;
            } elseif ($hari == "weekend") {
                $harga = 50000;
            }

            function hitungHarga($harga, $jumlahBeli, $diskon, $ppn)
            {
                $total = $harga * $jumlahBeli - $diskon;
                $totalPpn = $total * $ppn;
                $totalHarga = $total + $totalPpn;
                return $totalHarga;
            }

            if ($idPelanggan == "MBV") {
                $status = "Member Vip";
                $diskon = $harga * 0.2;
            } elseif ($idPelanggan == "MBR") {
                $status = "Member Reguler";
                $diskon = $harga * 0.1;
            } elseif ($idPelanggan == "MBN") {
                $status = "Non Member";
                $diskon = 0;
            }

            echo "ID PELANGGAN: $idPelanggan <br>";
            echo "STATUS: $status <br>";
            echo "FILM: $film <br>";
            echo "DISKON: Rp.  $diskon <br>";
            echo "HARGA: Rp. $harga <br>";
            echo "JUMLAH BELI: $jumlahBeli <br>";
            echo "TOTAL: Rp. " . hitungHarga($harga, $jumlahBeli, $diskon, $ppn);
            ?>
        </div>
        <a href="formatif.php">INPUT LAGI</a>
    </div>
</body>

</html>