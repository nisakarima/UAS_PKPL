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
        if ($lokasiPengiriman == 'Yogyakarta') {
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
        if ($this->namaBarang($alamatPengiriman ) == TRUE) {
            if ($this->lokasiPengiriman($alamatPengiriman) == TRUE) {
                if ($this->buktiPembayaran($buktiPembayaran) == TRUE) {
                    return 'Pembayaran tidak valid';
                } else {
                    return 'Lokasi Pengiriman tidak di ketahui';
                }
            } else {
                return 'Barang sudah kosong';
            }
        } else {
            return 'Transaksi Selesai Di Proses';
        }
    }
}

$transaksi = new JasaTitipOnline;
$cek = $transaksi->main('Baju', 'Yogyakarta', 'Lunas');
echo $cek;