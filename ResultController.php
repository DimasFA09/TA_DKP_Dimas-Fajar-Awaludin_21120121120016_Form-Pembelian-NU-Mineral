<?php

session_start();

class ResultController
{
    public function __construct()
    {
        $_SESSION['data'] = $_POST;
        $_SESSION['harga'] = ['1' => 20000, '2' => 22000, '3' => 35000, '4' => 38000];
        $_SESSION['isi'] = ['1' => '120ml', '2' => '220ml', '3' => '330ml', '4' => '600ml'];
    }

    public function hitungTotalHarga()
    {
        $totalHarga = [];
        for ($i=1; $i <= count($_SESSION['data']) - 1 ; $i++) { 
            if ($_SESSION['data'][$i] == "") {
                $_SESSION['data'][$i] = 0;
            }
            
            $totalHarga[$i] = $_SESSION['data'][$i] * $_SESSION['harga'][$i];
        }
        $_SESSION['totalHarga'] = number_format(array_sum($totalHarga), 0, ',', '.');
    }
}

$hasil = new ResultController();
$hasil->hitungTotalHarga();

header("Location: hasil.php");