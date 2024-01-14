<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/questions_forms.css">
    <title>Add Access Question</title>
</head>
<body>


                <form action="submit_access_B.php" method="POST" enctype="multipart/form-data">
                    <div class="position-relative form-group">
                        <label for="courseSelect" class="">Course</label>
                        <select name="course_name" id="courseSelect" class="form-control">
                            <option value="">-- Select Course --</option>
                            <option value="maths.b">MATHEMATICS</option>
                            <option value="eng.b">ENGLISY</option>
                            <option value="sci.b">SCIENCE</option>
                        </select>
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Question</label>
                        <textarea id="myTextArea" name="question" rows="4" cols="50" placeholder="Type the questions here"></textarea>
                    </div>

                    <div class="position-relative form-group">
                    <label for="myTextArea">Answer: </label>
                    <textarea id="myTextArea" name="answer" rows="4" cols="50" placeholder="Explain the answerand detail solution"></textarea>
                    </div>
                    
                    <button name="submit" class="mt-1 btn btn-primary">Submit</button>
                </form>
  
</body>
</html>