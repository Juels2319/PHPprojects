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

        function fSuccess(response) {
            var jsonResponse = JSON.parse(response);
            console.log(jsonResponse['name']);
            $("#info").text('DONE');
            var element = $('#' + jsonResponse['name'])[0];   // идентификатор элемента, которому необходимо поменять значение
            var text = (jsonResponse['value']);
            element.innerText=text;
        }
        $(document).ready(function () {
            $("button").bind("click", function () {
                $.ajax({
                        type: "POST",
                        url: "process.php",
                        data: 'data=' + JSON.stringify({name: this.name, value: this.innerHTML}),
                        beforeSend: fBefore,
                        success: fSuccess
                });
            });
        });
    </script>
</head>
<body>
    <table class="table">
        <tr>
            <td><button id="button1" name="button1" value="<?php echo $number;?>" ><?php echo $number;?></button></td>
            <td><button id="button2" name="button2" value="<?php echo $number;?>" ><?php echo $number;?></button></td>
            <td><button id="button3" name="button3" value="<?php echo $number;?>" ><?php echo $number;?></button></td>
            <td><button id="button4" name="button4" value="<?php echo $number;?>" ><?php echo $number;?></button></td>
            <td><button id="button5" name="button5" value="<?php echo $number;?>" ><?php echo $number;?></button></td>
        </tr>
    </table>
<label id="info">label</label>

<style>
    .table{
        width: 200px;
    }
    .table td{
        width: 100px;
        height: 100px;
    }
</style>
</body>
</html>