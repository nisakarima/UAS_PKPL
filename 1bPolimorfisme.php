<?php

interface JajarGenjangInterface
{
    public function tendensiSentral($alas, $tinggi, $sisi);

}

class Luas implements JajarGenjangInterface
{
    public function tendensiSentral($alas, $sisi, $tinggi)
    {
        Echo "Luas Jajar Genjang adalah : ". $alas*$sisi;
    }
}

class Keliling implements JajarGenjangInterface
{
    public function tendensiSentral($tinggi, $alas, $sisi)
    {
        Echo "Keliling Jajar Genjang adalah : ". 2*$tinggi*$alas;
    }
}

class NoTendensiSentral implements JajarGenjangInterface
{
    public function tendensiSentral($tinggi, $alas, $sisi)
    {
        echo 'Anda tidak memilih.';
    }
}

class JajarGenjangPilihan
{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral) {
            case 'luas':
                return new Luas;
                break;
            case 'keliling':
                return new Keliling;
                break;
            default:
                return new NoTendensiSentral;
        }
    }
}

$alas = 15;
$tinggi = 7;
$sisi = 10;

JajarGenjangPilihan::tendensiSentralUntuk('luas')->tendensiSentral($tinggi, $alas, $sisi);
echo '<br>';
JajarGenjangPilihan::tendensiSentralUntuk('keliling')->tendensiSentral($tinggi, $alas, $sisi);

?>