
var requestObj = {
         url: "BoardValues.php", // File to retrive
         type: "GET",
         success: MakeBoard, // function when its succesful
         dataType: 'json', // data type of the retrived file
         error: function(){alert("Cannot creat XMLHttpRequest")} // what to do if it fails.
     }    
     
$(function(){  // Loads the javascript when the page is done loading.
     
   $.ajax(requestObj);
   
   $("#check_ans").click(function(){       
       $.post("process.php", $("form").serialize(),function(errors){
             $("#details").html(errors)});            
       return false;
   })
   
   
  $("#new_puzzle").click(function(){      
       location.reload(true);
       return false;
   })
  
});

function MakeBoard(gameValues){
    
    var index;
    var MAX = 81;
    var id;
    
    for(index = 1; index <= MAX ; index++){        
        id = "#" + index;       
        $(id).html(gameValues.gameArray[index]);
    }
    
}


