<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Pulls in the file that will be used and populates $gameTable,$gameArray,$answerKey variables.
 *
 * @author Clarence
 */
class GameBoard {
     static private $filename = "puzzels/" ;
     static private $handle;
     static private $filesize;
     static private $buffer;   
     const LOW = 1 ;
     const HIGH = 7 ;
     const MAX = 81;
     /**
      * 
      * @global Cell $gameTable
      * @global Array $gameArray
      * @global Array $answerKey
      * @throws Exception
      */
     static public function MakeBoard(){
         self::makeFileName();
         self::$filesize = filesize(self::$handle);
         global $gameTable,$gameArray,$answerKey;
                 
         try {
                if (file_exists(self::$filename)){
                   self::$handle = fopen(self::$filename, "r"); 
                   self::$filesize = filesize(self::$filename);
                   
           }else{
                throw new Exception("There was no file or it can't be read");
             }            
           } catch (Exception $e){
                print_r($e->getMessage());
                printf("</br >");
                print_r(self::$filename);
        }
         
         $i = 1;
                 
         while(!feof(self::$handle)){ // Loops though the open file
             
             self::$buffer = fgetss(self::$handle, self::$filesize);               
             $gameArray[$i]->_setCellValue(self::$buffer);
             //$answerKey[$i] = $gameArray[$i] = $gameTable[$i]->__ToString();             
             $i++;
         }
         
         fclose(self::$handle);  // closes file
        
    }     
    static private function makeFileName(){ // Generates the file name
        self::$filename.= "Board"; 
        self::$filename.= (string)(mt_rand(self::LOW,self::HIGH));
        self::$filename.=".txt";                   
    } 
    /**
     * 
     * @return string
     */
    static public function _getFileName(){
        return self::$filename;
    }
}
?>
