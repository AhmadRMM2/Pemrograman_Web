<?php
$siswa = [
    ["nama" => "Ahmad", "nilai" => [80, 75, 90]],
    ["nama" => "Budi",  "nilai" => [60, 65, 70]],
    ["nama" => "Citra", "nilai" => [90, 85, 95]]
];

function rataRata($nilai) {
    $total = 0;
    $jumlah = count($nilai);
    if ($jumlah == 0) return 0;
    foreach ($nilai as $n) {
        $total += $n;
    }
    return $total / $jumlah;
}

echo "Daftar Nilai Siswa <br>";
echo "==================<br>";

foreach ($siswa as $s) {
    $nama  = $s["nama"];
    $n1    = $s["nilai"][0];
    $n2    = $s["nilai"][1];
    $n3    = $s["nilai"][2];
    $rata  = rataRata($s["nilai"]);

    echo "Nama : $nama <br>";
    echo "Nilai: $n1, $n2, $n3 <br>";
    echo "Rata-rata: $rata <br>";
    echo "---------------- <br>";
}
?>