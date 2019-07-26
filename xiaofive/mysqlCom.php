<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <p>数据库简单命令</p>
    <ul>
        <li>数据库操作</li>
        <li>查看所有数据库：show databases; <br>
            <img src='./img/showDatabases.jpg' />
        </i>
        <li>查看数据库创建语句：show create database 数据库名; <br>
            <img src='./img/showCreateDatabase.jpg' />
        </i>
        <li>创建新的数据库：create database 数据库名 [charset 设置字符集 collation 设置校对(排序)规则]; <br>
            删除数据库：drop database 数据库名 ;<br>
            选择数据库：use 数据库名; <br>
         </i>
         <li style='margin-top:35px;'>表操作</li>
        <li>
            创建新的表：create table 表名 (字段名 类型长度 其他属性,字段名 类型长度 其他属性,...); <br>
            查看所有表：show tables ; <br>
            查看表的创建语句：show create table 表名 ; <br>
            查看表的结构：desc 表名 ; <br>
            添加表字段名：alert table 表名 add 字段名 类型长度 其他属性...; <br>
            修改表字段名：alert table 表名 change 旧字段名 新字段名 类型长度 其他属性...; <br>
                        alert table 表名 modify 字段名 类型长度 其他属性...; <br>
            删除表字段名：alert table 表名 drop 字段名; <br>
            修改表名：alert table 表名 rename 新表名; <br>
            修改表字符集：alert table 表名 charset = '字符集'; <br>
        </i>
        <li style='margin-top:35px;'>表中数据操作</li>
        <li>
            向表中插入数据：insert into 表明 [字段名，字段名，...] values (数据，数据，...);<br>
            查看表中数据：select [字段名，字段名，...] from 表名 [where 条件];<br>
            删除表中数据：delete from 表名 [where 条件];<br>
            修改表中数据：update 表名 set 字段名=值，字段名=值 [where 条件];<br>
         </i>
    </ul>

    <hr>
        <p>enum和set类型</p>
            <ul>
                <li>enum：单选 <br>
                    如：enum(选项值1，选项值2，...)，以1，2，3...为索引，选值只能为选项之一
                </i>
                <li>set：多选<br>
                    如：set(选项值1，选项值2，...)，以1，2，4，...2<sup>n</sup>为索引，选址只能为其中的一个或多个，
                    存储的值为所有选项索引值的和
                 </i>
            </ul>
    <hr>
    <p>运算符</p>
    <ul>
        <li>like：模糊查找运算符 <br>
            如：字段名 like %关键字%，即在所有字段中查找包含关键字的所有值，%表示任意个数的任意字符，_为任意一个字符
        </i>
        <li>between 值1 and 值2 ：在值1和值2之间<br>
            如：where 字段名 between 值1 and 值2
        </i>
        <li>in：查看一个值是否在给定的可选值内 <br>
            如：值 in (可选值1，可选值2...)
        </i>
        <li>is：判断一个字段的值是否存在 <br>
           只有两种情况：字段名 is null，字段名 is not null
        </i>
    </ul>

    <hr>
        <p>高级语句</p>
        <ul>
            <li>select高级语句 <br>
                <img src='./img/selectCom.jpg' />
            </i>
            <li>having 条件：是对where筛选的进一步筛选<br>
                如：where ... group by 字段名 having
            </i>
            <li>order by 字段名 ：排序<br>
                如：order by 字段名1 [asc(正序)/desc(倒序)]...
            </i>
            <li>limit 起始行号,数量：截取从 "起始行号" 开始的 "数量" 行 <br>
               如：limit 0,3;
            </i>

            <li> <br>
                <img src='./img/deleteTruncate.jpg' />
            </i>
            <li>查询语句1 union [all/distinct(消除重复)]查询语句2：将查询结果纵向连接成一个表<br>
                如：select id,f1,f2 from join1 union select id,c1,c2 from join2<br>
                <img src='./img/union.jpg' />
            </i>
            <hr>
            <li>表1 [连接方式] join  表2 [on] 条件<br>
            </i>
            <li>连接方式： 交叉查询cross，内连接inner，左外连接，右外连接<br>
               如：select * from 表1 inner join 表2 on 表1.字段名=表2.字段名;
            </i>
            <li>in,any,all<br>
               如：in(查询语句);<br>
               any(查询语句);
               all(查询语句);
            </i>
            <hr>
            <li>数据备份：<br>
               <img src='./img/copyData.jpg' /><br>
               如：mysqldump.exe -h主机名 -u用户名 -p 数据库名 > 备份完整路径<br>
               如：mysqldump.exe -h主机名 -u用户名 -p 数据库名 表名> 备份完整路径
            </i>
            <li>数据还原：<br>
               <img src='./img/getCopyData.jpg' /><br>
               如：mysql.exe -h主机名 -u用户名 -p 数据库名 < 备份完整路径
            </i>
            <hr>
            <li>用户创建：<br>
               <img src='./img/createUser.jpg' /><br>
               如：create user 用户名[@"地址"] identified by "用户密码"
            </i>
            <li>用户删除：<br>
               <img src='./img/dropUser.jpg' /><br>
               如：drop user 用户名[@"地址"]
            </i>
            <li>设置用户密码：<br>
               <img src='./img/setPd.jpg' /><br>
               如：set password for 用户名[@"地址"] = password('密码')
            </i>
            <li>授予用户权限：<br>
               <img src='./img/setUserGrant.jpg' /><br>
               如：grant 操作[all/insert/delete...] on  *.* 或 数据库名.* 或 数据库名.表名 to 用户名[@'地址']，
            </i>
            <li>取消用户权限：<br>
               <img src='./img/deleteUserGrant.jpg' /><br>
               如：revoke 操作[all/insert/delete...] on  *.* 或 数据库名.* 或 数据库名.表名 from 用户名[@'地址']
            </i>
        </ul>
</body>
</html>