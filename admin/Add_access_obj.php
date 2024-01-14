<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/questions_forms.css">
    <title>Add Access Question</title>
</head>
<body>


                <form action="submit_access.php" method="POST" enctype="multipart/form-data">
                    <div class="position-relative form-group">
                        <label for="courseSelect" class="">Course</label>
                        <select name="course_name" id="courseSelect" class="form-control">
                            <option value="">-- Select Course --</option>
                            <option value="maths.obj">MATHEMATICS</option>
                            <option value="eng.obj">ENGLISY</option>
                            <option value="sci.obj">SCIENCE</option>
                        </select>
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Question</label>
                        <textarea id="myTextArea" name="question" rows="4" cols="50" placeholder="Type the questions here"></textarea>
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Option A</label>
                        <input type="text" name="optionA">
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Option B</label>
                        <input type="text" name="optionB">
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Option C</label>
                        <input type="text" name="optionC">
                    </div>

                    <div class="position-relative form-group">
                        <label for="levelSelect" class="">Option D</label>
                        <input type="text" name="optionD">
                    </div>

                    <div class="position-relative form-group">
                        <label for="qualificationSelect" class="">Correct Answer</label>
                        <select name="answer" id="qualificationSelect" class="form-control">
                            <option value="">-- Select Correct Option --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <div class="position-relative form-group">
                    <label for="myTextArea">Explpaination: </label>
                    <textarea id="myTextArea" name="explaination" rows="4" cols="50" placeholder="Explain the reason for the correct answer"></textarea>
                    </div>
                    
                    <button name="submit" class="mt-1 btn btn-primary">Submit</button>
                </form>
  
</body>
</html>