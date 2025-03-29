<?php

     if(isset($_POST["Username"])) {
      	//Accept HTML Form Data
        $uname = $_POST["Username"];
        $email = $_POST["Email"];
        $pw = $_POST["Password"];

        $con = mysqli_connect("fdb1034.awardspace.net","4431646_mediamart","CoDNiki704");
        mysqli_select_db($con,"4431646_mediamart");

        //Perform SQL Operations
        $sql = "INSERT INTO userdata(username,email,pw) VALUES('$uname','$email','$pw')";
        $ret = mysqli_query($con, $sql);
        //echo "No of Records Inserted: $ret";

        if ($ret) {
          header("Location:index.html");
      } else {
          echo "Error: " . mysqli_error($con);
      }

        //Disconnect from Server
        mysqli_close($con);
}
?>