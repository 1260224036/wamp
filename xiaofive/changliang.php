<?php
    define("PI",3.14);
    $s1 = PI*2*2;
    echo "s1 = $s1";
    echo '<br>';
    const PI2 = 3.1415926;
    $s2 = constant('PI')*3*3;
    echo "s2 = $s2";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <p>定义常量：define('常量名',常量值) 如：define("PI",3.14);</p>
    <p>定义常量：const 常量名 = 常量值 如：const PI2 = 3.1415926;</p>

    <hr>
    <p>使用常量不需要加$，直接写常量名 如：echo $s1 = PI*2*2;</p>
    <p>使用constant('常量名') 如： $s2 = constant('PI')*3*3;</p>

    <hr>
    <p>判断一个常量是否存在，defined('常量名') 如：defined('PI')</p>

    <hr>
    <p>预定义常量</p>
    <ul>
        <li>PHP_VERSION：查看当前php版本 <br>
            如：&lt;?php echo PHP_VERSION ?> => <?php echo PHP_VERSION ?>
        </i>
        <li>PHP_OS：查看当前php运行的系统<br>
            如：&lt;?php echo PHP_OS ?> => <?php echo PHP_OS ?>
         </i>
        <li>PHP_INT_MAX：查看当前php int类型的最大证书值 <br>
            如：&lt;?php echo PHP_INT_MAX ?> => <?php echo PHP_INT_MAX ?>
        </i>
        <li>M_PI：表示精确到小数点后10多位的π<br>
            如：&lt;?php echo M_PI ?> => <?php echo M_PI ?>
         </i>
    </ul>

    <hr>
        <p>魔术常量</p>
            <ul>
                <li>_DIR_：查看当前文件的目录 <br>
                    如：&lt;?php echo _DIR_ ?> => <?php echo __DIR__ ?>
                </i>
                <li>_FILE_：查看当前文件的路径<br>
                    如：&lt;?php echo _FILE_ ?> => <?php echo __FILE__ ?>
                 </i>
                <li>_LINE_：查看当前代码的行号 <br>
                    如：&lt;?php echo _LINE_ ?> => <?php echo __LINE__ ?>
                </i>
            </ul>
</body>
</html>