<?php
class BerlinClock {

    //O = OFF
    //J = JAUNE
    //R = ROUGE
    public function getBerlinMinutes(int $minute): String
    {

        if($minute == 0)
            return "OOOOOOOOOOO OOOO";


        $simpleMin=$minute%5;
        $berlinMin="OOOOOOOOOOO\n";

        for ($i=0 ; $i<4 ; $i++){
            if($simpleMin >0){
                $berlinMin.="J";
                $simpleMin--;
            }else
                $berlinMin.="O";
        }
        return $berlinMin;

    }
}
