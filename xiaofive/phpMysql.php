

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <p>php操作数据库</p>
    <ul>
        <li>mysqli_connect(主机,用户,密码[,数据库,端口号])：返回一个mysqli连接符对象 <br>
            如：$link = mysqli_connect('localhost','user','123'[,数据库,端口号]);<br>
            关闭连接：mysqli_close($link)
        </i>
        <li>mysqli_select_db(连接符对象,数据库名)：选择数据库<br>
            如：mysqli_select_db($link,students);
         </i>
        <li>mysqli_set_charset(连接符对象,设定的字符)<br>
            如：mysqli_set_charset($link,设定的字符) ?>
        </i>
        <li>mysqli_query(结果集对象,mysql执行语句)：如果是select,describe和show，则返回一个结果集对象<br>
            如：$result = mysqli_query($link,'SELECT * from students');
         </i>
         <li>mysqli_fetch_row(结果集对象,mysql执行语句)：返回一个枚举（以整数为索引）数组<br>
             如：$arr = mysqli_fetch_row($result);
          </i>
          <li>mysqli_fetch_assoc(结果集对象,mysql执行语句)：返回一个关联（以key为索引）数组<br>
               如：$arr = mysqli_fetch_assoc($result);
          </i>
          <li>mysqli_fetch_array(结果集对象,mysql执行语句)：返回一个关联（以key为索引）/枚举（以整数为索引）或两者都有的数组<br>
             如：$arr = mysqli_fetch_array($result);
          </i>
          <li>mysqli_fetch_all(结果集对象,mysql执行语句)：返回所有关联（以key为索引）/枚举（以整数为索引）或两者都有的数组<br>
               如：$arr = mysqli_fetch_all($result);
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