<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bioskop Almahyra</title>
<link rel="stylesheet" href="style.css">
</>

<body>
    <div class="content">
        <div class="head">
            <h1>BIOSKOP ALMAHYRA</h1>
            <h4>Jl. Siliwangi 127A Kel.Sepanjang Jaya Kota Bekasi</h4>
        </div>
        <hr>
        <div class="harga">
            <h4>DAFTAR HARGA</h4>
            <p>WEEKDAY : Rp. 45.000,00</p>
            <p>WEEKEND : Rp. 50.000,00</p>
        </div>
        <form action="action.php" method="POST">
            <label for="idPelanggan">
                ID PELANGGAN:
            </label>
            <select name="idPelanggan" id="idPelanggan">
                <?php
                $idPelanggan = ["MBV", "MBR", "MBN"];
                foreach ($idPelanggan as $id) {
                    echo "<option value='{$id}'>$id</option>";
                }
                ?>
            </select>

            <label for="film">
                NAMA FILM:
            </label>
            <select name="film" id="film">
                <?php
                $film = ["MAZE RUNNER", "SPIDER-MAN", "HARRY POTTER"];
                foreach ($film as $film) {
                    echo "<option value='{$film}'>$film</option>";
                }
                ?>
            </select>

            <label for="jumlahBeli">
                JUMLAH BELI:
            </label>
            <input type="number" name="jumlahBeli" required id="jumlahBeli">

            <label for="hari">
                HARI:
            </label>
            <select name="hari" id="hari">
                <option value="weekend">Weekend</option>
                <option value="weekday">Weekday</option>
            </select>

            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</body>

</html>