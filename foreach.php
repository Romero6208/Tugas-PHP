<?php

$siswa = ["budi", "agus", "eka", "gina", "jali", "udin"];
$siswa = sort($siswa)
foreach ($siswa as $no =>$s) {
    echo ++$no . ". $s<br>";
}

