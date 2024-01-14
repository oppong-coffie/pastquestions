<?php
$id = $_GET['id'];

include('../components/database_con.php');

$query = mysqli_query($dbcon, "SELECT * FROM practice_questions WHERE id='$id'");
$row = mysqli_fetch_assoc($query);

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
    
    // SQL to update data
$sql = "UPDATE practice_questions 
SET `course_name` = '$course_name', 
    `question` = '$question', 
    `optionA` = '$optionA', 
    `optionB` = '$optionB', 
    `optionC` = '$optionC', 
    `optionD` = '$optionD', 
    `answer` = '$answer', 
    `explaination` = '$explaination' 
WHERE `id` = '$id'";
    
    // querry the statement
    $query=mysqli_query($dbcon, $sql);
    
    // condition to check successfull submition
    if ($query) {
        // Successful login or registration
        echo "<script>alert('Question Successfully updated');
        window.location='dashboard.php?page=view_practicequestions';
        </script>";
        exit; // Important to prevent further script execution
    } else {
        // Failed login or registration
        $message = "<span style='color: red;'>Invalid login. Please try again.</span>";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/questions_forms.css">
    <title>Add Question</title>
</head>
<body>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="position-relative form-group">
                        <label for="courseSelect" class="">Course</label>
                        <select name="course_name" id="courseSelect" class="form-control">
                            <option value="<?php echo $row['question'] ?>"><?php echo $row['course_name'] ?></option>
                            <option value="java">JAVA</option>
                            <option value="cpp">C++</option>
                            <option value="python">Python</option>
                        </select>
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Question</label>
                        <textarea id="myTextArea" name="question" rows="4" cols="50"><?php echo $row['question'] ?></textarea>
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Option A</label>
                        <input value="<?php echo $row['optionA'] ?>" type="text" name="optionA">
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Option B</label>
                        <input value="<?php echo $row['optionB'] ?>" type="text" name="optionB">
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Option C</label>
                        <input value= "<?php echo $row['optionC'] ?>" type="text" name="optionC">
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Option D</label>
                        <input value = "<?php echo $row['optionD'] ?>" type="text" name="optionD">
                    </div>

                    <div class="position-relative form-group">
                        <label for="qualificationSelect" class="">Correct Answer</label>
                        <select name="answer" id="qualificationSelect" class="form-control">
                            <option value="<?php echo $row['answer'] ?>"><?php echo $row['answer'] ?></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <div class="position-relative form-group">
                    <label for="myTextArea">Explaination: </label>
                    <textarea id="myTextArea" name="explaination" rows="4" cols="50"><?php echo $row['explaination']; ?></textarea>
                    </div>
                    
                    <button name="submit" class="mt-1 btn btn-primary">Submit</button>
                </form>
  
</body>
</html>