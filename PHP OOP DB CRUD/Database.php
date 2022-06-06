<?php

class Database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "student_db";

    private $conn = false;
    private $result = array();
    private $mysqli = "";

    // connection 
    function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            $this->conn = true;

            // check error 
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
            }
        }
    }

    // check table exists
    private function is_table_exists($table)
    {
        $sql = "SHOW TABLES FROM $this->database LIKE '$table'";

        $tableExist = $this->mysqli->query($sql);

        if ($tableExist->num_rows) {
            return true;
        } else {
            array_push($this->result, $table . " is not exists in database!");
            return false;
        }
    }

    public function get_result()
    {
        $res_value = $this->result;
        $this->result = array();
        return $res_value;
    }

    // insert in database 
    public function insert($table, $params = array())
    {
        if ($this->is_table_exists($table)) {

            $table_cols = implode(", ", array_keys($params));
            $table_values = implode("', '", ($params));

            $sql  = "INSERT INTO $table ($table_cols) VALUES ('$table_values')";

            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->insert_id);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }
    }

    public function select($table, $rows = " * ", $join = null, $where = null, $order = null, $limit = null)
    {
        if ($this->is_table_exists($table)) {
            $sql = "SELECT $rows FROM $table";
        }

        if ($join) {
            $sql .= " JOIN $join";
        }

        if ($where) {
            $sql .= " WHERE $where";
        }

        if ($order) {
            $sql .= " ORDER BY $order";
        }

        if ($limit) {
            if (isset($_GET['page'])) {
                $page = $_GET["page"];
            } else {
                $page = 1;
            }

            $start = ($page - 1) * $limit;

            $sql .= " LIMIT $start, $limit";
        }


        $query = $this->mysqli->query($sql);
        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
        } else {
            array_push($this->result, $this->mysqli->error);
        }
    }

    public function sql($sql)
    {
        $query = $this->mysqli->query($sql);

        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
        } else {
            array_push($this->result, $this->mysqli->error);
        }
    }

    public function update($table, $params = array(), $where = null)
    {
        if ($this->is_table_exists($table)) {

            $arguments = array();
            foreach ($params as $key => $value) {
                $arguments[] = "$key = '$value'";
            }

            $sql = "UPDATE $table SET " . implode(", ", $arguments);

            // checking where clause 
            if ($where) {
                $sql .= " WHERE $where";
            }

            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
            } else {
                array_push($this->result, $this->mysqli->error);
            }
        }
    }

    public function delete($table, $where = null)
    {
        if ($this->is_table_exists($table)) {
            $sql = "DELETE FROM $table";
        }

        if ($where) {
            $sql .= " WHERE $where";
        }

        if ($this->mysqli->query($sql)) {
            array_push($this->result, $this->mysqli->affected_rows);
        } else {
            array_push($this->result, $this->mysqli->error);
        }
    }

    // pagination 
    public function pagination($table, $join = null, $where = null, $limit = null)
    {
        if ($this->is_table_exists($table)) {

            if ($limit) {
                $sql = "SELECT COUNT(*) FROM $table";

                if ($join) {
                    $sql .= " JOIN $join";
                }

                if ($where) {
                    $sql .= " WHERE $where";
                }

                $query = $this->mysqli->query($sql);

                $totalRecords = $query->fetch_array();
                $totalRecords = $totalRecords[0];

                $totalPages = ceil($totalRecords / $limit);

                // get page 
                $url = basename($_SERVER["PHP_SELF"]);

                // check page and get page number 
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                } else {
                    $page = 1;
                }

                $output = "<div class='pagination d-flex justify-center'>";

                // for previous page 
                if ($page > 1) {
                    $output .= "<span class='p-2 bg-light'> <a href='$url?page=" . ($page - 1) . "'> Prev </a></span>";
                }

                // get pagination 
                if ($totalRecords > $limit) {
                    for ($i = 1; $i <= $totalPages; $i++) {

                        // add class 
                        if ($i == $page) {
                            $class = "class='active'";
                        } else {
                            $class = "";
                        }
                        $output .= "<span class='p-2 bg-light'> <a $class href='$url?page=$i'> $i </a></span>";
                    }
                }

                // for next page 
                if ($totalPages > $page) {
                    $output .= "<span class='p-2 bg-light'> <a href='$url?page=" . ($page + 1) . "'> Next </a></span>";
                }
                $output .= "</div>";

                echo $output;
            }
        }
    }

    // close connection 
    function __destruct()
    {
        if ($this->conn)
            $this->mysqli->close();
    }
}
