<?php
class Agent{
// Connection instance
private $connection;
// table name
private $table_name = "agent";
// table columns
public $id;
public $idManager;
public $agentName;
public $phone;
public $email;
public $address;
public $longitude;
public $latitude;
public $totalVehicle;
public $rowStatus;
public $createdDate;
public $createdBy;
public $updatedDate;
public $updatedBy;
public function __construct($connection){
$this->connection = $connection;
}
//C
public function create(){}
//R
public function read(){}
//U
public function update(){}
//D
public function delete(){}    
}