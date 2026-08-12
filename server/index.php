<?php
    session_start(); 
    include "connection/db_connection.php";
    $message = '';
    // Log In
    if (isset($_POST['login'])) {
        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
        $username = validate($_POST['username']);
        $password = md5(validate($_POST['password']));

        // Query
        $checkuseraccount = "SELECT * FROM `users` WHERE `user_Username` = '$username' AND `user_Password` = '$password'";
        $resultuseraccount = mysqli_query($connection, $checkuseraccount);
        if (mysqli_num_rows($resultuseraccount) > 0) {
            while($row = mysqli_fetch_array($resultuseraccount)){
                $_SESSION['user_ID'] = $row['user_ID'];
                $status =$row['user_Status'];
                if($status == 1){
                    header("Location: pages/dashboard");
                }else{
                    $message = '<div class="alert alert-danger text-white">This account is temporary Deactivated. Please contact the costumers service.</div>';
                }
            }
        }else{
            $message = '<div class="alert alert-danger text-white">Username and Password is incorrect. Please try it again.</div>';
        }
    }

    // Log Out
    if(isset($_GET['logout'])){
        session_destroy();
        header("Location: ../login");
        exit();
    }
?>