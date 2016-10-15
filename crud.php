<!--
ads insert query ="
insert into ads
set
heading = 'Painter Required - 2',
small_desc ='Painter - 2',
complete_desc='We have requirement of 2 Painters for a UAE based company. ',
facility='Accomodation, Transportation, Insurace & Medical',
salary='1400'
";
-->
<?php
$host ="localhost";
$user="root";
$pass="integer7";
$db="db_manpower";
$con = new mysqli($host,$user,$pass,$db);
if($con->connect_errno){
  echo "Failed to connect " . $con->connect_error;
}else{
  echo '<script>console.log("success");</script>';
}
?>
