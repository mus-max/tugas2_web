<?php
$saldoAwal = 1000000;
$bunga = 0.03;
$bulan = 11;

echo "<h3>Investasi</h3>";

for ($i = 1; $i <= $bulan; $i++){
    $hitung = $saldoAwal * $bunga;
    $saldoAkhir = $saldoAwal + $hitung;
}
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir. ",- <br>";


$jariJari = 10;
$garisPelukis = 15;

$luasAlas = M_PI * pow($jariJari, 2);
$luasPermukaan = $luasAlas + (M_PI * $jariJari * $garisPelukis);
echo "======================================<br>";
echo "<h3>Luas Alas dan Luas Permukaan Kerucut</h3><br>";
echo "Luas alas kerucut = ". $luasAlas. "<br>";
echo "Luas permukaan kerucut = ". $luasPermukaan;
?>