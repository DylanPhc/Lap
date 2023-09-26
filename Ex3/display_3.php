<?php

    $number = $_POST["enter_number"];
    $letter;

    switch($number){
        case 0 :
            $letter = "Khong";
            break;
        case 1 :
            $letter = "Mot";
            break;
        case 2 :
            $letter = "Hai";
            break;
        case 3 :
            $letter = "Ba";
            break;
        case 4 :
            $letter = "Bon";
            break;
        case 5 :
            $letter = "Nam";
            break;
        case 6 :
            $letter = "Sau";
            break;
        case 7 :
            $letter = "bay";
            break;
        case 8 :
            $letter = "Tam";
            break;
        case 9 :
            $letter = "Chin";
            break;
        default :
            $letter = "Invalid";
            break;
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

    table {
        width: 400px;
    }
    </style>
</head>

<body>
    <form action="display_3.php" method="post">
        <table>
            <tr>
                <td colspan="3">Đọc số</td>
            </tr>
            <tr>
                <td>Nhập số (0-9)</td>
                <td rowspan="3"><input type="submit" value="Submit" /></td>
                <td>Bằng chữ</td>
            </tr>
            <tr>
                <td style="padding: 10px"><input type="text" name="enter_number" /></td>
                <td style="width: 200px"><label for=""> <?php echo $letter ?></label></td>
            </tr>
        </table>
    </form>
</body>

</html>