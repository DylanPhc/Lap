<?php 

$var_a = $_POST['var_a'];
$var_b = $_POST['var_b'];

$nghiem;

if ($var_a == 0){
    $nghiem = "Invalid";

}else{
    $nghiem = -$var_b / $var_a;
}

$nghiem = "x= ".$nghiem;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <title>Document</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    table {
        width: 600px;
        background-color: lightblue;
    }

    td {
        background-color: white;
    }
    </style>
</head>

<body>
    <form action="display_2.php" method="post">
        <table class="tabel-container">
            <tr style="width: 100%">
                <td colspan="5" style="text-align: center">
                    Giải phương trình bậc 1
                </td>
            </tr>

            <tr>
                <td>Phương trình</td>
                <td><input type="text" name="var_a" /></td>
                <td>X +</td>
                <td><input type="text" name="var_b" /></td>
                <td>= 0</td>
            </tr>

            <tr>
                <td>Nghiệm</td>
                <td><label> <?php echo $nghiem ?></label></td>
            </tr>

            <tr>
                <td colspan="5">
                    <input style="margin-left: 280px" type="submit" value="Xuất" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>