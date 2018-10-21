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
            echo "1";
            break;
        case 1:
            echo "0";
            break;
        default:
            echo "1";
            break;
    }
}

function init()
{
    $json = json_decode($_POST['data'], true);
    $x = (int)$json['value'];
    processValue($x);
}

init();

