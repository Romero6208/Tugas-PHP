<?php
echo "<h2>Array 2 Dimensi</h2>";
$nama = [
    ["Bambang", "web", "Laki-laki", 16],
    ["lani", "design", "Perempuan", 17],
    ["wati", "modelling", "Perempuan", 16],
];
var_dump($nama);
echo "<br>";
echo $nama[1][1];

echo "<h2>Array 2 Dimensi - Array Assosiatif</h2>";
$nilai = [
    "Romero" => [
        "Matematika" => 90,
        "PPKn" => 85,
        "Fisika" => 95,
    ],
    "brian" => [
        "Matematika" => 95,
        "PPKn" => 90,
        "Fisika" => 75,
    ],
    "jeki" => [
        "Matematika" => 90,
        "PPKn" => 75,
        "Fisika" => 85,
    ],
];
var_dump($nilai);
echo "<br>";
echo $nilai["Romero"]["Matematika"];
echo "<br>";
echo '<pre>' . var_export($nilai, true) . '<pre>';