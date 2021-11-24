<?php
 class Clock
 {
     private $clock;
     private $date;
     private $minute;
     private $hour;
     private $second;
     /**
      * Clock constructor.
      */
     public function __construct()
     {
        date_default_timezone_set('Europe/Berlin');
        $this->clock = array(5);
        $this->date = date("H:i:s");
        $this->minute = substr($this->date,-5,2);
        $this->hour = substr($this->date,-8,2);
        $this->second = substr($this->date,-2,2);
     }

     public function bloc1minute($minute){
         $clock[5] = array(4);

         for($i = 0 ; $i < 4; $i++){
             if($i <= $minute%5-1){
                 $clock[5][$i] = true;
             }
             else{
                 $clock[5][$i] = false;
             }
         }
         return $clock[5];
     }

     public function bloc5minutes($minute){
        $clock[4] = array(11);

        for($i = 0; $i < 11; $i++){
            if($minute >= 5){
                $clock[4][$i] = true;
                $minute -= 5;
            }else
                $clock[4][$i] = false;

        }
        return $clock[4];
     }

     public function bloc1hour($hour){
         $clock[3] = array(4);

         for($i = 0 ; $i < 4; $i++){
             if($i <= $hour%5-1){
                 $clock[3][$i] = true;
             }
             else{
                 $clock[3][$i] = false;
             }
         }
         return $clock[3];
     }

     public function bloc5Hours($hour){
         $clock[2] = array(4);

         for($i = 0; $i < 4; $i++){
             if($hour >= 5){
                 $clock[2][$i] = true;
                 $hour -= 5;
             }else
                 $clock[2][$i] = false;
         }
         return $clock[2];
     }
 }?>