var list = JSON.parse(products);

//console.log(list);
//console.log(list[0]);

for(var x = 0; x <=9; x++){
document.querySelectorAll("img")[x].setAttribute("src", list[x].image);
document.querySelectorAll("h4")[x].innerHTML = list[x].title;
document.querySelectorAll("p")[x].innerHTML = list[x].description;
document.querySelectorAll("h3")[x].innerHTML = list[x].price;
document.querySelectorAll("h5")[x].innerHTML = list[x].category;
}