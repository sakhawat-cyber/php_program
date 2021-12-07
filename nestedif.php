<?php
echo "x = 27<br>";
echo "y = 4<br>";
echo "zy = 17<br>";
$x = 27;
$y = 7;
$z = 17;
if($x > $y){
    if($x > $z){
        echo "<br>The Largest is: ".$x;
    }
    else{
        echo "<br>The Largest is: ".$z;
    }
}
elseif($y > $z){
    echo "<br> The Largest is: ",$y;
}
else {
echo "<br>The largest is: ".$z;
}
?>