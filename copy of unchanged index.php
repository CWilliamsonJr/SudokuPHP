<!DOCTYPE html PUBLIC "-//W3C//DTD XHTL 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="styles/stylesheet.css" rel="stylesheet" type="text/css" />
</head>
<?php 
    
    require_once '/includes/include_files.inc';
    global $gameArray;
    
    if(isset($_POST['Submit'])){
        echo "freeze";
    }else{         
        GameBoard::MakeBoard();
        Region::Hide();
    }
     var_dump(Cell::$CellArrayValues);
    /* 
       $temp1 = $gameArray[1]_getCellValue(); isset($_POST['Submit']) ? echo $temp1; : $gameArray[1]
     * 
     * isset($_POST['Submit']) ? echo $temp1; : $gameArray[1]
     * echo $temp1;
     * $gameArray[1]_getCellValue() = temp1
     * 
     */

;
    
    
?>  
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post" name="Sudoku" class="gameForm" > 
            <div id="gameboard" >
                <!--Row 1-->
                <span id="row_1"> 
                    <div class="region_1 col_1" id="1"><?php echo $gameArray[1] ;?></div>
                    <div class="region_1 col_2" id="2"><?php echo $gameArray[2] ;?></div>
                    <div class="region_1 col_3" id="3"><?php echo $gameArray[3] ;?></div>
                    <div class="region_2 col_4" id="4"><?php echo $gameArray[4] ;?></div>
                    <div class="region_2 col_5" id="5"><?php echo $gameArray[5] ;?></div>
                    <div class="region_2 col_6" id="6"><?php echo $gameArray[6] ;?></div>
                    <div class="region_3 col_7" id="7"><?php echo $gameArray[7] ;?></div>
                    <div class="region_3 col_8" id="8"><?php echo $gameArray[8] ;?></div>
                    <div class="region_3 col_9" id="9"><?php echo $gameArray[9] ;?></div> 
                </span>
                <!--Row 2-->
                <span id="row_2"> 
                    <div class="region_1 col_1" id="10"><?php echo $gameArray[10] ;?></div> 
                    <div class="region_1 col_2" id="11"><?php echo $gameArray[11] ;?></div>
                    <div class="region_1 col_3" id="12"><?php echo $gameArray[12] ;?></div>
                    <div class="region_2 col_4" id="13"><?php echo $gameArray[13] ;?></div>
                    <div class="region_2 col_5" id="14"><?php echo $gameArray[14] ;?></div>
                    <div class="region_2 col_6" id="15"><?php echo $gameArray[15] ;?></div> 
                    <div class="region_3 col_7" id="16"><?php echo $gameArray[16] ;?></div>
                    <div class="region_3 col_8" id="17"><?php echo $gameArray[17] ;?></div>
                    <div class="region_3 col_9" id="18"><?php echo $gameArray[18] ;?></div> 
                </span>
                <!--Row 3-->
                <span id="row_3">
                    <div class="region_1 col_1" id="19"><?php echo $gameArray[19] ;?></div>
                    <div class="region_1 col_2" id="20"><?php echo $gameArray[20] ;?></div>
                    <div class="region_1 col_3" id="21"><?php echo $gameArray[21] ;?></div>
                    <div class="region_2 col_4" id="22"><?php echo $gameArray[22] ;?></div>
                    <div class="region_2 col_5" id="23"><?php echo $gameArray[23] ;?></div>
                    <div class="region_2 col_6" id="24"><?php echo $gameArray[24] ;?></div> 
                    <div class="region_3 col_7" id="25"><?php echo $gameArray[25] ;?></div>
                    <div class="region_3 col_8" id="26"><?php echo $gameArray[26] ;?></div>
                    <div class="region_3 col_9" id="27"><?php echo $gameArray[27] ;?></div>
                </span>
                <!--Row 4-->
                <span id="row_4"> 
                    <div class="region_4 col_1" id="28"><?php echo $gameArray[28] ;?></div> 
                    <div class="region_4 col_2" id="29"><?php echo $gameArray[29] ;?></div>
                    <div class="region_4 col_3" id="30"><?php echo $gameArray[30] ;?></div>
                    <div class="region_5 col_4" id="31"><?php echo $gameArray[31] ;?></div>
                    <div class="region_5 col_5" id="32"><?php echo $gameArray[32] ;?></div>
                    <div class="region_5 col_6" id="33"><?php echo $gameArray[33] ;?></div> 
                    <div class="region_6 col_7" id="34"><?php echo $gameArray[34] ;?></div>
                    <div class="region_6 col_8" id="35"><?php echo $gameArray[35] ;?></div>
                    <div class="region_6 col_9" id="36"><?php echo $gameArray[36] ;?></div> 
                </span>
                <!--Row 5-->
                <span id="row_5"> 
                    <div class="region_4 col_1" id="37"><?php echo $gameArray[37] ;?></div> 
                    <div class="region_4 col_2" id="38"><?php echo $gameArray[38] ;?></div>
                    <div class="region_4 col_3" id="39"><?php echo $gameArray[39] ;?></div>
                    <div class="region_5 col_4" id="40"><?php echo $gameArray[40] ;?></div>
                    <div class="region_5 col_5" id="41"><?php echo $gameArray[41] ;?></div>
                    <div class="region_5 col_6" id="42"><?php echo $gameArray[42] ;?></div> 
                    <div class="region_6 col_7" id="43"><?php echo $gameArray[43] ;?></div>
                    <div class="region_6 col_8" id="44"><?php echo $gameArray[44] ;?></div>
                    <div class="region_6 col_9" id="45"><?php echo $gameArray[45] ;?></div> 
                </span>
                <!--Row 6-->
                <span id="row_6"> 
                    <div class="region_4 col_1" id="46"><?php echo $gameArray[46] ;?></div> 
                    <div class="region_4 col_2" id="47"><?php echo $gameArray[47] ;?></div>
                    <div class="region_4 col_3" id="48"><?php echo $gameArray[48] ;?></div>
                    <div class="region_5 col_4" id="49"><?php echo $gameArray[49] ;?></div>
                    <div class="region_5 col_5" id="50"><?php echo $gameArray[50] ;?></div>
                    <div class="region_5 col_6" id="51"><?php echo $gameArray[51] ;?></div> 
                    <div class="region_6 col_7" id="52"><?php echo $gameArray[52] ;?></div>
                    <div class="region_6 col_8" id="53"><?php echo $gameArray[53] ;?></div>
                    <div class="region_6 col_9" id="54"><?php echo $gameArray[54] ;?></div> 
                </span>
                <!--Row 7-->
                <span id="row_7"> 
                    <div class="region_7 col_1" id="55"><?php echo $gameArray[55] ;?></div> 
                    <div class="region_7 col_2" id="56"><?php echo $gameArray[56] ;?></div>
                    <div class="region_7 col_3" id="57"><?php echo $gameArray[57] ;?></div>
                    <div class="region_8 col_4" id="58"><?php echo $gameArray[58] ;?></div>
                    <div class="region_8 col_5" id="59"><?php echo $gameArray[59] ;?></div>
                    <div class="region_8 col_6" id="60"><?php echo $gameArray[60] ;?></div> 
                    <div class="region_9 col_7" id="61"><?php echo $gameArray[61] ;?></div>
                    <div class="region_9 col_8" id="62"><?php echo $gameArray[62] ;?></div>
                    <div class="region_9 col_9" id="63"><?php echo $gameArray[63] ;?></div> 
                </span>
                <!--Row 8-->
                <span id="row_8"> 
                    <div class="region_7 col_1" id="64"><?php echo $gameArray[64] ;?></div> 
                    <div class="region_7 col_2" id="65"><?php echo $gameArray[65] ;?></div>
                    <div class="region_7 col_3" id="66"><?php echo $gameArray[66] ;?></div>
                    <div class="region_8 col_4" id="67"><?php echo $gameArray[67] ;?></div>
                    <div class="region_8 col_5" id="68"><?php echo $gameArray[68] ;?></div>
                    <div class="region_8 col_6" id="69"><?php echo $gameArray[69] ;?></div> 
                    <div class="region_9 col_7" id="70"><?php echo $gameArray[70] ;?></div>
                    <div class="region_9 col_8" id="71"><?php echo $gameArray[71] ;?></div>
                    <div class="region_9 col_9" id="72"><?php echo $gameArray[72] ;?></div> 
                </span>
                <!--Row 9-->
                <span id="row_9"> 
                    <div class="region_7 col_1" id="73"><?php echo $gameArray[73] ;?></div> 
                    <div class="region_7 col_2" id="74"><?php echo $gameArray[74] ;?></div>
                    <div class="region_7 col_3" id="75"><?php echo $gameArray[75] ;?></div>
                    <div class="region_8 col_4" id="76"><?php echo $gameArray[76] ;?></div>
                    <div class="region_8 col_5" id="77"><?php echo $gameArray[77] ;?></div>
                    <div class="region_8 col_6" id="78"><?php echo $gameArray[78] ;?></div> 
                    <div class="region_9 col_7" id="79"><?php echo $gameArray[79] ;?></div>
                    <div class="region_9 col_8" id="80"><?php echo $gameArray[80] ;?></div>
                    <div class="region_9 col_9" id="81"><?php echo $gameArray[81] ;?></div> 
                </span>
            </div>      
            <input type="submit" value="Submit" id="Submit" name="Submit">
            <input type="submit" value="Reset" id="Reset" name="Reset">
        </form>
    </body>
</html>