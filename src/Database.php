<?php

class Database
{
    protected $con;

    public function connect($host, $user, $password, $database)
    {
        mysqli_connect($host, $user, $password, $database) or die('Cannot connect, n00b');
        $this->error();
    }

    protected function error()
    {
        if (mysqli_errno($this->con) > 0) {
            exit(mysqli_error($this->con));
        }
    }

    protected function query($query)
    {
        $result = mysqli_query($this->con, $query);
        $this->error();

        return $result;
    }

    public function select($query)
    {
        $result = $this->query($query);
        $this->error();

        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function insert($query)
    {
        $this->query($query);
        $this->error();

        return mysqli_insert_id($this->con);
    }

    public function update($query)
    {
        $this->query($query);
        $this->error();

        return mysqli_affected_rows($this->con);
    }

    public function delete($query)
    {
        $this->query($query);
        $this->error();

        return mysqli_affected_rows($this->con);
    }
}
