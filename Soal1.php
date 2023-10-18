<!DOCTYPE html>
<html>
<head>
    <title>Inheritance Bangun Datar</title>
</head>
<body>
    <form method="post" action="">
        <label for="jenis_bangun">Pilih jenis bangun datar:</label>
        <select name="jenis_bangun" id="jenis_bangun">
            <option value="persegi">Persegi</option>
            <option value="persegipanjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $jenis_bangun = $_POST['jenis_bangun'];
        switch ($jenis_bangun) {
            case 'persegi':
                $sisi = 5; // contoh nilai sisi
                $persegiLuas = $sisi * $sisi;
                $persegiKeliling = 4 * $sisi;
                echo "Luas Persegi: " . $persegiLuas . "<br>";
                echo "Keliling Persegi: " . $persegiKeliling;
                break;
            case 'persegipanjang':
                $panjang = 8; // contoh nilai panjang
                $lebar = 5; // contoh nilai lebar
                $ppLuas = $panjang * $lebar;
                $ppKeliling = 2 * ($panjang + $lebar);
                echo "Luas Persegi Panjang: " . $ppLuas . "<br>";
                echo "Keliling Persegi Panjang: " . $ppKeliling;
                break;
            case 'segitiga':
                $alas = 10; // contoh nilai alas
                $tinggi = 6; // contoh nilai tinggi
                $segitigaLuas = 0.5 * $alas * $tinggi;
                // asumsi segitiga adalah segitiga siku-siku
                $sisiMiring = sqrt($alas * $alas + $tinggi * $tinggi);
                $segitigaKeliling = $alas + $tinggi + $sisiMiring;
                echo "Luas Segitiga: " . $segitigaLuas . "<br>";
                echo "Keliling Segitiga: " . $segitigaKeliling;
                break;
            case 'lingkaran':
                $jariJari = 7; // contoh nilai jari-jari
                $lingkaranLuas = 3.14 * $jariJari * $jariJari;
                $lingkaranKeliling = 2 * 3.14 * $jariJari;
                echo "Luas Lingkaran: " . $lingkaranLuas . "<br>";
                echo "Keliling Lingkaran: " . $lingkaranKeliling;
                break;
            default:
                echo "Pilihan tidak valid.";
                break;
        }
    }
    ?>
</body>
</html>
