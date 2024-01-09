$("#thumbnails img").mouseover(function (){
    var myImg = $(this).attr("src");
    $("#preview img").fadeTo(500, 0.01, function(){
    $("#preview img").attr("src",myImg).fadeTo(500,1)});
});