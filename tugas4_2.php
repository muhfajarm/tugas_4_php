<?php

$jmlSaluran = 523;
$jmlTerpakai = 8891;

// kambing = (beli - jual) / 300
$rata2 = $jmlTerpakai / $jmlSaluran;

echo "Jumlah saluran = $jmlSaluran<br>";
echo "Jumlah terpakai = $jmlTerpakai<br>";
echo "Rata-rata pemakaian = ...?<br>";
echo "Jawaban : Rp $rata2 liter/keluarga";
