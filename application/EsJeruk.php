<?php


namespace App;

class EsJeruk implements Minuman
{
    public function minum()
    {
        echo "Minumlah";
    }

    public function buat()
    {
        echo "masukkan blender";
    }

    public static function dilihat()
    {
        echo "Cuma boleh dilihat tak boleh diminum";
    }
}
