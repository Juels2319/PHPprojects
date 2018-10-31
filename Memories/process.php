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
        case " ":
            return '1';
            break;
        case '1':
            return ' ';
            break;
        default:
            return "1";
            break;
    }
}

function check_session()
{
    session_start();
    if (isset($_SESSION['main']))
    {
        // ВТОРОЕ НАЖАТИЕ
        $dev = $_SESSION['main'];
        session_unset();
        session_destroy();
        return $dev;
    }
    else
    {
        // Первое нажатие

        $dev = 'START';
        $_SESSION['main']='456';
        return $dev;
    }

}

function init()
{

    $dev = check_session();

    $json = json_decode($_POST['data'], true);
    //print_r($json);
    $name = $json['name'];
    //$value = $json['value'];
    if (isset($json['value']))
    $value=processValue($json['value']);
    else $value=processValue(' ');



    $response = array('name' => $name, 'value'=> $value, 'dev_text'=> $dev);
    echo json_encode($response);

}

init();

