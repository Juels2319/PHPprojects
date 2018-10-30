<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 021 21.10.18
 * Time: 12:47
 */

$numbers = [];
for ($i=1; $i<=12; $i++){
    //$numbers[$i]=rand(0,1);
    $numbers[$i]=$i;
    $numbers[$i+12]=$i;
}
$numbers[25]=0;

shuffle($numbers);