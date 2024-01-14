<?php
include '../components/database_con.php';

// SQL to select data for questions
$sql_questions = "SELECT * FROM `assignment_setup`";

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
            <th scope="col">Assignment Title</th>
            <th scope="col">Assignment Code</th>
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
                <td>' . $row['code'] . '</td>
                <td>
                    <a href="dashboard.php?page=view_assignments&code='.$row['code'].'">
                        <button type="button" class="btn btn-primary">View</button>
                    </a>
                    <a href="Start_process.php?code=' . $row['code'] . '&title=' . $row['title'] . '">
                        <button type="button" class="btn btn-primary">Start Now</button>
                    </a>
                    <a href="End_process.php?code=' . $row['code'] . '">
                        <button type="button" class="btn btn-primary">End Now</button>
                    </a>
                    <a href="dashboard.php?page=view_submission&code=' . $row['code'] . '">
                        <button type="button" class="btn btn-primary">View submission</button>
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
