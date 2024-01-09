var x = 27;
var y = 3;

function sum(fNum,sNum){
	var result = fNum + sNum;
	return result;
}

function sub(fNum,sNum){
	var result = fNum - sNum;
	return result;
}

function mul(fNum,sNum){
	var result = fNum * sNum;
	return result;
}

function div(fNum,sNum){
	var result = fNum / sNum;
	return result;
}

var p = sum(10,3);
var m = sub(570,290);
var d = mul(p, m);
var h = div(d, 3);
console.log(h);


