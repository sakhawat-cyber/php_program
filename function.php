<html>
    <body>
        <?php echo strlen ("Hello world! dsfa");
        ?><br>
        <?php
        echo strpos("Hello World!", "World");
        ?><br>
        <?php
        echo strcmp("Hello World!", "Hello World!")."<br>";
        echo strcmp("Hello World!", "Hello World!")."<br>";
        echo strcmp("hello World!", "Hello World!");
        ?><br>
        <?php
        echo substr("Hello World", 6)."<br>";
        echo substr("Hello World", 10)."<br>";
        echo substr("Hello World", 3)."<br>";
        echo substr("Hello World", 18)."<br>";
        ?><br>

        <?php
        echo substr_replace("Hello World","Earth",6);
        ?><br>

        <?php
        echo strtolower("Hello WoRLD");
        ?><br>

        <?php
        echo ucfirst("hello  World, How are You");
        ?><br>

        <?php
        echo ucwords("Hellow world how are you");
        ?><br>
        
        <?php
        $cars = array("suzuki,", "volvo,", "bmw,", "toyoto.");
        print_r($cars);
        ?><br>

        <?php
        $cars = array("suzuki ","volvo ", "bmw ","toyoto s");
        echo $cars[0]." and ".$cars[1]."are swedish cars";
        ?><br><br>
        <?php
        $car = array(
            array("volvo",22, 18),
            array("BMW",15, 13),
            array("saab",5, 2),
            array("Land Rover",17, 15)
        );
        echo $car[0][0].": In stock:".$car[0][1].", Sold".$car[0][2].".<br>";
        echo $car[1][0].": In stock:".$car[1][1].", Sold".$car[1][2].".<br>";
        echo $car[2][0].": In stock:".$car[2][1].", Sold".$car[2][2].".<br>";
        echo $car[3][0].": In stock:".$car[3][1].", Sold".$car[3][2].".<br>";
        ?><br><br>

        <?php
        $people = array("Sayed","Jeo", "Glenn", "Clevleand");
        echo pos($people)."<br>";
        ?><br><br>

        <?php
        $car = array("volvo","BMW","Toyota");
        sort($car);
        $clength = count($car);
        for($x = 0;$x<$clength;$x++){
            echo $car[$x];
            echo "<br>";
        }
        ?><br><br>

        <?php
        $a = array(5,15, 25);
        echo array_sum($a);
        ?><br><br>

        <?php
        $a = array("a" => "red,", "b" => "green,", "c" => "red");
        print_r(array_unique($a));
        ?><br><br>

        <?php
        $a = array("Name" =>"Peter, ", "Age" => "41, ","Country" =>"USA");
        print_r(array_values($a));
        ?><br><br>

        <?php
        $my_array = array("red,", "green,", "blue,", "Yellow,", "purle");
        shuffle($my_array);
        print_r($my_array);
        ?><br><br>
    </body>
</html>