<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 021 21.10.18
 * Time: 12:42
 */
include_once "get25.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Кнопка</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var element = document.getElementsByName("button1");
        function fBefore() {
            $("#info").text("Waaaait...");
        }

        function fSuccess(response) {
            $("#info").text('DONE');
            $('#but').text(response);
        }

        $(document).ready(function () {
            $("#but").bind("click", function () {
                $.ajax({
                    type: "POST",
                    url: "process.php",
                    data: 'data='+ JSON.stringify({name: element[0].name, value: element[0].innerHTML}),
                    beforeSend: fBefore,
                    success: fSuccess
                });
            });
        });
    </script>
</head>
<body>
<button id="but" name="button1" value="<?php echo $number;?>" ><?php echo 'click me!'?></button><br><br><br>
<label id="info">label</label>
</body>
</html>