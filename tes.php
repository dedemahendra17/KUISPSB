<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis</title>
</head>
<body>
<?php
echo "Ini Adalah Kuis Soal 1 oleh Dede <br> <br>";

    $Angka = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

     echo "Angka yang habis dibagi 3 adalah: <br> <br>";

        for ($i = 0; $i < 20; $i++ ) {
            if ($Angka[$i] % 3 == 0 ) {
                echo $Angka[$i] . "<br>";
            }
        }

echo "<hr>";
echo "Ini Adalah Kuis Soal 2 oleh Dede <br> <br>";

function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 30 / 100) + ($uts * 30 / 100) + ($uas * 40 / 100);

    if ($nilaiAkhir >= 70) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    echo "Nilai Akhir: " . $nilaiAkhir . "<br> <br>";
    
    echo "Status: " . $status;
}

hitungNilaiAkhir(70, 85, 80);

?>
</body>
</html>

<!-- INI ADALAH KUIS SOAL 1 DAN KUIS SOAL 2-->