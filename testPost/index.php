<!DOCTYPE html>
<html>
<head>
    <title>Обработка форм</title>
</head>
<body>
    <form name="Form" action="check.php" method="post">
        <label>NAME: </label><br>
        <input type="text" name="Name" placeholder="Введите имя"><br>
        <label>Email: </label><br>
        <input type="text" name="email" placeholder="Введите email"><br>
        <label>Text: </label><br>
        <textarea name="message" cols="20" rows="20"></textarea><br>
        <input type="submit" name="done" value="ГОТОВО"><br>
    </form>
</body>
</html>