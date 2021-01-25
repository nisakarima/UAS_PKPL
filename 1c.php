<?php

class Latihan
{
    private $DISKON = 50000;
    private $BESAR_DISKON = 0.1;

    //Mencetak Struk berasal dari struk yg layak diskon hingga keterangan mendapatkan jumlah diskon
    public function cetakHasilDiskon($arrBelanjaan)
    {
        $arrBelanjaan =  $this->filterStrukYangLayakDapatDiskon($arrBelanjaan);
        return array_map(array($this, "hitungHasilDiskon"), $arrBelanjaan);
    }
    //Function proses filter array yang memenuhi kondisi mendapatkan diskon pada function strukDiskon
    public function filterStrukYangLayakDapatDiskon($arrBelanjaan)
    {
        return array_filter($arrBelanjaan, array($this, "strukDiskon"));
    }
    // Function cek belanajaan yang dapat diskon
    public function strukDiskon($arrBelanjaan)
    {
        if ($arrBelanjaan['jumlahBelanja'] > $this->DISKON) {
            return $arrBelanjaan;
        }
    }
    // Function perhitungan diskon
    public function hitungHasilDiskon($arrBelanjaan)
    {
        $totalDiskon = $arrBelanjaan['jumlahBelanja'] * $this->BESAR_DISKON;
        $arrBelanjaan['Diskon Jadi'] = $totalDiskon;
        return ($arrBelanjaan);
    }
}

$arrBelanjaan = array(
    array('nomorStruk' => 1, 'jumlahBelanja' => 77400),
    array('nomorStruk' => 2, 'jumlahBelanja' => 19000),
    array('nomorStruk' => 3, 'jumlahBelanja' => 49890),
    array('nomorStruk' => 4, 'jumlahBelanja' => 109000),
    array('nomorStruk' => 5, 'jumlahBelanja' => 56000),
);

$coba = new Latihan;
print_r($coba->cetakHasilDiskon($arrBelanjaan));