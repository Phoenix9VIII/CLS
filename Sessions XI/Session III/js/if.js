/*
var x = 200;
var y = 200;

if(y > x){
	console.log("Y is Greater Than X");
}else if(x > y){
	console.log("X is Greater Than Y");
}else{
	console.log("X is Equal Y");
}
*/

var studentName = "Nour";
var ar = 85;
var em = 90;
var sc = 97;
var it = 95;

var total = ar + em + sc + it;
var grandTotal = 400;
var precentage = total / grandTotal * 100;

console.log(precentage);
if(precentage >= 90){
	console.log(studentName + " is Excellent");}
else if(precentage >= 80){
	console.log(studentName + " is Ver Good");}
else if(precentage >= 65){
	console.log(studentName + " is Good");}
else if(precentage >= 50){
	console.log(studentName + " is Fair");}
else{console.log(studentName + " is Fail");}

