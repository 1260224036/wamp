
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <p>系统自带进制转换函数</p>
    <hr>
    <p>10进制转2，8，16进制</p>
    <ul>
        <li>10进制转2进制 <br>
            如：&lt;?php echo decbin('10') ?> => <?php echo decbin('10') ?>
        </i>
        <li>10进制转8进制<br>
            如：&lt;?php echo decoct('10') ?> => <?php echo decoct('10') ?>
         </i>
        <li>10进制转16进制<br>
            如：&lt;?php echo dechex('10') ?> => <?php echo dechex('10') ?>
        </i>
    </ul>

    <hr>
        <p>2，8，16进制转10进制</p>
             <ul>
                    <li>2进制转10进制 <br>
                        如：&lt;?php echo bindec('10') ?> => <?php echo bindec('10') ?>
                    </i>
                    <li>8进制转10进制<br>
                        如：&lt;?php echo octdec('10') ?> => <?php echo octdec('10') ?>
                     </i>
                    <li>16进制转10进制<br>
                        如：&lt;?php echo hexdec('10') ?> => <?php echo hexdec('10') ?>
                    </i>
                </ul>
    <hr>
    <?php
            $num1 = '';
            $num2 = '';
            $_GET['change'] ='';
            if(isset($_GET['num1'])){

                $num1 = $_GET['num1'];
                $funName = $_GET['change'];
                echo 1;
                echo $_GET["change"];
                echo 1;
                }
        ?>
    <p>案例</p>
    <h1>使用变量函数模式，未解决</h1>>
    <form action='' method='get'>
        <input type='text' name = 'num1' value = '<?php echo $num1; ?>'>
        <select name='change'>
            <option value = 'decbin' <?php if('decbin'== $_GET['change']){echo 'selected';}; ?>>10转2</option>
            <option value = 'decoct' <?php if('decoct'== $_GET['change']){echo 'selected';}; ?>>10转8</option>
            <option value = 'dechex' <?php if('dechex'== $_GET['change']){echo 'selected';}; ?>>10转16</option>
            <option value = 'bindec' <?php if('bindec'== $_GET['change']){echo 'selected';}; ?>>2转10</option>
            <option value = 'octdec' <?php if('octdec'== $_GET['change']){echo 'selected';}; ?>>8转10</option>
            <option value = 'hexdec' <?php if('hexdec'== $_GET['change']){echo 'selected';}; ?>>16转10</option>
        </select>
        <input  type='submit' value='转换'>
        <input type='text' name = 'num2' value = '<?php echo $num2; ?>'>
    </form>

</body>
</html>