<?php
SESSION_START();
if(isset($_POST['submit'])){
    
    include('./components/database_con.php');

    // GET VARIABLES
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Corrected SQL query with proper syntax and added a condition to check if the user exists
    $sql = "SELECT * FROM students WHERE (`email`='$email' OR `username`='$email') AND `password`='$password'";
    $query = mysqli_query($dbcon, $sql);
    $result = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) > 0) {
        // User exists and credentials are correct, redirect to index.php
        $_SESSION['useremail']=$result['email'];
        $_SESSION['id']=$result['id'];
        $_SESSION['name']=$result['fullName'];
        header('Location: ./components/index.php?page=layout_pastquestions');
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

    <style>
.myDiv {
   margin-top: 20px;
  color:steelblue;
  font-family:Georgia;
  background-color: transprant;    
  text-align: center;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/bootstrap/css/bootstrap.min.css">
		<script src="./Assets/bootstrap/js/jquery.min.js"></script>
		<script src="./Assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/icon.svg" type="image/x-icon"> 
    <link rel="stylesheet" href="./Assets/fontawesome/css/all.css">
    <title>Student Login</title>
    <link rel="stylesheet" href="./css/index_login.css">
</head>
<body>

<div class="myDiv">
  <h1><span style="color: #FFFFFFFF"><b>C</b></span>loud9 <span style="color: #F2AA4CFF"><b>T</b></span>each<span style="color: #F2AA4CFF"><b>T</b></span>r<span style="color: #F2AA4CFF"><b>U</b></span>e
</div>

<div class="container">
      <div class="card m-auto p-2">
        <div class="card-body">
          <form name="login-form" class="login-form" action="" method="POST">
            <div class="logo">
        			<img src="images/cccc.jpg" height="80px" width="80px"   class="profile"/>
        			<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
        		</div> <!-- logo class -->
         
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user text-white"></i></span>
              </div>
              <input name="email" type="text" class="form-control" placeholder="Email or User Name" onkeyup="validate();" required>
            </div> <!--input-group class -->
          <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key text-white"></i></span>
              </div>
              <input name="password" type="password" class="form-control" placeholder="password" onkeyup="validate();" required>
            </div> <!-- input-group class -->
           <div class="form-group">
              <button name="submit" class="btn btn-default btn-block btn-custom">Login</button>
            </div>
          </form><!-- form close -->
       </div> <!-- cord-body class -->
        <div class="card-footer">
          <div class="text-center">
            <a class="text-light" href="change_password.php">Forgot password?</a>
          </div>
        </div> <!-- cord-footer class -->
        Don't have an Account?<a href="./components/Student_Reg.php">Regester</a>
      </div> <!-- card class -->
    </div> 

</body>
</html>