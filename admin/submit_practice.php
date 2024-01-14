<?php
if(isset($_POST['submit'])){
// include database connection
include '../components/database_con.php';

// get variables
$course_name=$_POST['course_name'];
$question=$_POST['question'];
$optionA=$_POST['optionA'];
$optionB=$_POST['optionB'];
$optionC=$_POST['optionC'];
$optionD=$_POST['optionD'];
$answer=$_POST['answer'];
$explaination=$_POST['explaination'];


// sql to insert data
$sql="INSERT INTO practice_questions(`course_name`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`, `explaination`) VALUES('$course_name', '$question', '$optionA', '$optionB', '$optionC', '$optionD', '$answer', '$explaination')";

// querry the statement
$query=mysqli_query($dbcon, $sql);

// condition to check successfull submition
if($query){
    echo "Question is successfully submitted";
    header("Location:./dashboard.php?page=add_practicequestion");
}
else {
    echo"Error submitting data";
}
}
?>