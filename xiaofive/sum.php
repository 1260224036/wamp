<?php
    $num1 = '';
    $num2 = '';
    $sum = '';
    if(isset($_GET['num1'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $sum = $num1 + $num2;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <form action='' method="get">
            <input type="text" name="num1"  value="<?php echo $num1; ?>"/>+
            <input type="text" name="num2" value="<?php echo $num2; ?>"/>+
            <input type="submit" value="=">
            <input type="text"  name='sum' value="<?php echo $sum; ?>"/>
     </form>
</body>
</html>