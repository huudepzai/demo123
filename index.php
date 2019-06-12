<?php 
if($_REQUEST['login_id']){
  $loginid = $_REQUEST['login_id'];
}else{
  $loginid = "";
}
$array = [
  'acccess_token' => '21312343rbvhbvgbfhgbfhgbfh'.$$loginid
];
  echo json_encode($array);
?>
