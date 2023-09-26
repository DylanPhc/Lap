<?php

    $start_num = $_POST["start_number"];
    $end_num = $_POST["end_number"];

    $sum = 0;
    $multiply = 1;
    $sum_even = 0;
    $sum_odd= 0;

    for ($i = $start_num; $i <= $end_num; $i++ ){
        $sum += $i;
        $multiply *= $i;
    }

    for($j = $start_num; $j <= $end_num; $j ++){
        if($j % 2 == 0){
            $sum_even += $j;
        } else{
            $sum_odd += $j;
        }
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

    .letter {
        width: 200px;
        height: 50px;
    }
    </style>
</head>

<body>
    <form action="display_4.php" method="post">
        <table>
            <tr>
                <td></td>
                <td>Số bắt đầu:</td>
                <td><input type="text" name="start_number" /></td>
                <td>Số kết thúc:</td>
                <td><input type="text" name="end_number" /></td>
            </tr>
            <tr>
                <td colspan="5">Kết quả</td>
            </tr>
            <tr>
                <td class="letter">Tổng các số</td>
                <td colspan="4"><label for=""><?php echo $sum ?></label></td>
            </tr>
            <tr>
                <td class="letter">Tích các số:</td>
                <td colspan="4"><label for=""><?php echo $multiply ?></label></td>
            </tr>
            <tr>
                <td class="letter">Tổng các số chẵn:</td>
                <td colspan="4"><label for=""><?php echo $sum_even ?></label></td>
            </tr>
            <tr>
                <td class="letter">Tổng các số lẻ:</td>
                <td colspan="4"><label for=""><?php echo $sum_odd ?></label></td>
            </tr>
            <tr>
                <td colspan="5">
                    <input style="margin-left: 300px" type="submit" value="Tính toán" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>