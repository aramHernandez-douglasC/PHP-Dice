<?php

/*
 * Created by Aram Hernandez for Lab 10 WEB BASED SCRIPTING
 */

class Dice {
    public $t = [0,0,0,0,0,0,0,0,0,0,0,0,0];
    

    function rollDice() {

        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);
        $result = $dice1 + $dice2;
        return $result;
    }
    
    function multipleRoll($times = 36000){
        for ($i = 0; $i<$times;$i++){
            $total = $this->rollDice();
            switch ($total){
                case 2: 
                    $this->t[2]++ ;
                    break;
                case 3: 
                    $this->t[3]++ ;
                    break;
                case 4: 
                    $this->t[4]++ ;
                    break;
                case 5: 
                    $this->t[5]++ ;
                    break;
                case 6: 
                    $this->t[6]++ ;
                    break;
                case 7: 
                    $this->t[7]++ ;
                    break;
                case 8: 
                    $this->t[8]++ ;
                    break;
                case 9: 
                    $this->t[9]++ ;
                    break;
                case 10: 
                    $this->t[10]++ ;
                    break;
                case 11: 
                    $this->t[11]++ ;
                    break;
                case 12: 
                    $this->t[12]++ ;
                    break;
                
            }
        }
    }

}
