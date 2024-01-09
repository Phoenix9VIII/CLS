<?php 
function sum($fNum , $sNum){
    $result = $fNum + $sNum;
    return $result;
}
function sub($fNum , $sNum){
    $result = $fNum - $sNum;
    return $result;
}
function mul($fNum , $sNum){
    $result = $fNum * $sNum;
    return $result;
}
function div($fNum , $sNum){
    $result = $fNum / $sNum;
    return $result;
}
$f = sum (18, 56);
$w = sub(52, 26);
$t = mul ($f, $w);
echo $t;
?>