<?php 

// include database
include './database_con.php';

// get the total number of java questions from table
// sql
$sql_java_count="SELECT COUNT(id) FROM practice_questions WHERE course_name ='java'";
$query_java_count=mysqli_query($dbcon, $sql_java_count);
$fetch_java_count=mysqli_fetch_assoc($query_java_count);

// get the total number of c++ questions from the questions table
// sql
$sql_cpp_count="SELECT COUNT(id) FROM practice_questions WHERE course_name ='cpp'";
$query_cpp_count=mysqli_query($dbcon, $sql_cpp_count);
$fetch_cpp_count=mysqli_fetch_assoc($query_cpp_count);

// get the Total number of python questions from the questions table
// sql
$sql_python_count="SELECT COUNT(id) FROM practice_questions WHERE course_name ='python'";
$query_python_count=mysqli_query($dbcon, $sql_python_count);
$fetch_python_count=mysqli_fetch_assoc($query_python_count);

// get the Total number of oracle questions from the questions table
// sql
$sql_oracle_count="SELECT COUNT(id) FROM practice_questions WHERE course_name ='oracle'";
$query_oracle_count=mysqli_query($dbcon, $sql_oracle_count);
$fetch_oracle_count=mysqli_fetch_assoc($query_oracle_count);

// get the Total number of hci questions from the questions table
// sql
$sql_hci_count="SELECT COUNT(id) FROM practice_questions WHERE course_name ='hci'";
$query_hci_count=mysqli_query($dbcon, $sql_hci_count);
$fetch_hci_count=mysqli_fetch_assoc($query_hci_count);

// get the Total number of database questions from the questions table
// sql
$sql_database_count="SELECT COUNT(id) FROM practice_questions WHERE course_name ='database'";
$query_database_count=mysqli_query($dbcon, $sql_database_count);
$fetch_database_count=mysqli_fetch_assoc($query_database_count);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Questions</title>
</head>
<body>

<div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                <img style="width: 3vw" src="../images/hp.png" alt="">
                                </div>
                                <div>Cloud9 Practice Questions
                                    <div class="page-title-subheading">Find all Your practice questions here with ease.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip"
                                    data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        More Menus
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="index.php?page=layout_pastquestions" class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Past Questions
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">500+</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index.php?page=layout_practice" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Practice Question
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">1000+</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="index.php?page=layout_access" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Access
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">A+</div>
                                                </a>
                                            </li>
                                           
                                         
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row main-content content-container">

                            
                            <div id="javaDiv" class="col-xl-4">
                                <a href="./index.php?page=layout_access&page2=maths.obj">
                                <div class="mb-3 widget-content bg-midnight-bloom" id="cardjava">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"><img style="width: 3vw" src="../images/calcus.png" alt=""></div>
                                            <div class="widget-subheading">
                                            <?php echo $fetch_java_count['COUNT(id)']; ?>    
                                            Questions</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Mathematics</span></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>

                            <div id="pythonDiv" class="col-xl-3">
                                    <a href="./index.php?page=layout_access&page2=science.obj">
                                <div class=" mb-3 widget-content bg-grow-early" id="cardp">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"><img style="width: 3vw" src="../images/sci.jpeg" alt=""></div>
                                            <div class="widget-subheading"><?php echo $fetch_python_count['COUNT(id)']; ?> Questions</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Science</span></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>

                            <div id="cppDiv" class="col-xl-3">
                                <a href="./index.php?page=layout_access&page2=english.obj">
                                <div class=" mb-3 widget-content bg-arielle-smile"  id="cardcpp">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"><img style="width: 3vw" src="../images/eng.png" alt=""></div>
                                            <div class="widget-subheading"><?php echo $fetch_cpp_count['COUNT(id)'] ?> Questions</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>English</span></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>

                          
                            
                            
                    </div>

                </div>
</body>
</html>