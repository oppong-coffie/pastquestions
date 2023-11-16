<?php

$id = $_GET['id'];

// INCLUDE DATABASE
include('../components/database_con.php');

// GET THE PASTQUESTION DETAILS
 $sql_get = "SELECT * FROM questions WHERE `id`='$id'";
 $query_get = mysqli_query($dbcon, $sql_get);
 $row = mysqli_fetch_assoc($query_get);

if(isset($_POST['submit'])){
// include database connection

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

// sql to update data
$sql="UPDATE questions SET `course_name`='$course_name', `qualification` = '$qualification', `level` = '$level', `year` = '$year', `questions` = '$uploadedFile' WHERE id = '$id'";

// querry the statement
$query=mysqli_query($dbcon, $sql);

// condition to check successfull submition
if($query){
    // Successful login or registration
    echo "<script>alert('Past Question Successfully updated');
    window.location='dashboard.php?page=view_pastquestions'
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
    <title>Edit Pastquestion</title>
    <link rel="stylesheet" href="../css/questions_forms.css">
</head>
<body>

    <div class="tab-content">
        <div class="">
            <div class="main-card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="position-relative form-group">
                            <label for="courseSelect" class="">Course</label>
                            <select name="course_name" id="courseSelect" class="form-control">
                                <option value="<?php $row['course_name'] ?>"><?php echo $row['course_name'] ?></option>
                                <option value="java">JAVA</option>
                                <option value="cpp">C++</option>
                                <option value="hci">HCI</option>
                                <option value="database">DATABASE CONCEPT</option>
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="levelSelect" class="">Level</label>
                            <select name="level" id="levelSelect" class="form-control">
                                <option value="<?php $row['level'] ?>"><?php echo $row['level'] ?></option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="yearSelect" class="">Year</label>
                            <select name="year">
                                <option value="<?php $row['year'] ?>"><?php echo $row['year'] ?></option>
                                <?php
                                    $currentYear = date("Y");
                                    for ($year = $currentYear; $year >= 2000; $year--) {
                                    echo "<option value=\"$year\">$year</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="qualificationSelect" class="">Qualification</label>
                            <select name="qualification" id="qualificationSelect" class="form-control">
                                <option value="<?php $row['qualification'] ?>"><?php echo $row['qualification'] ?></option>
                                <option value="Btech">Btech</option>
                                <option value="HND">H N D</option>
                                <option value="HND">Deploma</option>
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="exampleFile" class="">Upload Question</label>
                            <input name="uploaded_file" id="exampleFile" type="file" class="form-control-file">
                            <small class="form-text text-muted">Upload the question in PDF or DOC format.</small>
                        </div>
        
                        <button name="submit" class="mt-1 btn btn-primary">Update</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>