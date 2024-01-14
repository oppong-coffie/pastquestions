<?php
// include database
include('./database_con.php');

// sql
$sql = "SELECT * FROM practice_questions WHERE course_name='python'";

// Query
$query = mysqli_query($dbcon, $sql);

$result = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".././css/java_practice.css">
</head>
<body>
<div class="app-main__inner">

    <p class="text-xl font-bold text-center text-black">
        Python Programming MCQ (Multiple Choice Questions)
    </p>

    <?php
    $question_Number=1;
if ($result > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo '
        <div class="">
            <div class="question">'.$question_Number .'. '. $row["question"].'</div>
            <div class="option">a) '.$row["optionA"].'</div>
            <div class="option">b) '.$row["optionB"].'</div>
            <div class="option">c) '.$row["optionC"].'</div>
            <div class="option">d) '.$row["optionD"].'</div>
            <button class="view" data-target='.$row["id"].'>
                <i class="fa fa-eye"></i> View Answer
            </button>
            <div id='.$row["id"].' class="answeroff">
                <div class="text-black">Answer: <span class="font-semibold">'.$row["answer"].'</span> </div>
                <div class="text-slate-500"><span class="text-green-700 font-semibold">Explanation:</span>'.$row["explaination"].'.</div>
            </div>
            <p></p>
        </div>';
        $question_Number++;
    }
} else {
    echo 'NO QUESTIONS!!';
}
?>
        
</div>
    <script src="../Assets/jquery-3.6.0.min.js"></script>
    <script src="../js/java_practice_answers.js"></script>
</body>
</html>