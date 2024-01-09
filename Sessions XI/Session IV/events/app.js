function exOne(){
document.querySelector("section").style.backgroundColor= "red";
}
//exOne();


document.querySelector("#exTwo button").addEventListener("click",exTwoChange);
document.querySelectorAll("#exTwo button")[1].addEventListener("click",exTwoReset);

function exTwoChange(){
document.querySelector("#exTwo section").classList.add("exTwosection");
}

function exTwoReset(){
document.querySelector("#exTwo section").classList.remove("exTwosection");
}
