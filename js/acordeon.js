$(document).ready(function(){
    

    $("div.con").eq(0).removeClass('con');
    
    
    $("h1.btn").on("click",function(){
        
        //$("div.contenido").slideUp();
        $(this).siblings("div.contenido").slideToggle();
        
    });
});


