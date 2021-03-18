<?php
require_once 'Mahasiswa.php';
require_once  'MahasiswaBaru.php';
require_once 'Cetak.php';

$andry = new MahasiswaBaru('H1101191070','ANDRY MAULANA','2001-01-01','Pria');
$devi = new Mahasiswa('H1101191057','Devi Indah','2005-03-15','Wanita');
$cetakDevi = new Cetak();

?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?>
    <h3>Andry Maulana </h3>
    <?php
      $andry->tampilkanUmur();
      $andry->bayarGedung();
    ?> 
    <h3>Devi Indah Wulandari </h3>
    <?php
      $devi->tampilkanUmur();
      $devi->bayarGedung();//tidak bisa
    ?><br>
    <?php
      $cetakDevi->cetakKtm('Dian Prawira'); 
    ?>
    
  </body>
</html>