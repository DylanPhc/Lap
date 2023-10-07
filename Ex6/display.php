<?php 
//Create a function caculator sum of Array
function sumArr($arr){
    $sum = 0;
    foreach($arr as $x){
        $sum += $x;
    }
    return $sum;
}

// Gan value cho $string
$string = $_POST['arr'];

//Tach chuoi
$varArr = explode(',',$string);

//Tao gia tri bool
$check = true;

//Kiem tra chuoi nhap vao
foreach($varArr as $x){
    if(is_numeric($x) == false){
        $check== false;
        break;
    }
}



if($check == false){
    include 'error.html';
    exit();
} 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .enter {
        margin-left: 87px;
    }
    </style>
</head>

<body>
    <form action="display.php" method="post">
        <h1>Nhập và tính dãy số</h1>
        <table>
            <tr>
                <td>Nhập dãy số:</td>
                <td><input type="text" name="arr" required /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="enter" type="submit" value="Tổng dãy số" />
                </td>
            </tr>
            <tr>
                <td>Tổng dãy số</td>
                <td><label><?php echo sumArr($varArr); ?></label></td>
            </tr>
        </table>
    </form>
</body>

</html>