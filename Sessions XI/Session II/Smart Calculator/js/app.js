//console.log(123);
document.querySelector("button").addEventListener("click", calculate);

function calculate(){
	var fn = document.querySelector("#fNumber").value;
	var op = document.querySelector("#operation").value;
	var sn = document.getElementById("sNumber").value;

	if(op == "sum"){
		var final = sum (fn, sn);
	}else if (op == "sub"){
		var final = sub (fn, sn);
	}else if (op == "mul"){
		var final = mul (fn, sn);
	}else if (op == "div"){
		var final = div (fn, sn);
	}
		document.querySelector("#showresult").innerHTML = final;
}
function sum(fNum, sNum){
	var result = parseFloat(fNum) + parseFloat(sNum);
	return result;
}
function sub(fNum, sNum){
	var result = fNum - sNum;
	return result;
}
function mul(fNum, sNum){
	var result = fNum * sNum;
	return result;
}
function div(fNum, sNum){
	var result = fNum / sNum;
	return result;
}
