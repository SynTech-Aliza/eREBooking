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

        $sqlgetusers = "SELECT * FROM `users`";
        $resultusers = mysqli_query($connection, $sqlgetusers);

        // Blank Message Value
        $message = '';

        // Random Password Generator
        function randomPassword($length = 10) {
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        // Add User Account
        if (isset($_POST['adduser'])){
            $username = $_POST['username'];
            $firstname = $_POST['firstname'];
            $middlename = $_POST['middlename'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $userrole = $_POST['userrole'];

            // Check User Account
            $checkuseraccount = "SELECT * FROM `users` WHERE `user_FirstName` = '$firstname' AND `user_MiddleName` = '$middlename' AND `user_LastName` = '$lastname'";
            $resultuseraccount = mysqli_query($connection, $checkuseraccount);
            if(mysqli_num_rows($resultuseraccount)>0){
                // Notification
                $message = '<div class="alert alert-danger text-white">User Account Exist! Please try it another one.</div>';
            }else{
                $sqlalter ="ALTER TABLE `users` AUTO_INCREMENT = 1";
                if($resultalter = mysqli_query($connection, $sqlalter)){
                    $insertuseraccount = "INSERT INTO `users`(`user_Profile`, `user_Username`, `user_Password`, `user_FirstName`, `user_MiddleName`, `user_LastName`, `user_Email`, `user_Status`, `user_Role`, `user_Registered`) VALUES ('default.png','$username','$password','$firstname','$middlename','$lastname','$email','1','$userrole',NOW())";
                    if($resultinsertuseraccount = mysqli_query($connection, $insertuseraccount)){
                        // Notification
                        $message = '<div class="alert alert-success text-white">User Account Successfully Created!</div>';
                    }
                }
            }
        }

        // Edit User
        if(isset($_GET['edituser'])){
            $edituser = $_GET['edituser'];
            $sqlgetuser = "SELECT * FROM `users` WHERE `user_ID` = '$edituser'";
            $resultuser = mysqli_query($connection, $sqlgetuser);
            while($row = mysqli_fetch_array($resultuser)){
                $userid = $row['user_ID'];
                $username = $row['user_Username'];
                $firstname = $row['user_FirstName'];
                $middlename = $row['user_MiddleName'];
                $lastname = $row['user_LastName'];
                $useremail = $row['user_Email'];
                $userrole = $row['user_Role'];
                $userstatus = $row['user_Status'];
            }

            // Update User Account
            if(isset($_POST['updateuser'])){
                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $userrole = $_POST['userrole'];
                $status = $_POST['status'];
                if(empty($status)){
                    $updateuseraccount = "UPDATE `users` SET `user_FirstName`='$firstname',`user_MiddleName`='$middlename',`user_LastName`='$lastname',`user_Email`='$email',`user_Status`='0',`user_Role`='$userrole' WHERE `user_ID` = '$edituser'";
                    if($resultuseraccount = mysqli_query($connection, $updateuseraccount)){
                        // Notification
                        $message = '<div class="alert alert-success text-white">User Account Successfully Updated!</div>';
                    }
                }else{
                    $updateuseraccount = "UPDATE `users` SET `user_FirstName`='$firstname',`user_MiddleName`='$middlename',`user_LastName`='$lastname',`user_Email`='$email',`user_Status`='1',`user_Role`='$userrole' WHERE `user_ID` = '$edituser'";
                    if($resultuseraccount = mysqli_query($connection, $updateuseraccount)){
                        $message = '<div class="alert alert-success text-white">User Account Successfully Updated!</div>';
                    }
                }
            }

            // Update User Account Password 
            if(isset($_POST['updatepassword'])){
                $password = md5($_POST['password']);
                $updatepassword = "UPDATE `users` SET `user_Password`='$password' WHERE `user_ID` = '$edituser'";
                if($resultpassword = mysqli_query($connection, $updatepassword)){
                    // Notification
                    $message = '<div class="alert alert-success text-white">User Account Successfully Updated!</div>';
                }
            }
        }
    }else{
        header("Location: ../login");
        exit();
    }
?>