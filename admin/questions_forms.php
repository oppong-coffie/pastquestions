<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/questions_forms.css">
</head>
<body>

    <div class="tab-content">
        <div class="">
            <div class="main-card">
                <div class="card-body">
                    <form action="submit_pastquestion.php" method="POST" enctype="multipart/form-data">
                        <div class="position-relative form-group">
                            <label for="courseSelect" class="">Course</label>
                            <select name="course_name" id="courseSelect" class="form-control">
                                <option value="">-- Select Course --</option>
                                <option value="java">JAVA</option>
                                <option value="cpp">C++</option>
                                <option value="hci">HCI</option>
                                <option value="database">DATABASE CONCEPT</option>
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="levelSelect" class="">Level</label>
                            <select name="level" id="levelSelect" class="form-control">
                                <option value="">-- Select Level --</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="yearSelect" class="">Year</label>
                            <select name="year">
                                <?php
                                    $currentYear = date("Y");
                                    for ($year = $currentYear; $year >= 2000; $year--) {
                                    echo "<option value=\"$year\">$year</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="qualificationSelect" class="">Qualification</label>
                            <select name="qualification" id="qualificationSelect" class="form-control">
                                <option value="">-- Select Qualification --</option>
                                <option value="Btech">Btech</option>
                                <option value="HND">H N D</option>
                                <option value="HND">Deploma</option>
                            </select>
                        </div>

                        <div class="position-relative form-group">
                            <label for="exampleFile" class="">Upload Question</label>
                            <input name="uploaded_file" id="exampleFile" type="file" class="form-control-file">
                            <small class="form-text text-muted">Upload the question in PDF or DOC format.</small>
                        </div>
        
                        <button name="submit" class="mt-1 btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>