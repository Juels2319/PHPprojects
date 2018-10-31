<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 021 21.10.18
 * Time: 12:42
 */
include_once "get25.php";
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Кнопка</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        function fBefore(data) {
            $("#info").text("Waaaait...");
            console.log(data);
        }

        function fSuccess(response) {
            var jsonResponse = JSON.parse(response);
            $("#info").text('DONE');
            console.log(jsonResponse);
            var element = $('#' + jsonResponse['name'])[0];   // идентификатор элемента, которому необходимо поменять значение
            var text = (jsonResponse['value']);
            element.innerText=text;
        }
        $(document).ready(function () {
            $("button").bind("click", function () {
                $.ajax({
                        type: "POST",
                        url: "process.php",
                        data: 'data=' + JSON.stringify({name: this.id, value: this.innerText}),
                        beforeSend: fBefore(JSON.stringify({name: this.id, value: this.innerText})),
                        success: fSuccess
                });
            });
        });
    </script>
</head>
<body>
    <table class="table">
        <tr>
            <td><button class="button" id="button1" name="button1"> </button></td>
            <td><button class="button" id="button2" name="button2"> </button></td>
            <td><button class="button" id="button3" name="button3"> </button></td>
            <td><button class="button" id="button4" name="button4"> </button></td>
            <td><button class="button" id="button5" name="button5"> </button></td>
        </tr>
        <tr>
            <td><button class="button" id="button6" name="button6"> </button></td>
            <td><button class="button" id="button7" name="button7"> </button></td>
            <td><button class="button" id="button8" name="button8"> </button></td>
            <td><button class="button" id="button9" name="button9"> </button></td>
            <td><button class="button" id="button10" name="button10"> </button></td>
        </tr>
        <tr>
            <td><button class="button" id="button11" name="button11"> </button></td>
            <td><button class="button" id="button12" name="button12"> </button></td>
            <td><button class="button" id="button13" name="button13"> </button></td>
            <td><button class="button" id="button14" name="button14"> </button></td>
            <td><button class="button" id="button15" name="button15"> </button></td>
        </tr>
        <tr>
            <td><button class="button" id="button16" name="button16"> </button></td>
            <td><button class="button" id="button17" name="button17"> </button></td>
            <td><button class="button" id="button18" name="button18"> </button></td>
            <td><button class="button" id="button19" name="button19"> </button></td>
            <td><button class="button" id="button20" name="button20"> </button></td>
        </tr>
        <tr>
            <td><button class="button" id="button21" name="button21"> </button></td>
            <td><button class="button" id="button22" name="button22"> </button></td>
            <td><button class="button" id="button23" name="button23"> </button></td>
            <td><button class="button" id="button24" name="button24"> </button></td>
            <td><button class="button" id="button25" name="button25"> </button></td>
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