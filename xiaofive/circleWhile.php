
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$Title$</title>
</head>
<body>
    <p>while循环</p>
    <p>案例：求1-100内能被3整除的所有数的和</p>
    <?php
                $sum = 0;
                $i = 1;
                echo '<p>';
                while($i <= 100){
                    if($i%3 == 0){
                        $sum+=$i;
                        echo $i;
                        if($i+3 < 100){
                              echo '+';
                          }
                    }
                    $i++;

                }
                echo "={$sum}</p>";
            ?>

    <hr>
    <p>do while循环</p>
        <p>案例：求7-177内能被7整除的所有数的平均数</p>
        <?php
                    $sum = 0;
                    $i = 7;
                    $count = 0;
                    echo '<p>';
                    while($i <= 177){
                        if($i%7 == 0){
                            $sum+=$i;
                            echo $i;
                            if($i+7 < 177){
                                  echo '+';
                              }
                              $count++;
                        }
                        $i++;

                    }
                    $avg = $sum/$count;
                    echo "={$avg}</p>";
                ?>

    <hr>
        <p>for循环</p>
            <p>案例：输出1-100内能被3整除但不能被5整除的偶数</p>
            <?php
                $i = 1;
                $count = 0;
                echo '<p>';
                for($i ; $i<100 ;$i++){
                    if($i%3 == 0 && $i%5!==0 && $i%2==0){
                        echo $i;
                        if($i+2 < 100){
                              echo '，';
                          }
                          $count++;
                    }
                }
                echo "共有{$count}个</p>";
            ?>

    <hr>
    <p>for循环</p>
    <p>案例：输出1-100内能被3整除用’三‘代替，能被5整除用’五‘，同时满足前两者使用’三五‘代替</p>
    <?php
        $i = 1;
        $count = 0;
        echo '<p>';
        for($i ; $i<100 ;$i++){
            if($i%3 == 0 && $i%5==0){
                echo '三五';
            }elseif($i%3 == 0 && $i%5!==0){
                echo '三';
            }elseif($i%3 !== 0 && $i%5==0){
                echo '五';
            }else{
                echo $i;
            }
            if($i+1 <100){
                echo '，';
            }
        }
        echo "</p>";
    ?>

    <hr>
        <p>多重循环：使用 . 连接字符串</p>
            <p>案例：</p>
            <?php
                $i = 1;
                echo '<p>';
                for($i ; $i<=4 ;$i++){
                    echo $i.'  ';
                    for($j=2;$j<=8;$j++){
                        echo $j ;
                        echo ' ';
                    }
                    echo '<br>';
                }
                echo "</p>";
            ?>

    <hr>
    <p>多重循环</p>
        <p>案例：</p>
        <?php
            $i = 1;
            $count = 1;
            echo '<table>';
            for($i ; $i<=4 ;$i++){
                echo '<tr>';
                for($j=1;$j<=6;$j++){
                    echo '<td>' ;
                    echo $count;
                    echo '</td>' ;
                    $count++;
                }
                echo '<tr>';
            }
            echo "</table>";
        ?>

</body>
</html>