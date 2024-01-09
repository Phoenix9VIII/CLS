// Exercise One
$("#exOne button:first-child").click(exOneHide);
$("#exOne button:nth-child(2)").click(exOneShow);
$("#exOne button:last-of-type").click(exOneHideShow);
function exOneHide(){
    $("#exOne section").hide(2000);
}
function exOneShow(){
    $("#exOne section").show(2000);
}
function exOneHideShow(){
    $("#exOne section").toggle(2000);
}
// Exercise Two
$("#exTwo button:first-child").click(exTwoHide);
$("#exTwo button:nth-child(2)").click(exTwoShow);
$("#exTwo button:last-of-type").click(exTwoHideShow);
function exTwoHide(){
    $("#exTwo section").slideUp(2000);
}
function exTwoShow(){
    $("#exTwo section").slideDown(2000);
}
function exTwoHideShow(){
    $("#exTwo section").slideToggle(2000);
}
// Exercise Three
$("#exThree button:first-child").click(exThreeHide);
$("#exThree button:nth-child(2)").click(exThreeShow);
$("#exThree button:last-of-type").click(exThreeAlert);
function exThreeHide(){
    $("#exThree section").fadeOut(2000);
}
function exThreeShow(){
    $("#exThree section").fadeIn(2000);
}
function exThreeAlert(){
    $("#exThree section").fadeTo(500 , 0.5).fadeTo(500,1).fadeTo(500 , 0.5).fadeTo(500 , 1).fadeTo(500 , 0.5).fadeTo(500 , 1).fadeTo(500 , 0.5).fadeTo(500 , 1).fadeTo(500 , 0.5).fadeTo(500 , 1);
}
// Exercise Four
$("#exFour button:first-child").click(exFourInlarge);
$("#exFour button:nth-child(2)").click(exFourShrink);
$("#exFour button:last-of-type").click(exFourMove);
function exFourInlarge(){
    $("#exFour section").animate({"width": "+=10px", "height":"+=10px"});
}
function exFourShrink(){
    $("#exFour section").animate({"width": "-=10px", "height":"-=10px"});
}
function exFourMove(){
    $("#exFour section").animate({"margin-left":"+=10px"});
}
// Exercise Five
