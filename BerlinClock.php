<?php
class BerlinClock {

    //O = OFF
    //J = JAUNE
    //R = ROUGE
    public function getBerlinMinutes(int $minute): String
    {

        if($minute == 0)
            return "OOOOOOOOOOO\nOOOO";


        $simpleMin=$minute%5;
        $berlinMin="";
        $berlinBloc5Min=floor($minute/5);

        for ($i=0; $i<11;$i++){
            if($berlinBloc5Min>0){
                if($i !=0 && ($i+1)%3==0){
                    $berlinMin.="R";
                }
                else{
                    $berlinMin.="J";
                }
                $berlinBloc5Min--;
            }else{
                $berlinMin.="O";
            }
        }

        $berlinMin .= "\n";

        for ($i=0 ; $i<4 ; $i++){
            if($simpleMin >0){
                $berlinMin.="J";
                $simpleMin--;
            }else{
                $berlinMin.="O";
            }
        }

        return $berlinMin;

    }
    public function getBerlinHours(int $hour):String {
        if($hour==0){
            return "OOOO\nOOOO";
        }
        $berlinHour="OOOO\n";
        $simpleHours=$hour%5;

        for ($i=0 ; $i<4 ; $i++){
            if($simpleHours>0){
                $berlinHour.="R";
                $simpleHours--;
            }else {
                $berlinHour .= "O";
            }
        }


        return $berlinHour;
    }


}
