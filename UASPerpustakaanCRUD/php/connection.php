<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
//mysqli_report(MYSQLI_REPORT_ERROR);

$host = "localhost";
$user = "id20060344_db_perpuscrud";
$pass = "qKyaLWgF06Wk]7wE";
$database = "id20060344_db_perpus";

$db = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");
