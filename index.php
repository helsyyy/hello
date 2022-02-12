<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
    Hello World
 <?php 
    $id = 5;
    $city='Dnipro';
    define(year, '20');
     
    $name='Anton';
    
    $ball = [
        
    'math' => 11,
    'engl'=> 9,
    'geogr' => 12,
    
    ];
    
    
    ?>
    <h1 class="name">
        <?php
        
        echo $name . '' . $surname;
            
        ?></h1>  
    <div class="info">
        <?php
        
        echo 'I live in' . $sity . ' . Me' . year . 'y.o';
        
              
        ?></div>
    
    <div class="info">
    Наша успеваемость:
        <p>Математика:<?php echo $ball[math];?></p>
        <p>Англиский:<?php echo $ball[engl];?></p>
        <p>География:<?php echo $ball[geogr];?></p>
        <p>Средний балл:
            <?php
            echo round(( $ball[geogr] + $ball[engl] +$ball[math]) / 3 , 2);
           ?>
        </p>
        <?php 
        $var=1;
        $var1=5;
        $var +=3;
        $var /=2;
        $var *= $var1;
        
            $var++;
            $var--;
        
        echo 'var = ' . $var;
        
        $min=-11;
        $max=11;
        
        $gr1 = -5;
        $gr2 = 5;
        
    for( $i=$min ; $i<$max ; $i++){
        
        echo '<br>' . $i;
        
        if($gr1<=$i and $gr2>=$i)echo ' Зона действия границ';
    }
        ?>
    </div>
</body>
</html>