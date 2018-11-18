<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17.11.2018
 * Time: 14:01
 */
/**
 * @param $numb
 */
function checkDouble($numb)
{
    if ($numb<10 ? $result=$numb : $result=$numb%10+1);
    return $result;
}

//$card='0010203040506070';
//$card='4111111111111111';
//$card = '4242424242424242';

function isValidCard($card)
{

    $cardArray = str_split($card);
    $length = count($cardArray);
    //echo $length;
    //echo PHP_EOL;
    $sum = 0;
    for ($i = 0; $i < $length - 1; $i++) {
        if ($i % 2 == 0) {
            $sum += checkDouble($cardArray[$i] * 2);
        } else $sum += $cardArray[$i];
    }
    $sum += $cardArray[$length - 1];
    return ($sum % 10 == 0 ? true : false);
    //echo ' ' . ($isValid ? 'VALID ' : 'NOT VALID ');
}
$json = json_decode($_POST['data'], true);
$cardNumber = $json['cardNumber'];
$response = array('response' => isValidCard($cardNumber), 'dev'=> 'dev_text');
echo json_encode($response);


