<?php
SESSION_START();
if(isset($_POST['submit'])){
    
    include('../components/database_con.php');

    // GET VARIABLES
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Corrected SQL query with proper syntax and added a condition to check if the user exists
    $sql = "SELECT * FROM lecturers WHERE `email`='$email' AND `password`='$password'";
    $query = mysqli_query($dbcon, $sql);
    $result = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) > 0) {
        // User exists and credentials are correct, redirect to index.php
        $_SESSION['name']=$result['name'];
        $_SESSION['id']=$result['id'];
        $_SESSION['course']=$result['course'];
        header('Location: ./dashboard.php');
        exit(); // Make sure to exit after redirection
    }
    // If user doesn't exist or credentials are incorrect, show an error message
    else {
        echo "Invalid email or assword";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
            integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="shortcut icon" href="./images/icon.svg" type="image/x-icon">
        <title>Document</title>
        <link rel="stylesheet" href="./css/index_login.css">

    </head>

    <body>
        <div class="container">
            <div class="container1">
                <div class="card">
                    <div class="logo">
                        <img src="images/cccc.jpg" height="80px" width="80px" class="profile" />
                    </div>
                    <div class="card-body">
                        <h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
                        <form name="login-form" class="login-form" action="" method="POST">
                            <!-- logo class -->
                            <div class="input">
                                <label for="email">Email</label>
                                <input name="email" type="text" placeholder="Email" onkeyup="validate();" required>
                            </div>
                            <!--input-group class -->
                            <div class="input">
                                <label for="password">Password</label>
                                <input name="password" type="password" placeholder="Password" onkeyup="validate();"
                                    required>
                            </div> <!-- input-group class -->
                            <div class="submit">
                                <button name="submit" class="submit-btn">Login</button>
                            </div>
                        </form><!-- form close -->
                    </div> <!-- cord-body class -->
                    <div class="login-footer">
                        <div class="forgot">
                            <a class="text-light" href="change_password.php">Forgot password?</a>
                        </div>
                        <div class="register">
                            <p>Don't have an Account?</p>
                            <a href="./components/Student_Reg.php">Register</a>
                        </div>
                    </div> <!-- cord-footer class -->

                </div> <!-- card class -->
            </div>
        </div>
    </body>

</html>