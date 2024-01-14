<?php
SESSION_START();
$name=$_SESSION['name'];
$lecturer_id=$_SESSION['id'];
$course=$_SESSION['course'];
$title = $_GET['title'];
$code = $_GET['code'];
include '../components/database_con.php';

$sql_started = "SELECT * FROM `started` WHERE code='$code' AND lecturer_id='$lecturer_id'";
$query_started = mysqli_query($dbcon, $sql_started);
if(mysqli_num_rows($query_started)>0){
    echo '
    <script>
        alert("Test already Started");
        window.location.href = "dashboard.php?page=assignments_list";
    </script>';
    exit; // Ensure that the script stops execution after the redirection
}
else{
    
// sql to insert data
$sql="INSERT INTO `started`(`course`, `title`, `code`, `lecturer_id`, `lecturer_name`) VALUES('$course', '$title', '$code', '$lecturer_id', '$name')";

// querry the statement
$query=mysqli_query($dbcon, $sql);

// condition to check successfull submition
if($query){
    echo '
    <script>
        alert("Test Started");
        window.location.href = "dashboard.php";
    </script>';
    exit; // Ensure that the script stops execution after the redirection
}
else {
    echo '
    <script>
        alert("Error submitting data");
        window.location.href = "dashboard.php";
    </script>';
    exit; // Ensure that the script stops execution after the redirection
}
}


?>