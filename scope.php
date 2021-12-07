<?php
$amount = 500;
echo"<br>The value is : ",$amount;
scope();
echo"<br>The value still is: ",$amount;
function scope(){
    $amount = 800;
    echo"<br>The value in the function is: ",$amount;
}
?>
