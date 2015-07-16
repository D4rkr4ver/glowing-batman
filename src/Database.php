<?php

final class Database
{
    /**
     * @var \mysqli
     */
    private $connection;

    /**
     * @param string $host
     * @param string $user
     * @param string $password
     * @param string $database
     */
    public function connect($host, $user, $password, $database)
    {
        $this->connection = mysqli_connect($host, $user, $password, $database) or exit('Cannot connect');
        $this->error();
    }

    protected function error()
    {
        if (mysqli_errno($this->connection) > 0) {
            exit(mysqli_error($this->connection));
        }
    }

    /**
     * @param string $queryString
     *
     * @return bool|mysqli_result
     */
    protected function query($queryString)
    {
        $result = mysqli_query($this->connection, $queryString);
        $this->error();

        return $result;
    }

    /**
     * @param string $queryString
     *
     * @return array
     */
    public function select($queryString)
    {
        $result = $this->query($queryString);
        $this->error();

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    /**
     * @param string $queryString
     *
     * @return int|string
     */
    public function insert($queryString)
    {
        $this->query($queryString);
        $this->error();

        return mysqli_insert_id($this->connection);
    }

    /**
     * @param string $queryString
     *
     * @return int
     */
    public function update($queryString)
    {
        $this->query($queryString);
        $this->error();

        return mysqli_affected_rows($this->connection);
    }

    /**
     * @param string $queryString
     *
     * @return int
     */
    public function delete($queryString)
    {
        $this->query($queryString);
        $this->error();

        return mysqli_affected_rows($this->connection);
    }
}
