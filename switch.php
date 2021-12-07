<html>
    <body>
        <h3>switch Statement</h3>
       <?php
       $favcolor = "blue";
       switch($favcolor){
           case "blue":
            echo "Your favarite color is blue!";
            break;
            case "red":
                echo "Your favarite color is red";
                break;
                case "green":
                    echo "Your favarite color is green";
                    break;
                    default:
                    echo "Your favarite color niether red, blue, nor green!";
       }
       ?> 
       <h3>while loop</h3>
       <?php
       $x = 1;
       while($x <= 5){
           echo "The number is: $x<br>";
           $x++;
       }
       ?>
       <h3>For Loop</h3>
       <?php
       $x = 0;
       for($x = 0; $x < 5; $x++){
           echo "The number is: $x<br>";
       }
       ?>
       <h3>Do while Loop</h3>
       <?php
       $x = 0;
       do{
           echo "The number is: $x<br>";
           $x++;
       }while($x <= 5);
       ?>
       <h3>for reach Loop</h3>
       <?php
       $colors = array("red", "green", "blue", "yellow");
       foreach($colors as $value){
           echo  "$value <br>";
       }
       ?>
       <h3>continue Statement</h3>
       <?php
       for($i = 0; $i < 5; $i ++){
           if($i == 2)continue;
           echo $i."<br>";
       }
       ?>
       <h3>break Statement</h3>
       <?php
       for($i = 0; $i < 8; $i++){
           if($i == 4)
           break;
           echo $i."<br>";
       }
       ?>
       <h3>Defined function</h3>
       <?php
       function writeMsg(){
           echo "Hello world!<br>";
       }
       function Sayed(){
           echo "Shakouat Hossen Sayed";
       }
       writeMsg();
       Sayed();
       ?>
       <h3>Function Argument</h3>
       <?php
       function family($fnam){
           echo "$fnam familys<br>";
       }
       family ("Shakouat");
       family ("Sayed");
       family ("Sakhawat");
       family ("hossain");
       family ("Fhossen");
       ?>
       <h3>Function Argument</h3>
       <?php
       function familyN($fnam, $year){
           echo "$fnam Sayed.Bron in $year<br>";
       }
       familyN ("Shakouat", "1990");
       familyN ("Sayed", "1999");
       familyN ("Fakla","1998");
       ?>
       <h3>Defults Argument</h3>
       <?php
       function setHeigh($minheigh = 50){
           echo "The Heigh is: $minheigh<br>";
       }
       setHeigh(350);
       setHeigh();
       setHeigh(135);
       setHeigh(80);
       ?>
       <h3>Returnning Value</h3>
       <?php
       function sum($x, $y){
           $z = $x + $y;
           return $z;
       }
       echo "5 + 10 = ".sum(5,10)."<br>";
       echo "7 + 13 = ".sum(7, 13)."<br>";
       echo "2 + 4 = ".sum(2, 4)."<br>";
       ?>
    </body>

</html>