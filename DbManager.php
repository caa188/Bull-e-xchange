<?php 

include "User.php";

class DbManager
{
	var $host = "pluto.cse.msstate.edu";
	var $username = "dcsp06";
	var $password = "he15man";
	var $dbName = "dcsp06";
	var $connection;

    /*
     * connect()
     * Connects to database to allow reading and writing to database
     * */
	function connect()
	{
		 $con=mysqli_connect($this->host,$this->username,$this->password,$this->dbName);
		 if (mysqli_errno($con)) 
		 {
		 	echo ("Unable to connect to database.");
		 }
		 else
		 {
		 	$this->connection = $con;
		 	echo ("connection! to be removed");
		 }
	}

    /*
     * disconnect()
     * Disconnects from the database
     * */
    function disconnect()
    {

    }

    /*
     * insertUser()
     * Inserts a unique user and password into the database
     * */
	function insertUser($user, $password)
	{

		$email = mysqli_real_escape_string($this->connection, $user->email);
		$password = mysqli_real_escape_string($this->connection, $password);
		$password = md5($password);
		$firstName = mysqli_real_escape_string($this->connection, $user->firstName);
		$lastName = mysqli_real_escape_string($this->connection, $user->lastName);

		return mysqli_query($this->connection,"INSERT INTO User (emailaddress, firstname, lastname, password)
          VALUES ('".$email."','".$firstName."','".$lastName."','".$password."')");
	}

    /*
     * checkUser()
     * Checks the username and password with the database. Returns true if a
     * match is found and false if no match is found.
     * */
    function checkUser($user, $password)
    {

        $sql = mysqli_query($this->connection, "SELECT * FROM Users WHERE
          emailaddress = '$user->email'");
    }

    /*
     * checkUserStatus()
     * Checks to see if the user is active or not and returns the boolean value
     * */
    function checkUserStatus($user)
    {

    }

    /*
     * changeUserStatus()
     * Changes the isActive status of a user to true
     * */
    function changeUserStatus($user)
    {

    }

    /*
     * insertListing()
     * Inserts a listing into the database
     * */
    function insertListing($listing)
    {

    }

    /*
     * changeListing()
     * Edits the current info saved in the database for a specific listing
     * */
    function changeListing($listing)
    {

    }

    /*
     * getListings()
     * Gets all the listings currently in the database to send to the Table to
     * be displayed
     * */
    function getListings()
    {

    }

    /*
     * deleteListing()
     * Deletes the specified listing from the database
     * */
    function deleteListing($listing)
    {

    }

}

?>

