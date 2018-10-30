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
                        data: 'data=' + JSON.stringify({name: this.name, value: this.value}),
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
            <td><button class="button" id="button1" name="button1" value="<?php echo $numbers[1];?>" ><?php echo $numbers[1];?></button></td>
            <td><button class="button" id="button2" name="button2" value="<?php echo $numbers[2];?>" ><?php echo $numbers[2];?></button></td>
            <td><button class="button" id="button3" name="button3" value="<?php echo $numbers[3];?>" ><?php echo $numbers[3];?></button></td>
            <td><button class="button" id="button4" name="button4" value="<?php echo $numbers[4];?>" ><?php echo $numbers[4];?></button></td>
            <td><button class="button" id="button5" name="button5" value="<?php echo $numbers[5];?>" ><?php echo $numbers[5];?></button></td>
        </tr>
        <tr>
            <td><button class="button" id="button6" name="button6" value="<?php echo $numbers[6];?>" ><?php echo $numbers[6];?></button></td>
            <td><button class="button" id="button7" name="button7" value="<?php echo $numbers[7];?>" ><?php echo $numbers[7];?></button></td>
            <td><button class="button" id="button8" name="button8" value="<?php echo $numbers[8];?>" ><?php echo $numbers[8];?></button></td>
            <td><button class="button" id="button9" name="button9" value="<?php echo $numbers[9];?>" ><?php echo $numbers[9];?></button></td>
            <td><button class="button" id="button10" name="button10" value="<?php echo $numbers[10];?>" ><?php echo $numbers[10];?></button></td>
        </tr>
        <tr>
            <td><button class="button" id="button11" name="button11" value="<?php echo $numbers[11];?>" ><?php echo $numbers[11];?></button></td>
            <td><button class="button" id="button12" name="button12" value="<?php echo $numbers[12];?>" ><?php echo $numbers[12];?></button></td>
            <td><button class="button" id="button13" name="button13" value="<?php echo $numbers[13];?>" ><?php echo $numbers[13];?></button></td>
            <td><button class="button" id="button14" name="button14" value="<?php echo $numbers[14];?>" ><?php echo $numbers[14];?></button></td>
            <td><button class="button" id="button15" name="button15" value="<?php echo $numbers[15];?>" ><?php echo $numbers[15];?></button></td>
        </tr>
        <tr>
            <td><button class="button" id="button16" name="button16" value="<?php echo $numbers[16];?>" ><?php echo $numbers[16];?></button></td>
            <td><button class="button" id="button17" name="button17" value="<?php echo $numbers[17];?>" ><?php echo $numbers[17];?></button></td>
            <td><button class="button" id="button18" name="button18" value="<?php echo $numbers[18];?>" ><?php echo $numbers[18];?></button></td>
            <td><button class="button" id="button19" name="button19" value="<?php echo $numbers[19];?>" ><?php echo $numbers[19];?></button></td>
            <td><button class="button" id="button20" name="button20" value="<?php echo $numbers[20];?>" ><?php echo $numbers[20];?></button></td>
        </tr>
        <tr>
            <td><button class="button" id="button21" name="button21" value="<?php echo $numbers[21];?>" ><?php echo $numbers[21];?></button></td>
            <td><button class="button" id="button22" name="button22" value="<?php echo $numbers[22];?>" ><?php echo $numbers[22];?></button></td>
            <td><button class="button" id="button23" name="button23" value="<?php echo $numbers[23];?>" ><?php echo $numbers[23];?></button></td>
            <td><button class="button" id="button24" name="button24" value="<?php echo $numbers[24];?>" ><?php echo $numbers[24];?></button></td>
            <td><button class="button" id="button25" name="button25" value="<?php echo $numbers[0];?>" ><?php echo $numbers[0];?></button></td>
        </tr>
    </table>
<label id="info">label</label>

<style>
    .table{
        width: 200px;
    }
    .table td{
        width: 100px;
        height: 50px;
    }
    .button {
        width: 60px;
        height: 30px;
        border: 2px solid #0a3c59;
    }
</style>
</body>
</html>