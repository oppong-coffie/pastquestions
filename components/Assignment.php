<?php
SESSION_START();
$course=$_GET['course'];
$code=$_GET['code'];
$lecturer_id=$_GET['lecturer_id'];
include '../components/database_con.php';

// SQL to select data
$sql = "SELECT * FROM assignments WHERE course = '$course' AND code = '$code'";

// Query the statement
$query = mysqli_query($dbcon, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="process_answers.php?code=<?php echo $code ?>&lecturer_id=<?php echo $lecturer_id ?>">
    <?php
        // Fetch the result as an associative array
        while ($result = mysqli_fetch_assoc($query)) {
            echo "<label>". $result['id'] . $result['question']."</label>
                A <input name='ans[".$result['id']."]' value='A' type='radio'/>
                B <input name='ans[".$result['id']."]' value='B' type='radio'/>
                C <input name='ans[".$result['id']."]' value='C' type='radio'/>
                D <input name='ans[".$result['id']."]' value='D' type='radio'/><br>";
        }
    ?>
    <button type="submit">Submit All</button>
</form>

</body>
</html>
