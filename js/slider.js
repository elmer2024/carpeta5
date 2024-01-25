$(document).ready(function(){
    
    $(window).on("blur",function(e){
       
        clearInterval(intervalor);
        
    });
    
    $(window).on("focus",function(){
       
        intervalor = setInterval(automatico,5000);
        
    });
    
    
   tamanio = $("div#mover>article").outerWidth();
    $("#siguiente").on("click",function(){ 
        siguiente();
        clearInterval(intervalor);
        intervalor = setInterval(automatico,5000);
    });
    $("#anterior").on("click",function(){
        anterior(); 
        clearInterval(intervalor);
        intervalor = setInterval(automatico,5000); 
    }); 
});
function siguiente(){
    $("div#mover").animate({
        marginLeft:'-='+tamanio+'px',
    },1000,function(){
        $("div#mover>article:first").insertAfter("div#mover>article:last");
         $(this).removeAttr("style"); 
    });   
}
function anterior(){
     $("div#mover").animate({
        marginLeft:'0',
    },1000,function(){
        $("div#mover>article:last").insertBefore("div#mover>article:first");
         $(this).removeAttr("style");
    });
}
intervalor = setInterval(automatico,10000);
function automatico(){
    siguiente();
}