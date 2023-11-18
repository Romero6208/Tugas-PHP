<?php
# if 1 variabel
$hari = "hujan";
if ($hari == "hujan") {
    echo "saya bawa jas hujan";
}
echo "<hr>";

## if dengan 2 variabel
if ($hari == "hujan") {
    echo "saya bawa jas hujan";
} else {
    echo "saya tidak bawa jas hujan";
}
echo "<hr>";

##  if dengan 2 variabel nilai

$nilai = 64;
if ($nilai >= 75 AND $nilai <=100){
    echo "Nilai anda $nilai,Anda <b>Lulus</b>";
} elseif ($nilai >= 0 & $nilai < 75) {
    echo "Nilai anda $nilai,Anda <b>Belum lulus</b>";
} else {
    echo "Nilai anda $nilai,Tidak ada ketentuan nilai seperti ini";
}
echo "<hr>";

# 4 variabel
if ($nilai >= 91 AND $nilai <=100) :
    echo "Nilai anda $nilai, nilai Anda A";
elseif ($nilai >= 83 AND $nilai < 91) :
    echo "Nilai anda $nilai, nilai anda B";
elseif ($nilai >= 75 AND $nilai < 83) :
     echo "Nilai anda $nilai, nilai anda C";
elseif ($nilai >= 0 AND $nilai < 75) :
     echo "Nilai anda $nilai, nilai anda D";
else :
    echo "Nilai Anda $nilai, Tidak ada penilaian seperti ini";
endif;
echo "<hr>";

# A = istimewa
$hasil = "A"
if ($hasil == "A"):
    echo "Istimewa";
if ($hasil == "B"):
    echo "Baik";
if ($hasil == "C"):
    echo "Cukup";