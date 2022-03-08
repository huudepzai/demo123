<?php 
// if($_REQUEST['login_id']){
//   $loginid = $_REQUEST['login_id'];
// }else{
//   $loginid = "";
// }
// $array = [
//   'access_token' => '21312343rbvhbvgbfhgbfhgbfh'.$$loginid
// ];
//   echo json_encode($array);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://test-onlineacademy.lms.local/benefit-one/sso" method="post">
        <input name="sid" placeholder="sid">
        <input name="cid" placeholder="cid">
        <input type="submit" value="SEND">

    </form>
</body>
</html>
