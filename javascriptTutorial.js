$(document).ready(function () {
    
    $("#card1").click(function () { 
       $(this).animate({
        bottom : '100px'
       })
        
    });

    $("#card1").on("mouseover mouseout, click", function (event) {
        $("#card1 card-title").html(event.type + " : " +event.which);
        
    });
});