
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <p>自定义触发用户错误</p>
    <p>trigger_error('错误提示内容'，错误代号)</p>
    <hr>
    <p>错误控制</p>
    <p>
        <img src='./img/controlError.jpg'>
    </p>
    <hr>
    <p>错误日志控制</p>
        <p>
            <img src='./img/errorBook.jpg'>
        </p>
    <hr>
        <p>自定义错误处理：无法处理E_ERROR</p>
        <ul>
            <li>1.声明使用自己的函数处理错误 <br>
                如：&lt;?php set_error_handler('函数名') ?>
            </i>
            <li>2.定义处理错误的函数<br>
                如：&lt;?php function '函数名'(){ } ?>
             </i>
             <li>3.记录错误<br>
                 如：&lt;?php file_put_contents('记录错误的文件',"需要记录的错误","记录的方式，如 FILE_APPEND 就是添加") ?>
              </i>
        </ul>
        <p>
            <img src='./img/setErrorHandler.jpg'>
        </p>


</body>
</html>