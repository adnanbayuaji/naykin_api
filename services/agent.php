<?php
class Agent{
    // Connection instance
    private $connection;
    // table name
    private $table_name = "Agent";
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
    public $modifiedDate;
    public $modifiedBy;
    public function __construct($connection){
    $this->connection = $connection;
    }
    //C
    public function create(){
        $query = "INSERT INTO ". $this->table_name ." (IDManager, AgentName, Phone, Email, Address, Longitude, Latitude, TotalVehicle, RowStatus, CreatedDate, CreatedBy) VALUES (".$idManager.", ".$agentName.", ".$phone.", ".$email.", ".$address.", ".$longitude.", ".$latitude.", ".$totalVehicle.", 0, ".new Date().", ".$createdBy.")";

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        return $stmt;
    }
    //R
    public function read(){
        $query = "SELECT a.ID, a.IDManager, a.AgentName, a.Phone, a.Email, a.Address, a.Longitude, a.Latitude, a.TotalVehicle, a.RowStatus, a.CreatedDate, a.CreatedBy, a.ModifiedDate, a.ModifiedBy FROM" . $this->table_name . " a WHERE a.RowSatatus = '0'";

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        return $stmt;
    }
    //U
    public function update(){
        $query = "UPDATE ". $this->table_name ." SET IDManager = ".$idManager.", AgentName = ".$agentName.", Phone = ".$phone.", Email = ".$email.", Address = ".$address.", Longitude = ".$longitude.", Latitude = ".$latitude.", TotalVehicle = ".$totalVehicle.", ModifiedDate = ".new Date().", ModifiedBy = ".$modifiedBy." WHERE ID = ".$id;

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        return $stmt;
    }
    //D
    public function delete(){
        $query = "UPDATE ". $this->table_name ." SET RowStatus = '-1' WHERE ID = ".$id;

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        return $stmt;
    }    
}