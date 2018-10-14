<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 014 14.10.18
 * Time: 13:49
 */
session_start();
$number1 = rand(2,20);
$number2 = rand(2,20);

$answer["true"] = $number1*$number2;
$answer["false1"] = $number1*$number2-rand(1,2);
$answer["false2"] = $number1*($number2+rand(1,2));
$answer["false3"] = $number1*($number2-rand(1,2));
$answerArray = [$answer["true"],$answer["false1"],$answer["false2"],$answer["false3"]];
shuffle($answerArray);
$_SESSION['trueAnswer'] = $answer["true"];

