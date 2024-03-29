<?php
date_default_timezone_set("Asia/Tokyo");
include('./src/JWT.php');
use \Firebase\JWT\JWT;

$key = $_GET['key'];
$jwt = $_GET['access_token'];

try {
    $decoded = JWT::decode($jwt, $key, array('HS256'));
} catch(Exception $e){
    echo 'Error: '.$e->getMessage();
}

if (!empty($decoded)){
    foreach ($decoded->data as $key => $item){
        if (is_string($item)){
            echo "<b>$key:</b> $item<br/>";
        } else {
            echo "<hr width='250px' align='left' /><b>".$key.'</b><br/>';
            foreach ($item as $k=>$v){
                echo "<b>$k:</b> $v<br/>";
            }
        }
    }
}

?>
