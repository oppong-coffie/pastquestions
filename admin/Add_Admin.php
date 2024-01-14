<?php
include('../components/database_con.php');
if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['password'];
$password=$_POST['password'];

$result=mysqli_query($dbcon, "INSERT INTO admins(`fullName`, `email`, `password`) VALUES('$username', '$email', '$password')");

if ($result) {
    // Successful login or registration
    echo "<script>alert('You have Successfully registered');
    window.location='Admin_dashboard.php'
    </script>";
    exit; // Important to prevent further script execution
} else {
    // Failed login or registration
    $message = "<span style='color: red;'>Invalid login. Please try again.</span>";
}
};
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Admin</title>
    <link rel="stylesheet" href="../css/Add_Admin.css">

    <style>
        /* Define your CSS styles here */
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    
    <div class="contact-form">
	<img src="../images/hp.png" class="avatar">
	<form method="post" action="">
	<p><strong><center><font color = "white">TeachTrU Amin Registration </font></center></strong></p><br><br>

		<p>FULL NAME<input type="text" name="username" value="" placeholder="Username"></p>
        <p>EMAIL<input type="text" name="email" value="" placeholder="Email"></p>
        <p>PASSWORD<input type="password" name="password" value="" placeholder="Password"></p>

        <p class="submit"><input type="submit" name="submit" value="Regester"></p>
      </form>
    </div>
</body>
</html>