<?php

class JajarGenjang{

    public function luasJajarGenjang($bilangan)
    {
        $hasil = $bilangan[0] * $bilangan[1];
        echo 'Hasil Luas Jajar Genjang: ' . $hasil;
    }

    public function kelilingJajarGenjang($bilangan)
    {
        $hasil = 2 * $bilangan[0] * $bilangan[1];
        echo 'Hasil Keliling Jajar Genjang : ' . $hasil;
    }

    public function eksekusi($pilihan, $bilangan)
    {
        switch ($pilihan) {
            case 'luas':
                $this->luasJajarGenjang($bilangan);
                break;
            case 'keliling':
                $this->kelilingJajarGenjang($bilangan);
                break;
            default:
                echo 'Anda tidak memilih operasi';
        }
    }
}

$bilangan = [10, 15];
$pilihan = new JajarGenjang;
$pilihan->eksekusi('luas', $bilangan);
echo '<br>';
$pilihan->eksekusi('keliling', $bilangan);