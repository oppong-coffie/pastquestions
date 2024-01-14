<?php
SESSION_START();
$name=$_SESSION['name'];
$lecturer_id=$_SESSION['id'];
$course=$_SESSION['course'];
$code = $_GET['code'];
include '../components/database_con.php';

// get variables
$course='cpp';
$lecturer_id='amofa';

$sql_started = "SELECT * FROM `started` WHERE code='$code' AND lecturer_id='$lecturer_id'";
$query_started = mysqli_query($dbcon, $sql_started);
if(mysqli_num_rows($query_started)<1){
    echo '
    <script>
        alert("Test not Started");
        window.location.href = "dashboard.php?page=assignments_list";
    </script>';
    exit; // Ensure that the script stops execution after the redirection
}
else{
    
// sql to insert data
$sql="DELETE FROM `started` WHERE code='$code' AND lecturer_id='$lecturer_id'";

// querry the statement
$query=mysqli_query($dbcon, $sql);

// condition to check successfull submition
if($query){
    echo '
    <script>
        alert("Test Ended Successfully");
        window.location.href = "dashboard.php";
    </script>';
    exit; // Ensure that the script stops execution after the redirection
}
else {
    echo '
    <script>
        alert("Error delating data");
        window.location.href = "dashboard.php";
    </script>';
    exit; // Ensure that the script stops execution after the redirection
}
}


?>