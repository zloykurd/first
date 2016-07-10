<?php
/**
 * Created by PhpStorm.
 * User: ZloykurD
 * Date: 10.07.2016
 * Time: 23:56
 */
include 'views/header.php';
$student = array('Иванов','Петров','Сидоров','Гудков');
$fruit = array('Апельсин','Яблоко','Помидор','Лук');

//echo $student[2] = 'Apple';
//print_r($student);

foreach($student as $key=>$value){
    echo $value . " Привет!<br>";
}


for($i =0; $i<5;$i++){
    echo $i . '<br>';
}
$a =5;
$b  = &$a;//& знак ссылка
echo $b . '<br>';

var_dump($_GET);
include 'test.php';

require 'test1.php';


include 'views/footer.php';
