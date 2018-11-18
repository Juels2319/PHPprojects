<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17.11.2018
 * Time: 13:25
 */
?>
<!DOCTYPE html>
<html>
<head>

</head>
<title>Кнопка</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    function fBefore(data) {
        console.log(data);
    }

    function fSuccess(response) {
        //var jsonResponse = JSON.parse(response);
        console.log(response);
    }

    $(document).ready(function () {
        $("button").bind("click", function () {
            $.ajax({
                type: "POST",
                url: "process/validateCard.php",
                //data: 'data=' + JSON.stringify({name: this.name, value: this.innerHTML}),
                data: 'data=' + JSON.stringify({cardNumber: $('input#cardNumber')[0].value}),
                beforeSend: fBefore(JSON.stringify({cardNumber: $('input#cardNumber')[0].value})),
                success: fSuccess
            });
        });
    });
</script>
<table class="table" border="5 px">
    <tr><td><input type="text" id="cardNumber" placeholder="CARD NUMBER"></td></tr>
    <tr><td><input type="text" id="cardHolder" placeholder="CARDHOLDER"></td></tr>
    <tr><td><input type="text" id="cardDate" placeholder="DATE"></td></tr>
    <tr><td><input type="text" id="cardCVV" placeholder="***"></td></tr>
</table>
<button id="button" name="button">CHECK VALIDATE</button>
<style>
    .table{
        width: 1200px;
    }
    .table td{
        width: 1000px;
        height: 100px;
    }
    .input cardNumber{
        size: 80px;
        font-size: 30px;
    }
    .input cardCVV{
        size: 20px;
    }

</style>
</body>
</html>