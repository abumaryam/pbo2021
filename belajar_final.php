<?php

require_once('vendor/autoload.php');

use App\MahasiswaBaru;

$budi = new MahasiswaBaru('H123123', 'Budi Jak', '12111984', 'L', '123');

$budi->tuntaskan();
