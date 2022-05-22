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
}

$hasil = new ResultController();

header("Location: hasil.php");