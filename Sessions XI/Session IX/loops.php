<?php
for($x = 1; $x <= 10; $x++){
    echo "<h1>" . $x ."</h1> ";
}

echo "<hr>";

$d = 10;
while ($d >= 1){
    echo "<h1>" . $d . "</h1>";
    $d --;
}

echo "<hr>";

$names = ["Mohamed","Nour","Eldiin","Abdelkader"];
foreach($names as $nm){
    echo $nm;
//     echo "<h1>" . $nm . "</h1>";
}

echo "<hr>";

?>