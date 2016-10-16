<?php
include('crud.php');
if(isset($_REQUEST['name']) && isset($_REQUEST['phone'])):
// $insert_data = array(
//   'name' => $_REQUEST['name'],
//   'phone' => $_REQUEST['phone'],
//   'email' => $_REQUEST['email']
// );
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$ads_id = $_REQUEST['ad'];
$msg = $_REQUEST['msg'];
$files = $_REQUEST['files'];
$insert_query = "INSERT INTO applications SET name ='$name', ads_id='$ads_id', phone='$phone', email='$email', msg='$msg', files='$files'";
if($res = $con->query($insert_query)){

}else{
  $con->error;
}

endif;
 ?>
