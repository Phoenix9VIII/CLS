// Exercise One
for(var f = 0; f <=2; f++)
{
document.querySelectorAll("h1")[f].innerHTML ="Hello!";
}

// Exercise Two
$("#exTwo img").attr("src","flower.jpg");
$("#exTwo img").removeAttr("title");
$("#exTwo a").attr("href","http://google.com");
$("#exTwo a").attr("target","_blank");

// Exercise Three
$("#exThree h1").attr("id","exThreeHeader");

// Exercise Four
// document.querySelector("#exFour h1").classList.add("exFourHeader");
$("#exFour").addClass("exFourHeader");

// Exercise Five
$("#exFive h1:first-child").css("color","blue");
$("#exFive h1:nth-child(2)").css("background-color","cyan");
$("#exFive h1:last-child").css({"color": "green","background-color":"yellow"});