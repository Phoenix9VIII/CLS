//JSON object 
var empInfo = {
	"Name" : "Nour",
	"Phone" : {
		"CellPhone":"123456789",
		"Landline":"02465879",
		"Office":"028974654",	
},
	"Address" : {
		"Street":"161 st.",
		"Region":"Maadi",
		"City":"Cairo",
		"Country":"Egypt",
},
	"Married" : false,
	"Children" : 2,
};
document.querySelectorAll("span")[0].innerHTML = empInfo.Name;
document.querySelectorAll("span")[1].innerHTML = empInfo.Phone.CellPhone;
document.querySelectorAll("span")[2].innerHTML = empInfo.Phone.Landline;
document.querySelectorAll("span")[3].innerHTML = empInfo.Phone.Office;
document.querySelectorAll("span")[4].innerHTML = empInfo.Address.Street;
document.querySelectorAll("span")[5].innerHTML = empInfo.Address["Region"];
document.querySelectorAll("span")[6].innerHTML = empInfo.Address["City"];
document.querySelectorAll("span")[7].innerHTML = empInfo.Address.Country;
if(empInfo.Married){
	document.querySelectorAll("span")[8].innerHTML = "Yes";
}else {
	document.querySelectorAll("span")[8].innerHTML = "No";
}
document.querySelectorAll("span")[9].innerHTML = empInfo.Children;


/*
console.log(empInfo.Name);
console.log(empInfo["Name"]);
console.log(empInfo);
console.log(empInfo["Phone"][0]);
console.log(empInfo.Phone[2]);
console.log(empInfo.Address.City);
*/