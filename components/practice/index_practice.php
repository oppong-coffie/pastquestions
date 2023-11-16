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
    <title>Document</title>
</head>
<body>

<div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
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
                                                    <div class="ml-auto badge badge-pill badge-danger">1000+</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-container">

                        <div class="row main-content">
                            
                            <div id="javaDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom" id="cardjava">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2012 - 2022</div>
                                            <div class="widget-subheading">
                                            <?php echo $fetch_java_count['COUNT(id)']; ?>    
                                            copies</div>
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
                                            <div class="widget-subheading"><?php echo $fetch_cpp_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>C + +</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="databaseDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-ripe-malin">
                                    <div class="widget-content-wrapper text-white" id="carddatabase">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php $fetch_database_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Database Concept</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="oracleDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-amy-crisp">
                                    <div class="widget-content-wrapper text-white"  id="cardoracle">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php $fetch_oracle_count['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Oracle</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="hciDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-happy-itmeo" id="cardhci">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2</div>
                                            <div class="widget-subheading">copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>H C I</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="pythonDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early" id="cardp">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2000 - 2023</div>
                                            <div class="widget-subheading"><?php echo $fetch_python_count['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Python</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        

                        </div>
                        
                     

                    </div>




                </div>

</html>