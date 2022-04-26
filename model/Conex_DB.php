<?php
class Database {

    private $link;   
    
    // May not need these, see updated __construct method
    private $host, $username, $password, $database;

    public function __construct(){
        $this->host        = '127.0.0.1';
        $this->username    = 'root';
        $this->password    = 'Password.1';
        $this->database    = 'SGOT';
        
        // Check connection (which also checks selection of database)

        $this->link = mysqli_connect($this->host, $this->username, $this->password, $this->database)
            OR die("There was a problem connecting to the database.");



        return true;
    }
   
    public function query($query) {
        $result = mysqli_query($this->link, $query);
        if (!$result) die('Invalid query. ');
        return $result;
    }
    
    // Close connection
    public function __destruct() {
        mysqli_close($this->link)
            OR die("There was a problem disconnecting from the database.");
    }

}
?>