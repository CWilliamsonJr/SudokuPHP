<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Deals with the hiding of the of values in each region.
 *
 * @author Clarence
 */
class Region {
    static private $region_1 = array(1,2,3,10,11,12,19,20,21);
    static private $region_2 = array(4,5,6,13,14,15,22,23,24);
    static private $region_3 = array(7,8,9,16,17,18,25,26,27);
    static private $region_4 = array(28,29,30,37,38,39,46,47,48);
    static private $region_5 = array(31,32,33,40,41,42,49,50,51);
    static private $region_6 = array(34,35,36,43,44,45,52,53,54);
    static private $region_7 = array(55,56,57,64,65,66,73,74,75);
    static private $region_8 = array(58,59,60,67,68,69,76,77,78);
    static private $region_9 = array(61,62,63,70,71,72,79,80,81);
    static private $hiddenValuesArray = []; // container for the hidden fields
    /**
     * 
     * 
     * @global Cell $gameArray
     */
    public static function Hide(){
        global $gameArray;
        
        $regionAll = array(self::$region_1,self::$region_2,self::$region_3,self::$region_4,
            self::$region_5,self::$region_6,self::$region_7,self::$region_8,self::$region_9);
         
        
         for($i=0; $i < (count($regionAll));$i++){ // loops though the the 9 regions
             
             $arrayTemp = $regionAll[$i];
             $temp1 = mt_rand(3,7);    // determins how many cells to hide in a given region.         
             for($j=0; $j < $temp1; $j++){ // loops though $j amount of times depending how many are hidden.
                shuffle($arrayTemp); // randomizes the array
                $hiddenValues[] = array_pop($arrayTemp); // takes a value off the array.
             }             
         }
        self::$hiddenValuesArray = $hiddenValues; 
        for ($i=0;$i < count($hiddenValues); $i++ ){
            
            $gameArray[$hiddenValues[$i]]->_setIsHidden(TRUE); // sets which values get hidden.
          
      }
    }/**
     * 
     * @return bool
     */
    public static function _getHiddenVaulesArray(){
        return self::$hiddenValuesArray;
    }
}

?>
