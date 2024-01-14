<?php
session_start();
$useremail = $_SESSION['useremail'];
$id = $_SESSION['id'];
$fullname = $_SESSION['name'];
$lecturer_id = $_GET['lecturer_id'];
$code = $_GET['code'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assuming you have a database connection in $dbcon
    include '../components/database_con.php';

    $sqlans = "SELECT * FROM answers WHERE student_id='$id'";
    $queryans = mysqli_query($dbcon, $sqlans);

    if (mysqli_num_rows($queryans) > 0) {
        echo '
        <script>
            alert("Answers already submitted");
            window.location.href = "./index.php?page=layout_pastquestions";
        </script>';
        exit; // Ensure that the script stops execution after the redirection
    } else {
        // Loop through the submitted answers
        foreach ($_POST['ans'] as $questionId => $selectedAnswer) {
            // Sanitize inputs to prevent SQL injection
            $questionId = mysqli_real_escape_string($dbcon, $questionId);
            $selectedAnswer = mysqli_real_escape_string($dbcon, $selectedAnswer);

            $sql = "INSERT INTO answers (fullname, code, student_id, lecturer_id, question_id, ans) VALUES ('$fullname', '$code', '$id', '$lecturer_id', '$questionId', '$selectedAnswer') 
            ON DUPLICATE KEY UPDATE ans = '$selectedAnswer'";
            
            $query = mysqli_query($dbcon, $sql);

            if (!$query) {
                die("Error: " . mysqli_error($dbcon));
            }
        }

        // Redirect after processing the form
        header("Location: View_result.php?code=$code&lecturer_id=$lecturer_id");
        exit; // Ensure that the script stops execution after the redirection
    }
}
?>
