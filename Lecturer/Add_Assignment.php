<?php
$code = $_GET['code'];

if(isset($_POST['submit'])){
// include database connection
include '../components/database_con.php';

// get variables
$question=$_POST['question'];
$optionA=$_POST['optionA'];
$optionB=$_POST['optionB'];
$optionC=$_POST['optionC'];
$optionD=$_POST['optionD'];
$answer=$_POST['answer'];


// sql to insert data
$sql="INSERT INTO assignments(`lecturer_id`, `course`, `code`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`) VALUES('$lecturer_id', 
'$course', '$code', '$question', '$optionA', '$optionB', '$optionC', '$optionD', '$answer')";

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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>

<form method='POST' action=''>
    <label for="">Question</label>
    <input name='question' type='text' />
    <label for="">Option A</label>
    <input name='optionA' type='text' />
    <label for="">Option B</label>
    <input name='optionB' type='text' />
    <label for="">Option C</label>
    <input name='optionC' type='text' />
    <label for="">Option D</label>
    <input name='optionD' type='text' />
    <label for="">Ans</label>
    <input name='answer' type='text' />
    <button name='submit' type='submit'>Submit</button>
</form>
    
</body>
</html>