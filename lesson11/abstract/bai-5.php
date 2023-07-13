<?php
abstract class Database{
    abstract public function connect();
    abstract public function query();
    abstract public function disconnect();
}
class MySQLDatabase extends Database
{

}
class PostgreSQLDatabase extends Database
{
    
}