<?php

function kalkulator($a, $b, $op) {
    $hasil = 0;

    if ($op == "+") {
        $hasil = $a + $b;
    } elseif ($op == "-") {
        $hasil = $a - $b;
    } elseif ($op == "x") {
        $hasil = $a * $b;
    } elseif ($op == "/") {
        if ($b == 0) {
            return "Tidak bisa dibagi nol";
        }
        $hasil = $a / $b;
    } else {
        return "Operator tidak dikenali";
    }

    return $hasil;
}

// Data angka
$a = 12;
$b = 4;

// Variabel operator
$tambah = "+";
$kurang = "-";
$kali = "x";
$bagi = "/";

// Array operator dari variabel
$operator_list = [$tambah, $kurang, $kali, $bagi];

// Proses kalkulasi
foreach ($operator_list as $op) {
    $hasil = kalkulator($a, $b, $op);
    echo "$a $op $b = $hasil<br>";
}
?>