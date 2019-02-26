<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 11/2/2014
 * Time: 11:16 PM
 */

class Reply
{
    var $subject;
    var $content;
    var $listing;

    /* *
     * sendReply()
     * Constructor that sends the inputted subject, content, and listing to the
     * specified User.
     * */
    public function sendReply($subject,$content,$listing)
    {
        $this->subject = $subject;
        $this->content = $content;
        $this->listing = $listing;
    }
} 