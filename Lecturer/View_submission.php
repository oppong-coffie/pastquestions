<?php
$code = $_GET['code'];

include '../components/database_con.php';

// SQL to select data for questions
$sql_questions = "SELECT * FROM `scores` WHERE code='$code' And lecturer_id='$lecturer_id'";

// Query the statement for questions
$query_questions = mysqli_query($dbcon, $sql_questions);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Assignment_list.css">
</head>
<body>

<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Student_id</th>
            <th scope="col">Marks</th>
        </tr>
    </thead>
    <tbody>

    <?php
    if (mysqli_num_rows($query_questions) > 0) {
        while ($row = mysqli_fetch_assoc($query_questions)) {
            echo '
            <tr>
                <th scope="row">' . $row['id'] . '</th>
                <td>' . $row['student_id'] . '</td>
                <td>' . $row['marks'] . '</td>
            </tr>';
        }
    } else {
        echo "<tr><td colspan='4'>NO SUBMITTION</td></tr>";
    }
?>

    </tbody>
</table>

</body>
</html>
