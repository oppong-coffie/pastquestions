<?php
$id = $_GET['id'];

// DATABASE CONNECTION
include('../components/database_con.php');

if(isset($_POST['confirm_delete'])){
    // SQL
    $sql = "DELETE FROM practice_questions WHERE id = '$id'";

    // QUERY
    $query = mysqli_query($dbcon, $sql);

    // CONDITION FOR SUCCESSFUL DELETION
    if($query){
        echo '
        <script>
        alert("Question successfully deleted");
        window.location.href = "dashboard.php?page=view_practicequestions";
        </script>
        ';
    } else {
        echo '
        <script>
        alert("Unable to delete admin");
        window.location.href = "dashboard.php?page=view_practicequestions";
        </script>
        ';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation Page</title>
    <link rel="stylesheet" href="../css/delete_admin.css">
</head>
<body>
    <div class="container">
        <img class="danger_pic" src="../images/danger.png" alt="">
        <h1>Confirm Deletion</h1>
        <p>Are you sure you want to delete this Question?</p>
        <form method="post">
            <input class="bt" type="submit" name="confirm_delete" value="Yes, Delete">
            <a class="cancel" href="dashboard.php?page=view_practicequestions">Cancel</a>
        </form>
    </div>
</body>
</html>
