<?php
class JasaTitipOnline
{
    function namaBarang($namaBarang)
    {
        if ($namaBarang == 'Baju') {
            return TRUE;
        }
    }
    function lokasiPengiriman($alamatPengiriman)
    {
        if ($alamatPengiriman == 'Yogyakarta') {
            return TRUE;
        }
    }
    function buktiPembayaran($buktiPembayaran)
    {
        if ($buktiPembayaran == 'Lunas') {
            return TRUE;
        }
    }
    

    function main($namaBarang, $alamatPengiriman, $buktiPembayaran)
    {
        if ($this->namaBarang($namaBarang) == false) {
            return 'Transaksi Gagal, Barang kosong';
        }
        if ($this->lokasiPengiriman($alamatPengiriman) == false) {
            return 'Transaksi Gagal, Lokasi pengiriman tidak di ketahui';
        }
        if ($this->buktiPembayaran($buktiPembayaran) == false) {
            return 'Transaksi Gagal, Bukti pembayaran tidak valid';
        }
        return 'Transaksi Selesai Di Proses';
    }
}

$transaksi = new JasaTitipOnline;
$cek = $transaksi->main('Baju', 'Yogyakarta', 'Lunas');
echo $cek;