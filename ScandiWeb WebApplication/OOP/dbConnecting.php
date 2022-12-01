<?php

class dbConnecting
{
     private $dbServerName;
     private $dbUserName ;
     private $dbPassword;
     private $dbName;

     protected function connect(): mysqli
     {
        $this->dbServerName="localhost";
        $this->dbUserName="root";
        $this->dbPassword="";
        $this->dbName="productbase";

       return new mysqli($this->dbServerName,$this->dbUserName,$this->dbPassword,$this->dbName);
     }
}
