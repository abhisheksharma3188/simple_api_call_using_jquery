<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

$jwt=getallheaders()['Authorization'];

$number1=$_POST['number_1_input'];
$number2=$_POST['number_2_input'];

$addition=$number1+$number2;

$response_array=['response'=>'success','message'=>'Addition Successful.','addition'=>$addition,'jwt'=>$jwt];
$response_json=json_encode($response_array);
echo $response_json;
die;

?>
