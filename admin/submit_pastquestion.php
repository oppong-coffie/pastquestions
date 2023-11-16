<?php
if(isset($_POST['submit'])){
// include database connection
include './database_con.php';

// get variables
$course_name=$_POST['course_name'];
$qualification=$_POST['qualification'];
$level=$_POST['level'];
$year=$_POST['year'];

    // Validate and sanitize the uploaded file
    $uploadDirectory = "../uploaded_questions/";
    $uploadedFile = $_FILES['uploaded_file']['name'];

    if (!empty($uploadedFile)) {
        $uploadedFilePath = $uploadDirectory . basename($uploadedFile);
        move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadedFilePath);
    } else { 
        echo "Question file not uploaded";
    }

// sql to insert data
$sql="INSERT INTO questions(`course_name`, `qualification`, `level`, `year`, `questions`) VALUES('$course_name', '$qualification', '$level', '$year', '$uploadedFile')";

// querry the statement
$query=mysqli_query($dbcon, $sql);

// condition to check successfull submition
if($query){
    echo "Question is successfully submitted";
}
else {
    echo"Error submitting data";
}
}
?>