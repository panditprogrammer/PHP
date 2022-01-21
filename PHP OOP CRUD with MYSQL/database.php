<?php

// custom db class
class Database
{
    private $server;
    private $username;
    private $password;
    private $dbname;

    protected function connect()
    {
        $this->server = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "oop_db";

        $connection = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        return $connection;
    }
}

// custom db  query class 
class Query extends Database
{
    public function getData($table, $field = "*", $condition = "", $order_by_field = "", $order_by_type = "desc", $limit = "")
    {
        $sql = "SELECT $field FROM $table ";
        // make sql 
        if ($condition != "") {
            $sql .= " WHERE ";
            $condition_count = count($condition);
            $i = 1;

            foreach ($condition as $key => $value) {
                if ($i == $condition_count)
                    $sql .= "$key='$value'";
                else
                    $sql .= "$key='$value' and ";
                $i++;
            }
        }

        // add in sql 
        if ($order_by_field != "") {
            $sql .= " ORDER BY $order_by_field $order_by_type ";
        }

        // add in sql 
        if ($limit != "") {
            $sql .= " LIMIT $limit ";
        }

        $result =  $this->connect()->query($sql);

        if ($result->num_rows > 0) {
            $arr = array();

            while ($row = $result->fetch_assoc()) {
                $arr[] = $row;
            }
            return $arr;
        } else {
            return 0;
        }
    }

    public function insertData($table, $fileds)
    {
        if ($fileds == "")
            return;
        // get fileds and value from array 
        foreach ($fileds as $key => $value) {
            $f[] = $key;
            $v[] = "'" . $value . "'";
        }

        $fileds = implode(",", $f);
        $value = implode(",", $v);

        // final query 
        $sql = "INSERT INTO $table ($fileds) VALUES ($value)";

        // execute 
        $result = $this->connect()->query($sql);
    }

    public function updateData($table, $condition, $where_field, $where_value)
    {
        if ($condition != "") {
            $sql = "UPDATE $table SET ";
            $num_condition  = count($condition);

            $i = 1;
            foreach ($condition as $key => $value) {

                if ($i == $num_condition)
                    $sql .= "$key='$value'";
                else
                    $sql .= "$key='$value',";
                $i++;
            }
            // final sql query 
            $sql .= " WHERE $where_field = '$where_value' ";
            $result = $this->connect()->query($sql);
        }
    }

    public function deleteData($table, $condition)
    {
        $sql = "DELETE FROM $table WHERE ";
        $condition_count = count($condition);
        $i = 1;
        // make sql 
        foreach ($condition as $key => $value) {
            if ($i == $condition_count)
                $sql .= "$key='$value'";
            else
                $sql .= "$key='$value'";
            $i++;
        }
        // final sql 
        $this->connect()->query($sql);
    }

    // filter string from get method 
    public function getSafeString($string)
    {
        if ($string != "")
            return mysqli_real_escape_string($this->connect(), $string);
    }
}
