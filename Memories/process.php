<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 021 21.10.18
 * Time: 12:42
 */


/**
 * @param $x
 */
function processValue($x)
{
    switch ($x) {
        case 0:
            return "1";
            break;
        case 1:
            return "0";
            break;
        default:
            return "1";
            break;
    }
}

function init()
{
    $json = json_decode($_POST['data'], true);
    //print_r($json);
    $name = $json['name'];
    $value = processValue((int)$json['value']);
    $response = array('name' => $name, 'value'=> $value);
    echo json_encode($response);
}

init();

