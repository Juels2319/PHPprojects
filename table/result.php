<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 014 14.10.18
 * Time: 12:49
 */
session_start();
if(isset($_SESSION['trueAnswer'])) $answerTrue=$_SESSION['trueAnswer'];
    else header("Location:main.php");
if(isset($_POST['answer'])) $yourAnswer = $_POST['answer'];
    else header("Location:main.php");
echo "Ваш ответ: $yourAnswer  <br>";
echo "Верный ответ: $answerTrue  <br>";
if ($yourAnswer == $answerTrue)
    echo "ВЕРНО! <br>";
else
    echo "НЕВЕРНО! <br>";
echo "<a href=\"main.php\"'/'>СНОВА </a>";
session_unset();
session_destroy();
