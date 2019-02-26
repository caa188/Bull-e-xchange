<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 11/2/2014
 * Time: 11:08 PM
 */

class Session
{
    var $currentUser; //User object
    var $status; //boolean, is session active

    /* *
     * Constructor
     * */
    public function Session($currentUser,$status)
    {
        $this->currentUser = $currentUser;
        $this->status = $status;
    }
    /* *
    * startSession()
    * Starts a session for the current user.
    * */
    public function startSession()
    {

    }
    /* *
    * endsSession()
    * Ends the current session
    * */
    public function endSession()
    {

    }
    /* *
    * isActive()
    * Returns false when the session is inactive and true once the session has been started.
    * */
    public function isActive()
    {

    }
} 