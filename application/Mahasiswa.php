<?php

namespace App;

class Mahasiswa extends User
{
    public $nim;
    public $nama;
    public $tanggal_lahir;
    public $jenis_kelamin;
    const AKTIF = 1;
    const NON_AKTIF = 0;
    public static $status = self::AKTIF;

    function __construct($nim, $nama, $tgl, $jk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }

    public function tampilkanAngkatan()
    {
        $akt = substr($this->nim, 5, -4);
        echo "Merupakan Angkatan Tahun " . $akt . "<br>";
    }

    public function tampilkanUmur()
    {
        $tgl_lahir = date_create($this->tanggal_lahir);
        $umur = date_diff($tgl_lahir, date_create("today"))->y;

        echo $umur;
    }

    public function tampilkanNama()
    {
        echo $this->nama;
    }

    public static function bergerak()
    {
        echo "agen solusi, bukan agen perubahan<br/>";
    }

    final public function tuntaskan()
    {
        self::bergerak();
        echo "memperbaiki menjadi lebih baik";
    }

    // buat fungsi dengan nama hitungSks yang tipenya adalah static
    /**
     * Parameter dari fungsi tersebut adalah $sks, dan $bobot
     * 
     */
}
