<?php
include('./src/JWT.php');
use \Firebase\JWT\JWT;

$key = $_GET['key'];
$jwt = $_GET['access_token'];


$decoded = JWT::decode($jwt, $key, array('HS256'));

foreach ($decoded->data as $key => $item){
    if (is_string($item)){
        echo "<b>$key:</b> $item<br/>";
    } else {
        echo "<b>".$key.'</b><br/>';
        foreach ($item as $k=>$v){
            echo "<b>$k:</b> $v<br/>";
        }
    }
}



?>
