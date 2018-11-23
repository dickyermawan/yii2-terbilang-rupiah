<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2018-11-23 19:52:47 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2018-11-23 20:45:31
 */


namespace dickyermawan\terbilang;

/**
 * This is just an example.
 */
class Rupiah extends \yii\base\Widget
{
    public static function terbilang($nilai)
    {
        return $this->convert($nilai); 
    }

    protected function convert($nilai)
    {
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if ($nilai == 0) {
            return "Kosong";
        } elseif ($nilai < 12 & $nilai != 0) {
            return "" . $huruf[$nilai];
        } elseif ($nilai < 20) {
            return convert($nilai - 10) . " Belas ";
        } elseif ($nilai < 100) {
            return convert($nilai / 10) . " Puluh " . convert($nilai % 10);
        } elseif ($nilai < 200) {
            return " Seratus " . convert($nilai - 100);
        } elseif ($nilai < 1000) {
            return convert($nilai / 100) . " Ratus " . convert($nilai % 100);
        } elseif ($nilai < 2000) {
            return " Seribu " . convert($nilai - 1000);
        } elseif ($nilai < 1000000) {
            return convert($nilai / 1000) . " Ribu " . convert($nilai % 1000);
        } elseif ($nilai < 1000000000) {
            return convert($nilai / 1000000) . " Juta " . convert($nilai % 1000000);
        } elseif ($nilai < 1000000000000) {
            return convert($nilai / 1000000000) . " Milyar " . convert($nilai % 1000000000);
        } elseif ($nilai < 100000000000000) {
            return convert($nilai / 1000000000000) . " Trilyun " . convert($nilai % 1000000000000);
        } elseif ($nilai <= 100000000000000) {
            return "Maaf Tidak Dapat di Proses Karena Jumlah nilai Terlalu Besar ";
        }
    }

}
