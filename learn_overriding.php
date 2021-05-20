<?php

class Pegawai
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
}

class KetuaJurusan extends Pegawai
{
}

class Dekan extends Pegawai
{
}
