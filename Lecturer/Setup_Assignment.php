<?php

if(isset($_POST['submit'])){
// include database connection
include '../components/database_con.php';

// get variables
$title=$_POST['title'];
$code=$_POST['code'];


// sql to insert data
$sql="INSERT INTO assignment_setup(`title`, `code`) VALUES('$title', 
'$code')";

// querry the statement
$query=mysqli_query($dbcon, $sql);

// condition to check successfull submition
if($query){
    echo "Assignment Setup is successfully submitted";
}
else {
    echo"Error submitting data";
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>

<form method='POST' action=''>
    <label for="">Assignment Title</label>
    <input name='title' type='text' />
    <label for="">Assignment Code</label>
    <input name='code' type='text' />
    <button name='submit' type='submit'>Submit</button>
</form>
    
</body>
</html>