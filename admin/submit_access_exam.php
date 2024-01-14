<?php
if(isset($_POST['submit'])){
// include database connection
include '../components/database_con.php';

// get variables
$course_name=$_POST['course_name'];
$qualification=$_POST['qualification'];
$year=$_POST['year'];

    
$uploadDirectory = "../uploaded_questions/";
$uploadedFile = $_FILES['uploaded_file']['name'];

// Validate file upload
if (empty($uploadedFile)) {
    echo "Error: Question file not uploaded";
    // You might want to redirect or exit here, depending on your application logic.
} else {
    // Validate file type if needed (e.g., allow only certain extensions)
    $allowedExtensions = array("pdf", "doc", "docx");
    $fileExtension = pathinfo($uploadedFile, PATHINFO_EXTENSION);

    if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
        echo "Error: Invalid file type. Allowed types: " . implode(", ", $allowedExtensions);
        // You might want to redirect or exit here, depending on your application logic.
    } else {
        // Move the uploaded file to the target directory
        $uploadedFilePath = $uploadDirectory . basename($uploadedFile);
        move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadedFilePath);

        if ($dbcon->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Assuming $course_name, $qualification, $level, $year are previously defined
        $sql = "INSERT INTO access_exams(`course_name`, `qualification`, `year`, `question`) VALUES ('$course_name', '$qualification', '$year', '$uploadedFile')";
        $query = mysqli_query($dbcon, $sql);

        if ($query) {
            echo "Question file uploaded and data inserted successfully";
        } else {
            echo "Error: ";
        }
    }
}
}
?>