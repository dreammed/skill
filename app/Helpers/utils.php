<?php
global $currentDate, $currentYear, $currentMonth, $thaiweek, $thaimonth, $lastDate;
$date = new DateTime('now');
$currentDate = $date->format('yyyy-MM-dd');
$currentYear = $date->format('Y');
$currentMonth = $date->format('m');
$lastDate = $date->modify('last day of this month');
$lastDate = $lastDate->format('d');
$thaiweek = ['วันอาทิตย์', 'วันจันทร์', 'วันอังคาร', 'วันพุธ', 'วันพฤหัส', 'วันศุกร์', 'วันเสาร์'];
$thaimonth = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
$currentYear = (int)$currentYear;
$currentMonth = (int) $currentMonth;
$lastDate = (int) $lastDate;
// $lastDay = \DateTime::createFromFormat('Y-m-d', '2009-11-23')->format('t');
if (!function_exists('formatType')) {
    function formatType($value)
    {
        switch ($value) {
            case 1:
                return '/';
                break;
            case 2:
                return 'ป';
                break;
            case 3:
                return 'ก';
                break;
            case 4:
                return 'ส';
                break;
            case 5:
                return 'ข';
                break;
            case 6:
                return 'ร';
                break;
            case 7:
                return 'พ';
                break;
            case 8:
                return 'ค';
                break;
            case 9:
                return 'บ';
                break;
            case 10:
                return 'ท';
                break;
            case 11:
                return 'ล';
                break;
            case 12:
                return 'อ';
                break;

            default:
                return $value;
                break;
        }
    }
}

if (!function_exists('getCurrentYear')) {
    function getCurrentYear()
    {
        global $currentYear;
        return $currentYear;
    }
}

if (!function_exists('GetThaiMonth')) {
    function GetThaiMonth($index)
    {
        global $thaimonth;
        return $thaimonth[$index-1];
    }
}

if (!function_exists('getCurrentMonth')) {
    function getCurrentMonth()
    {
        global $currentMonth;
        return $currentMonth;
    }
}

if (!function_exists('getLastDay')) {
    function getLastDay($pDate)
    {
        $cdate = new DateTime($pDate);
        $lDate = $cdate->modify('last day of this month');
        $lDate = $lDate->format('d');
        return $lDate;
    }
}
