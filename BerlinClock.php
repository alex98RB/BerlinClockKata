<?php
class BerlinClock{

    public function minutes(String $string){
        $minute = date("i");

        if(substr($string, 1) == 0 || (substr($string, 1) == 5)) return "OOOO";
        if(substr($string, 1) == 1 || (substr($string, 1) == 6)) return "OOOI";
        if(substr($string, 1) == 2 || (substr($string, 1) == 7)) return "OOII";
        if(substr($string, 1) == 3 || (substr($string, 1) == 8)) return "OIII";
        if(substr($string, 1) == 4 || (substr($string, 1) == 9)) return "IIII";

        /*while ($minute >= 5){
            $minute = $minute-5;
        }
        return $minute;*/

    }




}
