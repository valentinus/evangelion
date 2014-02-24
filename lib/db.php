<?php
/**
 * User: Freddy
 * Date: 2/24/14
 *Database class
 *
 *@author Freddy
*/
class Database {
    protected $username;
    protected $password;
    protected $dbname;
    protected $db;
    protected $dbhost;

    function __construct() {
        $konstanta = new Konstanta();
        $this->username = $konstanta->getUserDB();
        $this->password = $konstanta->getPasswdDB();
        $this->dbname = $konstanta->getDbName();
        $this->dbhost = $konstanta->getDbhost();
    }

    function init() {
        try{
            $this->db = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->username,$this->password);
        } catch (PDOException $e) {
            mail("fkresna@gmail.com","PDO Error",$e);
        }

        return $this->db;
    }

    function destroy() {
        $this->db = null;
    }
}

?>
