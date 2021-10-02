<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2018-11-23 19:52:47 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2018-11-23 21:11:53
 */


namespace dickyermawan\base;

use NumberFormatter;

/**
 * This is just an example.
 */
class Rupiah extends \yii\base\Widget
{
    public static function terbilang($nilai)
    {
        $f = new NumberFormatter('id-ID', NumberFormatter::SPELLOUT);
        return $f->format($nilai);
    }
}
