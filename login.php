<?php
session_start();
$usersFile = 'users.json';
$users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];


// Login Form Handling
if ( isset( $_POST['login'] ) ) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

//Validation
    if ( empty( $email ) || empty( $password ) ) {
        $warningMsg = "All the Fields are required.";
    } else {
        if (( isset ($users[$email] )) &&  ( isset ($users[$password] ))){
            $warningMsg = "Information Match.";
             
        }
        else {
            $warningMsg = "Information Not Match.";
        }

    }

}


?>


<!DOCTYPE html>
<html>

<head>
    <title>User Login Page</title>
    <?php
    include ("bootstrap.php");
    ?>
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col-md-8 mx-auto">
                <h3 class="text-center my-4">User Authentication and Role Management System</h3>
                <div class="card shadow-md">
                    <div class="row">
                        <h3 class="text-center mt-4">USER LOGIN</h3>
                    </div>
                    <div class="card-body">
                        <?php

                            if ( isset( $warningMsg ) ) {
                                echo "<p>$warningMsg</p>";
                            }
                        ?>
                        <form class="form" method="POST">
                            <input class="form-control" type="email" name="email" placeholder="Email"><br>
                            <input class="form-control" type="password" name="password" placeholder="Password"><br>
                            <input type="hidden" name="role" value="">
                            <input class="btn btn-success" type="submit" name="login" value="Login">

                            <a href="registration.php" class="btn btn-warning text-black">
                                Do not Have an Account?
                            </a>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>