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

            if ($idPelanggan == "MBV") {
                $status = "MEMBER VIP";
                $diskon = $harga * 0.2;
            } elseif ($idPelanggan == "MBR") {
                $status = "MEMBER REGULER";
                $diskon = $harga * 0.1;
            } elseif ($idPelanggan == "MBN") {
                $status = "NON MEMBER";
                $diskon = 0;
            }
            function bayar($harga, $jumlahBeli, $diskon, $ppn)
            {
                $total = $harga * $jumlahBeli - $diskon;
                $totalPpn = $total * $ppn;
                $totalBayar = $total + $totalPpn;
                return [$totalBayar, $totalPpn];
            }

            list($totalBayar, $totalPpn) = bayar($harga, $jumlahBeli, $diskon, $ppn);

            function formatRp($toRp)
            {
                $toRp = number_format($toRp, 2, ",", ".");
                return $toRp;
            }

            echo "<div>
            <span class='label'>ID PELANGGAN</span>
            <span class='isi'>$idPelanggan</span>
            </div>";

            echo "<div>
            <span class='label'>STATUS</span>
            <span class='isi'>$status</span>
            </div>";

            echo "<div>
            <span class='label'>FILM</span>
            <span class='isi'>$film</span>
            </div>";

            echo "<div>
            <span class='label'>DISKON</span>
            <span class='isi'>Rp. ".formatRp($diskon)."</span>
            </div>";

            echo "<div>
            <span class='label'>HARGA</span>
            <span class='isi'>Rp. ".formatRp($harga)."</span>
            </div>";

            echo "<div>
            <span class='label'>JUMLAH BELI</span>
            <span class='isi'>$jumlahBeli</span>
            </div>";

            echo "<div>
            <hr>
            <span class='label'>PPN</span>
            <span class='isi'>Rp. ".formatRp($totalPpn)."</span>
            </div>";

            echo "<div>
            <span class='label'>TOTAL</span>
            <span class='isi'>Rp. ".formatRp($totalBayar)."</span>
            </div>";

            ?>
        </div>
        <hr>
        <a href="formatif.php">INPUT LAGI</a>
    </div>
</body>

</html>