<?php
    session_start(); 
    include "connection/db_connection.php";
    $user=$_SESSION['user_ID'];
    if(!empty($user)){
        $getuserdetails = "SELECT * FROM `users` WHERE `user_ID` = '$user'";
        $resultuserdetails = mysqli_query($connection, $getuserdetails);
        while($row = mysqli_fetch_array($resultuserdetails)){
            $userID = base64_encode($row['user_ID']);
            $userProfile = $row['user_Profile'];
            $userFirstName = $row['user_FirstName'];
            $userMiddleName= $row['user_MiddleName'];
            $userLastName = $row['user_LastName'];
            $userEmail = $row['user_Email'];
            $userRole = $row['user_Role'];
        }
    }else{
        header("Location: ../login");
        exit();
    }
?>