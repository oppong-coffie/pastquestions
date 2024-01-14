<?php
SESSION_START();
$student_id=$_SESSION['id'];
$student_name=$_SESSION['name'];
$code=$_GET['code'];
$lecturer_id=$_GET['lecturer_id'];

// Validate and sanitize session variables
$useremail = isset($_SESSION['useremail']) ? $_SESSION['useremail'] : '';
$id = isset($_SESSION['id']) ? $_SESSION['id'] : '';

// Include the database connection file
include '../components/database_con.php';

// SQL to select data for questions
$sql_question = "SELECT * FROM assignments";

// Query the statement for questions
$query_question = mysqli_query($dbcon, $sql_question);

// SQL to select data for answers
$sql_ans = "SELECT * FROM answers WHERE student_id='" . mysqli_real_escape_string($dbcon, $id) . "'";

// Query the statement for answers
$query_ans = mysqli_query($dbcon, $sql_ans);

$count = 0;

// Compare each row in the answer table to the assignment table
while ($row_ans = mysqli_fetch_assoc($query_ans)) {
    // Reset the pointer for the assignments table to the beginning
    mysqli_data_seek($query_question, 0);

    while ($row_question = mysqli_fetch_assoc($query_question)) {
        if ($row_question['id'] === $row_ans['question_id'] && $row_question['answer'] === $row_ans['ans']) {
            $count += 1;
        }
    }
}

// Output the count or use it as needed
echo "Matching records count: $count";


$sql_scores = "INSERT INTO scores(student_id, student_name, lecturer_id, code, marks) VALUES ('$student_id', '$student_name', '$lecturer_id', '$code', '$count')";
$query_scores = mysqli_query($dbcon, $sql_scores);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
?>

</body>
</html>
