<?php
session_start();

$isi = $_SESSION['isi'];
$harga = $_SESSION['harga'];
$data = $_SESSION['data'];
$total = [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NU Mineral</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-hasil">
        <div class="card">
            <div class="header">
                <h3>Struk Pembelian NU Mineral</h3>
            </div>
            
            <div class="card-body">
                <div class="nama">
                    Nama Pembeli : <?= $data['nama'] ?>
                </div>

                <div class="tanggal">
                    tanggal : <?= date('d M Y') ?>
                </div>

                <div class="jenis">
                    <ul>

                    <?php for($i=1; $i <= 4; $i++): ?>

                        <?php if($data[$i] != ""): ?>
                            <li><?= $isi[$i] ?> : <?= $data[$i] ?> x <?= $harga[$i] ?> = <?= $total[$i] = $data[$i] * $harga[$i]; ?></li>
                        <?php endif; ?>

                    <?php endfor; ?>
                        
                    </ul>
                </div>
            </div>
            
            <div class="total">
                <h4>Total Harga: Rp.<?= number_format(array_sum($total), 0, ',', '.'); ?></h4>
            </div>
        </div>
    </div>
</body>
</html>