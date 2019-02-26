<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 11/2/2014
 * Time: 11:02 PM
 */

class Listing
{
    var $owner;
    var $title;
    var $details;
    var $type;
    var $status;
    var $listingID;

    public function Listing($owner,$title,$details,$type,$status,$listingID)
    {
        $this->owner = $owner;
        $this->title = $title;
        $this->details = $details;
        $this->type = $type;
        $this->status = $status;
        $this->listingID = $listingID;
    }

} 