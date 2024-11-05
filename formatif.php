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
        <form action="action.php" method="POST">
            ID PELANGGAN:
            <label for="idPelanggan">
                <select name="idPelanggan" id="idPelanggan">
                    <?php
                    $idPelanggan = ["MBV", "MBR", "MBN"];
                    foreach ($idPelanggan as $id) {
                        echo "<option value='{$id}'>$id</option>";
                    }
                    ?>
                </select>
            </label>

            <label for="film">
                NAMA FILM:
                <select name="film" id="film">
                <?php
                    $film = ["MAZE RUNNER", "SPIDER-MAN", "HARRY POTTER"];
                    foreach ($film as $film) {
                        echo "<option value='{$film}'>$film</option>";
                    }
                    ?>
                </select>
            </label>

            <label for="jumlahBeli">
                JUMLAH BELI:
                <input type="number" name="jumlahBeli" required id="jumlahBeli">
            </label>

            <label for="hari">
                HARI:
                <select name="hari" id="hari">
                    <option value="weekend">Weekend</option>
                    <option value="weekday">Weekday</option>
                </select>
            </label>

            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>
</body>
</html>