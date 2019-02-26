<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 11/2/2014
 * Time: 8:52 PM
 */

class User
{
    var $email;
    var $firstName;
    var $lastName;

    /* *
     * Constructor
     * */
    function User($email,$firstName,$lastName)
    {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
} 

?>