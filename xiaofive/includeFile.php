
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <p>include '文件的路径'：载入路径文件</p>
    <p>include_once '文件的路径'：载入路径文件</p>
    <p>后者不会重复再入，载入失败程序继续运行</p>
    <hr>
    <p>require '文件的路径'：载入路径文件</p>
    <p>require_once '文件的路径'：载入路径文件</p>
    <p>后者不会重复再入，载入失败终止程序</p>
     <?php
        include 'F:\WebStorm\JS\divChange.html';
      ?>
     <hr>
     <p>获取路径方式：__DIR__，getcwd()当前正在访问的网页的路径</p>
</body>
</html>