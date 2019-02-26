<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 11/2/2014
 * Time: 9:08 PM
 */
 
include_once "DbManager.php";

class UserManager
{
    var $user;
    var $dbManager;

    /*
     * Constructor
     * Creates a UserManager to communicate with the database
     * */
    function UserManager($user)
    {
        $this->user = $user;
        $this->dbManager = new DbManager();
        $this->dbManager->connect();
    }

    /*
     * createUser()
     * Adds a user to the database
     * */
    function createUserWithPassword($password)
    {
        if ($this->dbManager) 
        {
            return $this->dbManager->insertUser($this->user, $password);
        }
    }

    /*
     * isActive()
     * Checks to see if the current user has verified their account through
     * email verification
     * */
    public function isActive()
    {

    }

    /*
     * doesNotExist()
     * Checks if the user already exists in the database
     * */
    public function doesNotExist($user)
    {
        if($this->dbManager)
        {
            return $this->dbManager->checkUser($user)
        }
    }

    /*
     * sentActReq()
     * Sends an activation email to the user
     * */
    public function sendActReq($user)
    {

    }

    /*
     * checkPassword()
     * Verifies a password matches the user
     * */
    public function checkPassword($password)
    {

    }

    /*
     * change_pw()
     * Allows a user to change their existing password
     * */
    public function change_pw()
    {

    }

} 

?>
