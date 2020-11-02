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

    public function minutes_per_05(String $string){
        $count = $this->CountDivisiblePer5($string);
        if($count == 0) return "OOOOOOOOOOO";
        if($count == 1) return "OOOOOOOOOOI";
        if($count == 2) return "OOOOOOOOOII";
        if($count == 3) return "OOOOOOOOIII";
        if($count == 4) return "OOOOOOOIIII";
        if($count == 5) return "OOOOOOIIIII";
        if($count == 6) return "OOOOOIIIIII";
        if($count == 7) return "OOOOIIIIIII";
        if($count == 8) return "OOOIIIIIIII";
        if($count == 9) return "OOIIIIIIIII";
        if($count == 10) return "OIIIIIIIII";
        if($count == 11) return "IIIIIIIIII";

    }

    public function CountDivisiblePer5($int): string{
        $count = 0;
        while($int >= 5){
            $count++;
            $int = $int-5;
        }
        return $count;
    }

}
