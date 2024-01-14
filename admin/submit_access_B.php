<?php
if(isset($_POST['submit'])){
// include database connection
include '../components/database_con.php';

// get variables
$course_name=$_POST['course_name'];
$question=$_POST['question'];
$answer=$_POST['answer'];


// sql to insert data
$sql="INSERT INTO access_practice_questions(`course_name`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`, `explaination`) VALUES('$course_name', '$question', '.', '.', '.', '.', '$answer', '.')";

// querry the statement
$query=mysqli_query($dbcon, $sql);

// condition to check successfull submition
if($query){
    echo "Question is successfully submitted";
    header("Location:./dashboard.php?page=add_access.b");
}
else {
    echo"Error submitting data";
}
}
?>