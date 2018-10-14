<?php
include_once "generate.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>
</head>
<body>
<form name="Form" action="result.php" method="post">
    <label>Сколько будет <?php echo $number1.' X '.$number2.'?'; ?></label><br><br>
    <button type="submit" name="answer" value="<?php echo $answerArray[0];?>"><?php echo $answerArray[0]; ?></button>
    <button type="submit" name="answer" value="<?php echo $answerArray[1];?>"><?php echo $answerArray[1];?></button>
    <button type="submit" name="answer" value="<?php echo $answerArray[2];?>"><?php echo $answerArray[2]; ?></button>
    <button type="submit" name="answer" value="<?php echo $answerArray[3];?>"><?php echo $answerArray[3]; ?></button>
</form>

</body>
</html>