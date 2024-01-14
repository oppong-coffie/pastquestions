<?php
$code = $_GET['code'];
include '../components/database_con.php';

// SQL to select data
$sql = "SELECT * FROM assignments WHERE lecturer_id='$lecturer_id' AND code='$code'";

// Query the statement
$query = mysqli_query($dbcon, $sql);
echo $code;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="main-card mb-3 card">
        <a href="dashboard.php?page=add_assignment&code=<?php echo $code; ?> "><button>Add New Question</button></a>
            <a href="Delatetest_process.php"><button>Delate Test</button></a>
            
            
            <div class="card-body"><h5 class="card-title">Table striped</h5>
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Option A</th>
                            <th>Option B</th>
                            <th>Option C</th>
                            <th>Option D</th>
                            <th>Correct Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($result = mysqli_fetch_assoc($query)) {
                            echo '
                                <tr>
                                    <th scope="row">' . $result["id"] . '</th>
                                    <td>' . $result["question"] . '</td>
                                    <td>' . $result["optionA"] . '</td>
                                    <td>' . $result["optionB"] . '</td>
                                    <td>' . $result["optionC"] . '</td>
                                    <td>' . $result["optionD"] . '</td>
                                    <td>' . $result["answer"] . '</td>
                                    <td>
                                        <a href="edit.php?id=' . $result["id"] . '"><button type="primary">Edit</button></a>
                                        <a href="delete.php?id=' . $result["id"] . '"><button type="danger">Delete</button></a>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
</body>
</html>
