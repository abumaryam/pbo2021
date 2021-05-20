<?php
require_once('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\EsJeruk;

$cendol_dian = new Cendol();
$cendol_dian->minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();
$kopi_aming->minum();


$kopi_asiang = new Kopi();
// $kopi_asiang->buat();
$kopi_asiang->minum();

EsJeruk::dilihat();
