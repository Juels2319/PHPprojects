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
        function fBefore() {
            $("#info").text("Waaaait...");
        }

        function fSuccess(data) {
            $("#info").text(data);
        }

        $(document).ready(function () {
            var tratata = "TRATATA";
            $("#but").bind("click", function () {
                $.ajax({
                    type: "POST",
                    url: "process.php",
                    data: ({name: tratata, numb: 1231321231}),
                    dataType: "HTML",
                    beforeSend: fBefore,
                    success: fSuccess
                });
            });
        });
    </script>
</head>
<body>
<button id="but" name="value" value="<?php echo $number; ?>"><?php echo $number; ?></button>
<br>
<label id="info" name="label" </label>

</body>
</html>