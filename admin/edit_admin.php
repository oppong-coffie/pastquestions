<?php
$id = $_GET['id'];

include('../components/database_con.php');

$query = mysqli_query($dbcon, "SELECT * FROM admins WHERE id='$id'");
$row = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$result = mysqli_query($dbcon, "UPDATE admins SET `fullName` = '$username', `email` = '$email', `password` = '$password' WHERE id = 9");

if ($result) {
    // Successful login or registration
    echo "<script>alert('Admin Successfully updated');
    window.location='dashboard.php?page=view_admins'
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

		<p>FULL NAME<input type="text" name="username" value="<?php echo $row['fullName']?>" placeholder="Username"></p>
        <p>EMAIL<input type="text" name="email" value="<?php echo $row['email']?>" placeholder="Email"></p>
        <p>PASSWORD<input type="password" name="password" value="<?php echo $row['password']?>" placeholder="Password"></p>

        <p class="submit"><input type="submit" name="submit" value="Update"></p>
      </form>
    </div>
</body>
</html>