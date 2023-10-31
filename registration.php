<?php
session_start();
$usersFile = 'users.json';
$users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];

function saveUsers( $users, $file )
{
    file_put_contents( $file, json_encode( $users, JSON_PRETTY_PRINT ) );
}

// Registration Form Handling
if ( isset( $_POST['register'] ) ) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

//Validation
    if ( empty( $username ) || empty( $email ) || empty( $password ) ) {
        $warningMsg = "All the Fields are required.";
    } else {
        if ( isset( $users[$email] ) ) {
            $warningMsg = "Email already exists.";
        } else {
            $users[$email] = [
                'username' => $username,
                'password' => $password,
                'role'     => '',
            ];

            saveUsers( $users, $usersFile );
            $_SESSION['email'] = $email;
            $confirmMsg = "Registred Successfully.";
          

            
        }

    }

}


?>


<!DOCTYPE html>
<html>

<head>
    <title>User Registration Page</title>
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
                        <h3 class="text-center mt-4">USER REGISTRATION</h3>
                    </div>
                    <div class="card-body">
                        <?php

                            if ( isset( $warningMsg ) ) {
                                echo "<p>$warningMsg</p>";
                            }


                            if ( isset( $confirmMsg ) ) {
                                echo "<p>$confirmMsg</p>";
                            }

                        ?>
                        <form class="form" method="POST">
                            <input class="form-control" type="text" name="username" placeholder="Username"><br>
                            <input class="form-control" type="email" name="email" placeholder="Email"><br>
                            <input class="form-control" type="password" name="password" placeholder="Password"><br>
                            <input type="hidden" name="role" value="">
                            <input class="btn btn-primary" type="submit" name="register" value="Register">

                            <a href="login.php" class="btn btn-info text-black">
                                Already Have an Account?
                            </a>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>