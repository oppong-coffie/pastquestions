<?php
include '../components/database_con.php';

// SQL to select data for questions
$sql_questions = "SELECT * FROM `started`";

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
            <th scope="col">Exam</th>
            <th scope="col">COURSE</th>
            <th scope="col">LECTURER</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $count = 1;
    if (mysqli_num_rows($query_questions) > 0) {
        while ($row = mysqli_fetch_assoc($query_questions)) {
            echo '
            <tr>
                <th scope="row">' . $count . '</th>
                <td>' . $row['title'] . '</td>
                <td>' . $row['course'] . '</td>
                <td>' . $row['lecturer_name'] . '</td>
                <td>
                    <a href="Assignment.php?course=' . $row['course'] . '&lecturer_id=' . $row['lecturer_id'] . '&code=' . $row['code'] . '">
                        <button type="button" class="btn btn-primary">Start Now</button>
                    </a>
                </td>
            </tr>';
            $count++;
        }
    } else {
        echo "<tr><td colspan='4'>NO ASSIGNMENT</td></tr>";
    }
?>

    </tbody>
</table>

</body>
</html>
