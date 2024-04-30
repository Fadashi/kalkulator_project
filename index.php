<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Program Kalkulator</h1>
    </header> 

    <main>
        <div id="calculator">

            <div class="board">
            <form action="#" method="get">
                <input type="number" name="angka1" class="bilangan" placeholder="Masukkan Angka Pertama">
                <input type="number" name="angka2" class="bilangan" placeholder="Masukkan Angka Kedua">
            
                <input type="submit" name="tambah" class="operasi" value="+">
                <input type="submit" name="kurang" class="operasi" value="-">
                <input type="submit" name="bagi" class="operasi" value="/">
                <input type="submit" name="kali" class="operasi" value="*">
            </form>
            </div>

            <div class="result">
                <p>Hasil</p>

            <?php
        if(isset($_GET['angka1']) && isset($_GET['angka2'])) {
            $angka1 = $_GET['angka1'];
            $angka2 = $_GET['angka2'];
            $hasil = '';

            if(isset($_GET['tambah'])){
                $hasil = TAMBAH($angka1, $angka2);
            }
            if(isset($_GET['kurang'])){
                $hasil = KURANG($angka1, $angka2);
            }
            if(isset($_GET['bagi'])){
                $hasil = BAGI($angka1, $angka2);
            }
            if(isset($_GET['kali'])){
                $hasil = KALI($angka1, $angka2);
            }

            echo '<input type="text" class="hasil" value="'.$hasil.'">';
        }

        function TAMBAH($angka1, $angka2) {
            return $angka1 + $angka2;
        }
        function KURANG($angka1, $angka2) {
            return $angka1 - $angka2;
        }
        function BAGI($angka1, $angka2) {
            if($angka2 != 0) {
                return $angka1 / $angka2;
            } else {
                return "Hasil tidak terdefinisi";
            }
        }
        function KALI($angka1, $angka2) {
            return $angka1 * $angka2;
        }
        ?>

        </div>

        </div>
    </main>

    <footer>
        <div>
        <p><i>© 2024 Muhammad Faishal Daffa Syabani</i></p>
        </div>
    </footer>
</body>
</html>