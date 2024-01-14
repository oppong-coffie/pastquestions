<?php
include_once './database_con.php';
if(isset($_POST['submit'])){
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$department=$_POST['department'];
$password=$_POST['password'];

$result=mysqli_query($dbcon, "INSERT INTO students(`fullName`, `username`, `email`, `department`, `password`) VALUES('$fullname', '$username', '$email', '$department', '$password')");

if ($result) {
    // Successful registration
    echo "<script>
            alert('Hi ".$username.", your registration was successfully. Login to continue');
            window.location.href = '../index.php';
        </script>";
} else {
    // Failed registration
    $message = "<span style='color: red;'>Registration failed. Please try again.</span>";
}

};
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="../css/Student_Reg.css">

    <style>
        /* Define your CSS styles here */
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <?php echo $message; ?>
    </div>
    <div class="contact-form">
	<img src="../images/hp.png" class="avatar">
	<form method="post" action="">
	<p><strong><center><font color = "white">TEACH TRUE </font></center></strong></p><br><br>

		<p>FULL NAME<input type="text" name="fullname" value="" placeholder="Full name"></p>
		<p>USER NAME<input type="text" name="username" value="" placeholder="Username" required></p>
        <p>EMAIL<input type="text" name="email" value="" placeholder="Email"></p>
        <p>
            DEPARTMENT<br>
            <select name="department">
                <option type="text" name="it" value="it">Information Technology</option>
                <!-- <option type="text" name="statistic" value="statistics">Maths and Statistics</option> -->
            <select>
        </p>
        <br>
        <p>PASSWORD<input type="password" name="password" value="" placeholder="Password" required></p>

        <p class="submit"><input type="submit" name="submit" value="Regester"></p>
      </form>
    </div>
</body>
</html>
