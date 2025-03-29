<?php
if(isset($_POST["name"])) {
    //Accept HTML Form Data
    $uname = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["message"];
    
    $con = mysqli_connect("fdb1034.awardspace.net","4431646_mediamart","CoDNiki704");
    mysqli_select_db($con,"4431646_mediamart");
    
    //Perform SQL Operations
    $sql = "INSERT INTO usercomments(uname,email,comment) VALUES('$uname','$email','$comment')";
    $ret = mysqli_query($con, $sql);
    //echo "No of Records Inserted: $ret";
    
    //Disconnect from Server
    mysqli_close($con);
}
?>