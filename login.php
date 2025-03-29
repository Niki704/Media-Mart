<?php
session_start();

//DB Connection

if(isset($_POST["Username"])) {
    //Accept HTML Form Data(User Entered UName, Password)
    $un = $_POST["Username"];
    $pw = $_POST["Password"];

    $con = mysqli_connect("fdb1034.awardspace.net","4431646_mediamart","CoDNiki704");
    mysqli_select_db($con,"4431646_mediamart");

    $sql = "SELECT * FROM userdata WHERE username = '$un' AND pw = '$pw'";
    $result = mysqli_query($con, $sql);

    if($row = mysqli_fetch_array($result))
    {
        if(isset($_SESSION['un'])) {    //Session handling
            //Old session
            header("Location:index.html");
        }
        else {
            if($_POST['Username']==$un && $_POST['Password']==$pw) {
                $_SESSION['un']=$un;
                //New session
                header("Location:index.html");
            }
        }
    }
    else
    {
        echo "Invalid Username or Password";
    }

    mysqli_close($con);
}

//PHP Validations
/*
if(empty($_POST["Username"]) || empty($_POST["Password"])) {
    $empty_error = "Please enter correct username and password";
    echo $empty_error;
}

if(preg_match('/[A-Za-z]/', $_POST["Password"]) && preg_match('/[0-9]/', $_POST["Password"])) {
    $passcontent_error = "Password must contain both letters and numbers";
    echo $passcontent_error;
}
*/

?>