<?php
session_start();
$_SESSION["Error"];
?>
    <html><head>
        <style type="text/css">
            body {background-color: maroon; font-family:Arial, Sans-Serif;}
            #container {width:510px;
                height: 550px;
                box-shadow : 10px 10px 5px #888888;
                border-radius: 12px;
                margin: auto ;}
            div{background-color: white;
                text-align: center;}
            form label {display:inline-block; width:140px;}
            label{color: rgb(153, 0, 0);}
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
        <form name="Login" action="Browsing.php"
              method="post" accept-charset="UTF-8">
            <div style="text-align: center;"><b style="font-weight: normal;" id="docs-internal-guid-d081147f-73a7-55d9-c5ab-16eb661328d1"><img src="https://lh6.googleusercontent.com/h3lug-OkR-84lfCWPOINXCc-pkPfm5GJM-aMO2cfLVxjcDN4Va1MunDy0I2k8Lw7H_j1XpinNfTJYmQPvj1Scx5urRcTbMPmozNtNvlbCIM6bp8iJFySNibM3doOGRNuMXDh" height="137" width="359"></b></div>
            <h1 style="text-align: center; color: rgb(153, 0, 0);">Log-In</h1>
            <div style="text-align: center;" class="line"><label style="color: rgb(153, 0, 0);" for="Email">E-Mail
                    Address : </label><input id="Email" type="email"></div>
            <div style="text-align: center;" class="line"><label style="color: rgb(153, 0, 0);" for="pwd">Password : </label><input id="pwd" type="password"></div>
            <div style="text-align: center;" class="line submit"><input value="Submit" type="submit"></div>
            <div style="text-align: center;"><a style="text-align: center;" href="sign-up.html">Sign-up
                    for an account!</a></div>
    </html>
<?php
if(isset($_SESSION["Error"])) {
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
    echo '<div style= "color: red;">'.$Errormsg;


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


$user = new User($email);

$userManager = new UserManager($user);
if (isset($_POST['Submit'])){
    if($userManager->doesNotExist($user))
    {
        $_SESSION["Error"] = 1;
        header("Location: login.php");
        exit();
    }

    if ($userManager->checkPassword($password))
    {
        if ($userManager->CheckUserStatus())
        {
            print "Success! Logging in...";
            header("Location: Browsing.php");
            exit();

        }

        else
        {
            $_SESSION["Error"] = 2;
            header("Location: login.php");
            exit();
        }
    }
    else
    {
        $_SESSION["Error"] = 3;
        header("Location: login.php");
        exit();
    }
}
?>