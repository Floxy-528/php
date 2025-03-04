
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h3> Basic Example</h3>
        <?php
            echo "Hello Sir, this is the first PHP assignment";
        ?>
<hr>
<h3>Object Oriented</h3>

    <?php
    $name = "Floxy";
    $age = "16";
    $gender = "female";
    $hobby = "dancing";

    function getUserInfo($name, $age, $gender, $hobby)          {
        return "Name: " . $name . " | Age: " . $age . " <br> Gender: " . $gender . " | Hobby: " . $hobby;
    }
    echo getUserInfo($name, $age, $gender,$hobby)
    ?>

<hr>

    <h3>
        Control Structures
    </h3>
    <h4>
        If Statement
    </h4>
        <?php 
        $num = 4;
        $num1 = 6;
        $bool = true;

            if($num < $num1 && !$bool) {
                echo " First Condition is valid";
            } 
            elseif( $num > $num1 || $bool) {
                echo "Second Condition is valid";
            }
            else {
                echo "None of the conditions are valid";
            }
        ?>

    <h4>Switch Case</h4>
    <?php 
    $num = 4;
    $num1 = 6;
    $bool = true;

        switch( $num ) {
                case 1:
                    echo "First Condition is true";
                case -6:
                    echo "Second Condition is true";
                default:
                echo "All conditions failed";
        }
    ?>

    <h3>Loops</h3>
    <h4>For Loops</h4>
    <?php 
    $num = 16;
    for ($i = 1; $i < $num; $i++) {
        echo "Number is ". $i ."<br>";
    }
    ?>

<h4>While Loops</h4>
<?php
    $num = 16;
    $i = 1;
    while ($i < $num) {
        echo  $i. " is less than " .$num . "<br>";
        $i++ ;
    }
?>

<h4>For Each Loops</h4>
<?php
$femaleNames = ["Floxy", "Annabelle", "Rhoda", "Bella", "Joy"];
foreach($femaleNames as $femaleName) {
    echo "". $femaleName ."<br>";
}
?>

        


    
</body>
</html>

