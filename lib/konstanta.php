<?php
/**
 * User: Freddy
 * Date: 2/24/14
 * Konstanta class
 *
 * @author Freddy
*/

class Konstanta {
    protected $userDB;
    protected $passwdDB;
    protected $dbName;
    protected $dbhost;

    function __construct()
    {
        //staging
        $this->userDB = "root";
        $this->passwdDB = "";
        $this->dbhost = "localhost";
        $this->dbName = "evangelion";
    }

    /**
     * @param string $dbName
     */
    public function setDbName($dbName)
    {
        $this->dbName = $dbName;
    }

    /**
     * @return string
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * @param string $dbhost
     */
    public function setDbhost($dbhost)
    {
        $this->dbhost = $dbhost;
    }

    /**
     * @return string
     */
    public function getDbhost()
    {
        return $this->dbhost;
    }

    /**
     * @param string $passwdDB
     */
    public function setPasswdDB($passwdDB)
    {
        $this->passwdDB = $passwdDB;
    }

    /**
     * @return string
     */
    public function getPasswdDB()
    {
        return $this->passwdDB;
    }

    /**
     * @param string $userDB
     */
    public function setUserDB($userDB)
    {
        $this->userDB = $userDB;
    }

    /**
     * @return string
     */
    public function getUserDB()
    {
        return $this->userDB;
    }

}
?>
