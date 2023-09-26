<?php

    $a = $_POST["var_a"];
    $b = $_POST["var_b"];
    $c = $_POST["var_c"];

    $denta = ($b * $b) - ( 4 * $a * $c);

    $nghiem1;
     $nghiem2;

    $ouput;

    if ( $denta < 0){
        $ouput = "Invalid";
    } elseif ($denta == 0  ){
        $nghiem1 = (-$b / (2 * $a));
        $nghiem2 = (-$b / (2 * $a));
    } else{
        $nghiem1 = (-$b + sqrt($denta))/(2 *$a);
        $nghiem2 = (-$b - sqrt($denta))/(2 *$a);
    }

    if ($ouput == "Invalid"){
        $ouput = "Invalid";
    } else if($nghiem1 != $nghiem2){
        $ouput = "X1=".$nghiem1." X2=".$nghiem2; 
    } else {
        $ouput = "X1 = X2 = ".$nghiem1;
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
    table,
    tr,
    td {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <form action="display-5.php" method="post">
        <table>
            <tr>
                <td colspan="4" style="background-color: lightblue; text-align: center">
                    Giai phuong trinh bac 2
                </td>
            </tr>
            <tr>
                <td>Phuong trinh</td>
                <td><input type="text" name="var_a" /> X^2</td>
                <td><input type="text" name="var_b" /> X+</td>
                <td><input type="text" name="var_c" />= 0</td>
            </tr>
            <tr>
                <td>Nghiem</td>
                <td><label for=""><?php echo $ouput?></label></td>
            </tr>
            <tr>
                <td colspan="4">
                    <input style="margin-left: 280px" type="submit" value="Xuất" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>