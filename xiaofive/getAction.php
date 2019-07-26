<?php
    if($_GET['name']){
        $name = $_GET['name'];
        $bir = $_GET['bir'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <p><?php echo "姓名；{$name}"; ?></p>
    <p> 出生日期：<?php echo $bir; ?></p>
</body>
</html>