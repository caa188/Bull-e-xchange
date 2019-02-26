/**
 * Created by PhpStorm.
 * User: Cory
 * Date: 11/13/2014
 * Time: 2:51 PM
 */
<?php
session_start();
$_SESSION["Error"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
    <style type="text/css">
        body {font-family:Arial, Sans-Serif;}
        #container {width:350px; margin:0 auto;}
        form label {display:inline-block; width:140px;}
        form input[type="text"],
        form input[type="password"],
        form input[type="email"] {width:160px;}
        form .line {clear:both;}
        form .line.submit {text-align:right;}
    </style><title>Log-In</title>

    <meta charset="utf-8">
</head>
<body>
<br>
<div id="container">
    <div style="text-align: center;"></div>
    <form action="log-in.php" method="post" accept-charset="UTF-8">
        <div style="text-align: center;"><b style="font-weight: normal;" id="docs-internal-guid-d081147f-73a7-55d9-c5ab-16eb661328d1"><img src="https://lh6.googleusercontent.com/h3lug-OkR-84lfCWPOINXCc-pkPfm5GJM-aMO2cfLVxjcDN4Va1MunDy0I2k8Lw7H_j1XpinNfTJYmQPvj1Scx5urRcTbMPmozNtNvlbCIM6bp8iJFySNibM3doOGRNuMXDh" height="137" width="359"></b></div>
        <h1 style="text-align: center; color: rgb(153, 0, 0);">Log-In</h1>
        <div style="text-align: right;" class="line"><label style="color: rgb(153, 0, 0);" for="Email">E-Mail
                Address : </label><input id="Email" type="email"></div>
        <div style="text-align: right;" class="line"><label style="color: rgb(153, 0, 0);" for="pwd">Password : </label><input id="pwd" type="password"></div>
        <div style="text-align: center;" class="line submit"><input value="Submit" type="submit"></div>
        <div style="text-align: center;"><a style="text-align: center;" href="sign-up.html">Sign-up
                for an account!</a></div>
        <?php
        if($_SESSION["Error"]->isset) {
            $Errormsg = "";
            switch ($_SESSION["Error"]) {
                case 1:
                    $Errormsg = "Username does not exist in the database.";
                    break;
                case 2:
                    $Errormsg = "User has not verified their account.";
                    break;
                case 3:
                    $Errormsg = "User's entered password is incorrect.";
                    break;
            }
            echo <p > style="color:red"> $Errormsg</p >;
        }
?>
    </form>
</div>
</body></html>
<?php

include_once "UserManager.php";

$email = $_POST['Email'];
$password = $_POST['pwd'];
// 1 - Username does not exist in the database.
// 2 - User has not verified their account.
// 3 - User's entered password is incorrect.


//$user = new User($email);

//$userManager = new UserManager($user);

if($userManager->doesNotExist($user))
    {
        $_SESSION["Error"] = 1;
        header(log-in.php);
        exit();
    }

if ($userManager->checkPassword($password))
    {
        if ($userManager->isActive())
        {
            print "Success! Logging in...";
            //header(Browselistings.php??????????)

        }

        else
        {
            $_SESSION["Error"] = 2;
            header(log-in.php);
            exit();
        }
    }
    else
    {
        $_SESSION["Error"] = 3;
        header(log-in.php);
        exit();
    }
?>