<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2018-11-23 19:52:47 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2018-11-23 21:11:53
 */


namespace dickyermawan\terbilang;

/**
 * This is just an example.
 */
class Rupiah extends \yii\base\Widget
{
    public static function terbilang($nilai)
    {
        $ini = new Rupiah();
        return $ini->convert($nilai);
    }

    protected function convert($nilai)
    {
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if ($nilai < 12) {
            return " " . $huruf[$nilai];
        } elseif ($nilai < 20) {
            return $this->convert($nilai - 10) . " Belas ";
        } elseif ($nilai < 100) {
            return $this->convert($nilai / 10) . " Puluh " . $this->convert($nilai % 10);
        } elseif ($nilai < 200) {
            return " Seratus " . $this->convert($nilai - 100);
        } elseif ($nilai < 1000) {
            return $this->convert($nilai / 100) . " Ratus " . $this->convert($nilai % 100);
        } elseif ($nilai < 2000) {
            return " Seribu " . $this->convert($nilai - 1000);
        } elseif ($nilai < 1000000) {
            return $this->convert($nilai / 1000) . " Ribu " . $this->convert($nilai % 1000);
        } elseif ($nilai < 1000000000) {
            return $this->convert($nilai / 1000000) . " Juta " . $this->convert($nilai % 1000000);
        } elseif ($nilai < 1000000000000) {
            return $this->convert($nilai / 1000000000) . " Milyar " . $this->convert($nilai % 1000000000);
        } elseif ($nilai < 100000000000000) {
            return $this->convert($nilai / 1000000000000) . " Trilyun " . $this->convert($nilai % 1000000000000);
        } elseif ($nilai <= 100000000000000) {
            return "Maaf Tidak Dapat di Proses Karena Jumlah nilai Terlalu Besar ";
        }
    }

}
