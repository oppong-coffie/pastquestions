<?php
if(isset($_POST['submit'])){
// include database connection
include '../components/database_con.php';

// get variables
$course_name=$_POST['course_name'];
$qualification=$_POST['qualification'];
$level=$_POST['level'];
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
        $stmt = $dbcon->prepare("INSERT INTO questions(`course_name`, `qualification`, `level`, `year`, `question`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $course_name, $qualification, $level, $year, $uploadedFile);

        if ($stmt->execute()) {
            echo "Question file uploaded and data inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $dbcon->close();
    }
}
}
?>