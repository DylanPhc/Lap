 <?php
$username = $_POST['username'];
$in_ten = "Hi ".$username;
?>

 <!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">

 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Chào các bạn</title>
     <style>
     .container {
         border: 1px solid black;
         background-color: lightblue;
         width: 300px;
     }

     p {
         margin-top: 0;
     }

     .print {
         text-align: center;
         font-weight: bold;
     }

     .username {
         background-color: white;
         display: inline-block;
         padding: 2px 4px;
     }
     </style>
 </head>

 <body>

     <form action="display.php" method="post">
         <div class="container">
             <p class="print">In ra loi chao</p>
             <p class="username">Ho ten ban</p>
             <input style="width: 200px; height: 26px" type="text" name="username" />
             <div style="margin-left: 100px;">
                 <?php echo $in_ten ?>
             </div>
             <input style="display: block; margin-left: 100px; margin-top:5px;" type="submit" value="Xuat" />
         </div>
     </form>
 </body>

 </html>