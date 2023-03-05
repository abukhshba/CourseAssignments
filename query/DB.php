<?php


class DB{

    var object $connection;
    var string $sql;
    function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","course");
    } 
//SELECT FUNCTION
    function select(string $table,string $columns = "*"): object
    {
        $this->sql = "SELECT $columns FROM `$table` ";
        return $this;
    }

//DELETE FUNCTION
    function delete (string $table): object
    {
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }

//WHERE FUNCTION
    function where(string $column,string $value,string $operator = "="):object
    {
        $this->sql .= "WHERE `$column` $operator '$value'";
        return $this;
    }

    //OR FUNCTION
    function or(string $column,string $value,string $operator = "="):object
    {

        $this->sql .= "OR `$column` $operator '$value'";
        return $this;
    }

//AND FUNCTION
    function and(string $column,string $value,string $operator = "="):object
    {

        $this->sql .= "AND `$column` $operator '$value'";
        return $this;
    }

    //JOIN FUNCTION
    function join( string $columns = "*", string $table1 ,string $table2 ,string $table1_column_name ,string $table2_column_name){
        $this->sql = "SELECT $columns
                        FROM $table1
                        INNER JOIN $table2
                        ON $table1_column_name = $table2_column_name";
        return $this;

    }
     //EXCUTE FUNCTION
     function excute():int
     {
          mysqli_query($this->connection,$this->sql);
          return mysqli_affected_rows($this->connection);
 
     }

}