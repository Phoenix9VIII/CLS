// Exercise One //
$("#exOne button").click(exOneChange);
function exOneChange(){
$("#exOne section").css("background-color","green");
}
// Exercise Two //
$("#exTwo button").dblclick(exTwoChange);
function exTwoChange(){
    $("#exTwo section").toggleClass("exTwoSection");
}
// Exercise Three //
$("#exThree input").keyup(exThreeText);
function exThreeText(){
    var myName = $("#exThree input").val();
    $("#exThree h1").text(myName);
}
// Exercise Four //
