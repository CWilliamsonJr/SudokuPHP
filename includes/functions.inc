<?php
 require_once 'class.Cell.inc';

/**
 * 
 * @return Array
 */


function MaintainState(){    
    $gameArray =  $_SESSION["GameState"]; 
        foreach($_POST as $postkey => $postvalue){ // Loops through both Arrays and putting the submitted values back into the game array.
            if($postkey == "Submit") continue;
            if(!empty($postvalue)){                  
                $gameArray[$postkey]->enteredValue = $postvalue;   
                $gameArray[$postkey]->keepState = true;                
            }
        }
    return $gameArray;
}
/**
 * 
 * @return string
 */
function SolveGame(){
    $gameArray =  $_SESSION["GameState"];    
    $errors = 0;
    foreach($_POST as $postkey => &$postvalue){
        if($postkey === "Submit") continue;        
             if($postvalue != $gameArray[$postkey]->_getCellValue()){ //checking submitted answers against the answer key.
                $errors++;                 
            }                  
    }
    if ($errors >= 1){        
       if($errors == 1){          
           return "You have an error on the board"; 
        }
        echo "Number of errors ".$errors;
       return "You have multiple errors on the board";
    }  else {       
        return "YOU WIN";
    }
    
}

?>
