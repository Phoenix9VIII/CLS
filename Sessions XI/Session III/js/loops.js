/*
for(var x =1; x <= 10; x = x + 1){
	console.log("Hello");
}
*/
/*
for(var k = 100; k <= 1000; k+=100){
	console.log(k);
}
*/
/*
for(var k = 10; k >= 1; k--){
	console.log(k);
}
*/
/*
var j = 1;
while(j <= 10){
	console.log("HELLO");
	j += 1;
}
*/

var names = ["Ali","Ahmed","Hassan","Hany"];
var salaries = [5000,6500,7500,4800];
var bonuses = [450,190,650,500];
var penalties = [380,590,490,570];

for(var q = 0; q <=3; q++){
	var netSalary = salaries [q] + bonuses [q] - penalties [q];
	console.log("The Net Salary for " + names[q] + " is " + netSalary);
}
