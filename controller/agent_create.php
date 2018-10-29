<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/dbclass.php';

include_once '../services/agent.php';
try{
$dbclass = new DBClass();
$connection = $dbclass->getConnection();

$agent = new Agent($connection);

//$data = json_decode(file_get_contents("php://input"));

// $agent->idManager = $data->idManager;
// $agent->agentName = $data->agentName;
// $agent->phone = $data->phone;
// $agent->email = $data->email;
// $agent->address = $data->address;
// $agent->longitude = $data->longitude;
// $agent->latitude = $data->latitude;
// $agent->totalVehicle = $data->totalVehicle;
// $agent->createdBy = $data->createdBy;

$agent->idManager = $_POST["idManager"];
$agent->agentName = $_POST["agentName"];
$agent->phone = $_POST["phone"];
$agent->email = $_POST["email"];
$agent->address = $_POST["address"];
$agent->longitude = $_POST["longitude"];
$agent->latitude = $_POST["latitude"];
$agent->totalVehicle = $_POST["totalVehicle"];
$agent->createdBy = $_POST["createdBy"];

if($agent->create()){
    echo '{';
        echo '"message": "Product was created."';
    echo '}';
}
else{
    echo '{';
        echo '"message": "Unable to create product."';
    echo '}';
}
}
catch(Exception $e)
{
    echo $e;
}
?>