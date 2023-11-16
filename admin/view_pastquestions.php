<?php
// include database
include('../components/database_con.php');

// sql
$sql = "SELECT * FROM questions";

// QUERY
$query = mysqli_query($dbcon, $sql);

// FETCH
$fetch = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Past Questions</title>
</head>
<body>

    <table class="table table-hover table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Course Name</th>
        <th scope="col">Qualification</th>
        <th scope="col">Level</th>
        <th scope="col">Year</th>
        <th scope="col">Question</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $count=1;
if ($fetch > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo '
        <tr>
            <th scope="row">' . $count . '</th>
            <td>' . $row['course_name'] . '</td>
            <td>' . $row['qualification'] . '</td>
            <td>' . $row['level'] . '</td>
            <td>' . $row['year'] . '</td>
            <td>' . $row['questions'] . '</td>
            <td>
                <a href="dashboard.php?page=edit_pastquestion&id=' .$row['id']. '">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
                <a href="dashboard.php?page=delete_pastquestion&id=' .$row['id']. '">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>';
        $count++;
    }
} else {
    echo "NO ADMIN REGISTERED";
}
    ?>
    </tbody>
    </table>
    
</body>
</html>