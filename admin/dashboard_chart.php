<?php 
// include database
include '../components/database_con.php';

// get the java data from the questions table
// sql
$sql_java="SELECT * FROM questions WHERE course_name ='java'";
$query_java=mysqli_query($dbcon, $sql_java);

// get the total number of java questions from table
// sql
$sql_java="SELECT COUNT(id) FROM questions WHERE course_name ='java'";
$query_java=mysqli_query($dbcon, $sql_java);
$fetch_java=mysqli_fetch_assoc($query_java);

// get the c++ data from the questions table
// sql
$sql_cpp="SELECT * FROM questions WHERE course_name ='c++'";
$query_cpp=mysqli_query($dbcon, $sql_cpp);

// get the total number of c++ questions from the questions table
// sql
$sql_cpp="SELECT COUNT(id) FROM questions WHERE course_name ='c++'";
$query_cpp=mysqli_query($dbcon, $sql_cpp);
$fetch_cpp=mysqli_fetch_assoc($query_cpp);

// get the python data from the questions table
// sql
$sql_python="SELECT * FROM questions WHERE course_name ='python'";
$query_python=mysqli_query($dbcon, $sql_python);

// get the Total number of python questions from the questions table
// sql
$sql_python="SELECT COUNT(id) FROM questions WHERE course_name ='python'";
$query_python=mysqli_query($dbcon, $sql_python);
$fetch_python=mysqli_fetch_assoc($query_python);

// get the oracle data from the questions table
// sql
$sql_oracle="SELECT * FROM questions WHERE course_name ='oracle'";
$query_oracle=mysqli_query($dbcon, $sql_oracle);

// get the Total number of oracle questions from the questions table
// sql
$sql_oracle="SELECT COUNT(id) FROM questions WHERE course_name ='oracle'";
$query_oracle=mysqli_query($dbcon, $sql_oracle);
$fetch_oracle=mysqli_fetch_assoc($query_oracle);

// get the hci data from the questions table
// sql
$sql_hci="SELECT * FROM questions WHERE course_name ='hci'";
$query_hci=mysqli_query($dbcon, $sql_hci);

// get the Total number of hci questions from the questions table
// sql
$sql_hci="SELECT COUNT(id) FROM questions WHERE course_name ='hci'";
$query_hci=mysqli_query($dbcon, $sql_hci);
$fetch_hci=mysqli_fetch_assoc($query_hci);

// get the php data from the questions table
// sql
$sql_php="SELECT * FROM questions WHERE course_name ='PHP'";
$query_php=mysqli_query($dbcon, $sql_php);

// get the Total number of php questions from the questions table
// sql
$sql_php="SELECT COUNT(id) FROM questions WHERE course_name ='PHP'";
$query_php=mysqli_query($dbcon, $sql_php);
$fetch_php=mysqli_fetch_assoc($query_php);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboard_chart.css">
</head>
<body>
<div class="row">
                            <div id="javaDiv" class="col-md-6 col-xl-5">
                                <div class="card mb-3 widget-content bg-vicious-stance" id="cardjava">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Courses</div>
                                            <div class="widget-subheading">I T Department</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>12</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="cppDiv" class="col-md-6 col-xl-5">
                                <div class="card mb-3 widget-content bg-vicious-stance"  id="cardcpp">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Questions</div>
                                            <div class="widget-subheading">Total Uploads</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>88</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>

<div class="empty"></div>

<div class="content-container">

<div class="row main-content">
                            
                            <div id="javaDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom" id="cardjava">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2012 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_java['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Java</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="cppDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile"  id="cardcpp">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_cpp['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>C + +</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="phpDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-ripe-malin">
                                    <div class="widget-content-wrapper text-white" id="cardphp">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_php['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>PHP</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="oracleDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-amy-crisp">
                                    <div class="widget-content-wrapper text-white"  id="cardoracle">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_oracle['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Oracle</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="dbmDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-happy-itmeo" id="carddbm">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_hci['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>HCI</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="pythonDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early" id="cardp">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2000 - 2023</div>
                                            <div class="widget-subheading"><?php echo $fetch_python['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Python</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        

                        </div>
                        </div>
    
</body>
</html>