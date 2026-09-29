<?php
function statusKelulusan(float $ipk): string
{
    // Fitur 1: Penambahan kondisi baru (Cum Laude)
    if ($ipk >= 3.80) return 'Cum Laude';
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

$mahasiswa = [
    'npm' => '4524210056',
    'nama' => 'Muhammad Agis Irawan',
    'prodi' => 'Teknik Informatika',
    'fakultas' => 'Teknik', 
    'semester' => 5,
    'ipk' => 3.38
];
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Biodata</title>
    </head>
    <body>
        <h1>Biodata Mahasiswa</h1>
        <ul>
            <?php foreach ($mahasiswa as $kunci => $nilai): ?>
                <li><?= ucfirst($kunci) ?> : <?= htmlspecialchars((string)$nilai) ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Predikat: <?= statusKelulusan($mahasiswa['ipk']); ?></p>
    </body>
</html>