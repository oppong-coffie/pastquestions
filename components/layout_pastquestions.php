<?php 
// SESSION_START();
// $username = $_SESSION['username'];
// $id = $_SESSION['id'];

// include database
include './database_con.php';

// get the java data from the questions table
$sql_java="SELECT * FROM questions WHERE course_name ='java'";
$query_java=mysqli_query($dbcon, $sql_java);

// get the total number of java questions from table
$sql_java_count="SELECT COUNT(id) FROM questions WHERE course_name ='java'";
$query_java_count=mysqli_query($dbcon, $sql_java_count);
$fetch_java_count=mysqli_fetch_assoc($query_java_count);


// get the c++ data from the questions table
$sql_cpp="SELECT * FROM questions WHERE course_name ='cpp'";
$query_cpp=mysqli_query($dbcon, $sql_cpp);

// get the total number of c++ questions from the questions table
$sql_cpp_count="SELECT COUNT(id) FROM questions WHERE course_name ='cpp'";
$query_cpp_count=mysqli_query($dbcon, $sql_cpp_count);
$fetch_cpp_count=mysqli_fetch_assoc($query_cpp_count);


// get the AFRICAN STUDIES data from the questions table
$sql_africa="SELECT * FROM questions WHERE course_name ='african studies'";
$query_africa=mysqli_query($dbcon, $sql_africa);

// get the Total number of AFRICAN STUDIES questions from the questions table
$sql_africa_count="SELECT COUNT(id) FROM questions WHERE course_name ='african studies'";
$query_africa_count=mysqli_query($dbcon, $sql_africa_count);
$fetch_africa_count=mysqli_fetch_assoc($query_africa_count);


// get the COM. SKILLS data from the questions table
$sql_com="SELECT * FROM questions WHERE course_name ='com. skills'";
$query_com=mysqli_query($dbcon, $sql_com);

// get the Total number of Com. Skills questions from the questions table
$sql_com_count="SELECT COUNT(id) FROM questions WHERE course_name ='com. skills'";
$query_com_count=mysqli_query($dbcon, $sql_com_count);
$fetch_com_count=mysqli_fetch_assoc($query_com_count);


// get the HCI data from the questions table
$sql_hci="SELECT * FROM questions WHERE course_name ='hci'";
$query_hci=mysqli_query($dbcon, $sql_hci);

// get the Total number of hci questions from the questions table
$sql_hci_count="SELECT COUNT(id) FROM questions WHERE course_name ='hci'";
$query_hci_count=mysqli_query($dbcon, $sql_hci_count);
$fetch_hci_count=mysqli_fetch_assoc($query_hci_count);


// get the DATABASE data from the questions table
$sql_database="SELECT * FROM questions WHERE course_name ='database'";
$query_database=mysqli_query($dbcon, $sql_database);

// get the Total number of database questions from the questions table
$sql_database_count="SELECT COUNT(id) FROM questions WHERE course_name ='database'";
$query_database_count=mysqli_query($dbcon, $sql_database_count);
$fetch_database_count=mysqli_fetch_assoc($query_database_count);


// get the E. COMMERCE data from the questions table
$sql_ecom="SELECT * FROM questions WHERE course_name ='ecom'";
$query_ecom=mysqli_query($dbcon, $sql_ecom);

// get the Total number of E COMMERCE questions from the questions table
$sql_ecom_count="SELECT COUNT(id) FROM questions WHERE course_name ='ecom'";
$query_ecom_count=mysqli_query($dbcon, $sql_ecom_count);
$fetch_ecom_count=mysqli_fetch_assoc($query_ecom_count);


// get the PYTHON data from the questions table
$sql_python="SELECT * FROM questions WHERE course_name ='python'";
$query_python=mysqli_query($dbcon, $sql_python);

// get the Total number of Python questions from the questions table
$sql_python_count="SELECT COUNT(id) FROM questions WHERE course_name ='python'";
$query_python_count=mysqli_query($dbcon, $sql_python_count);
$fetch_python_count=mysqli_fetch_assoc($query_python_count);

// get the information Technology data from the questions table
$sql_infotech="SELECT * FROM questions WHERE course_name ='infotech'";
$query_infotech=mysqli_query($dbcon, $sql_infotech);

// get the Total number of Python questions from the questions table
$sql_infotech_count="SELECT COUNT(id) FROM questions WHERE course_name ='infotech'";
$query_infotech_count=mysqli_query($dbcon, $sql_infotech_count);
$fetch_infotech_count=mysqli_fetch_assoc($query_infotech_count);

// get the COMPUTER APPLICATION data from the questions table
$sql_comapp="SELECT * FROM questions WHERE course_name ='com app'";
$query_comapp=mysqli_query($dbcon, $sql_comapp);
// get the Total number of COMPUTER APPLICATION questions from the questions table
$sql_comapp_count="SELECT COUNT(id) FROM questions WHERE course_name ='com app'";
$query_comapp_count=mysqli_query($dbcon, $sql_comapp_count);
$fetch_comapp_count=mysqli_fetch_assoc($query_comapp_count);

// get the PROBABILITY AND STATISTICS data from the questions table
$sql_prob_stat="SELECT * FROM questions WHERE course_name ='prob & stat'";
$query_prob_stat=mysqli_query($dbcon, $sql_prob_stat);
// get the Total number of PROBABILITY AND STATISTICS questions from the questions table
$sql_prob_stat_count="SELECT COUNT(id) FROM questions WHERE course_name ='prob & stat'";
$query_prob_stat_count=mysqli_query($dbcon, $sql_prob_stat_count);
$fetch_prob_stat_count=mysqli_fetch_assoc($query_prob_stat_count);

// get the BASIC ELECTRONICS data from the questions table
$sql_basic="SELECT * FROM questions WHERE course_name ='basic electronics'";
$query_basic_stat=mysqli_query($dbcon, $sql_basic);
// get the Total number of BASIC ELECTRONICS questions from the questions table
$sql_basic_count="SELECT COUNT(id) FROM questions WHERE course_name ='basic electronics'";
$query_basic_count=mysqli_query($dbcon, $sql_basic_count);
$fetch_basic_count=mysqli_fetch_assoc($query_basic_count);

// get the PRINCIPLES OF PROGRAMING data from the questions table
$sql_principles="SELECT * FROM questions WHERE course_name ='principles'";
$query_principles=mysqli_query($dbcon, $sql_principles);
// get the Total number of PRINCIPLES OF PROGRAMING questions from the questions table
$sql_principles_count="SELECT COUNT(id) FROM questions WHERE course_name ='principles'";
$query_principles_count=mysqli_query($dbcon, $sql_principles_count);
$fetch_principles_count=mysqli_fetch_assoc($query_principles_count);

// get the ACCOUNTING1 data from the questions table
$sql_accounting1="SELECT * FROM questions WHERE course_name ='accounting1'";
$query_accounting1=mysqli_query($dbcon, $sql_accounting1);
// get the Total number of ACCOUNTING1 questions from the questions table
$sql_accounting1_count="SELECT COUNT(id) FROM questions WHERE course_name ='accounting1'";
$query_accounting1_count=mysqli_query($dbcon, $sql_accounting1_count);
$fetch_accounting1_count=mysqli_fetch_assoc($query_accounting1_count);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAST QUESTIONS</title>
    <link rel="stylesheet" href="../css/layout_past.css">
</head>
<body>
<div class="app-main">
            <div class="app-sidebar sidebar-shadow">               
              
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">I T</li>
                            <li>
                                <a href="./index.php?page=layout_pastquestions" class="mm-activee">
                                    <i class="metismenu-icon fa fa-home"></i>
                                    Home
                                </a>
                            </li>
                            <li id="javaDiv" class="hamburger hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardjava" class="mm-activee">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    Java
                                </a>
                            </li>
                            <li  id="cppDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardcpp" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    C + +
                                </a>
                            </li>
                            <li  id="hciDiv2" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardhci2" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    H C I
                                </a>
                            </li>
                            <li id="infocomDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardinfocom" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    African Studies
                                </a>
                            </li>
                            <li id="databaseDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="carddatabase" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    Database Concept
                                </a>
                            </li>
                            <li id="comskillsDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardcomskills" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    Com. Skills
                                </a>
                            </li>
                            <li id="ecomDiv2" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardecom2" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    E. Commerce
                                </a>
                            </li>
                            <li id="infotechDiv2" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardinfotech2" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    Information Technology
                                </a>
                            </li>
                            <li id="probDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardprob" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    Probability and Statistics
                                </a>
                            </li>
                            <li id="basicDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardbasic" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    Basic Electronics
                                </a>
                            </li>
                            <li id="principlesDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardprinciples2" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                    Principles of Programming
                                </a>
                            </li>
                            <li id="accountingDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardaccounting" class="">
                                    <i class="metismenu-icon fa fa-book"></i>
                                     Accounting 1
                                </a>
                            </li>

                    </div>
                </div>
            </div>

            <!-- START:: main body -->
            <div class="app-main__outer">
                
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div style="width:w; background-color: white; padding: 10px">
                                    <img style="width: 3vw" src="../images/hp.png" alt="">
                                </div>
                                <div>Cloud9 Past Questions
                                    <div class="page-title-subheading">Find all Your past questions here with ease.
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
                                                        Practice Questions
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
                                            <li id="xassignment" class="nav-item">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span class="cassignment">
                                                        Test
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">New</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-container">
                        <div class="row main-content">
                            
                            <div id="javaDiv2" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom" id="cardjava2">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2012 - 2022</div>
                                            <div class="widget-subheading">
                                                <?php echo $fetch_java_count['COUNT(id)']; ?>    
                                                copies
                                            </div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Java</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="cppDiv1" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile"  id="cardcpp2">
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

                            <div id="databaseDiv1" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-ripe-malin">
                                    <div class="widget-content-wrapper text-white" id="carddatabase3">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_database_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Database Concept</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="comDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-sunny-morning">
                                    <div class="widget-content-wrapper text-white"  id="cardcom">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_com_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Com. Skills</span></div>
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

                            <div id="infoDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early" id="cardinfo">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2000 - 2023</div>
                                            <div class="widget-subheading"><?php echo $fetch_africa_count['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>African Studies</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="infotechDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark" id="cardinfotech">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2000 - 2023</div>
                                            <div class="widget-subheading"><?php echo $fetch_infotech_count['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Information Technology</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="ecomDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-plum-plate">
                                    <div class="widget-content-wrapper text-white"  id="cardecom">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_ecom_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>E. Commerce</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="probDiv2" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-plum-plate">
                                    <div class="widget-content-wrapper text-white"  id="cardprob2">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_prob_stat_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Probability and Statistics</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="basicDiv2" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-plum-plate">
                                    <div class="widget-content-wrapper text-white"  id="cardbasic2">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_basic_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>BASIC ELECTRONICS</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="comappDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-plum-plate">
                                    <div class="widget-content-wrapper text-white"  id="cardcomapp">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_comapp_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Computer Application</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="accountingDiv2" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-plum-plate">
                                    <div class="widget-content-wrapper text-white"  id="cardaccounting2">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_accounting1_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Accounting 1</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="principlesDiv2" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-plum-plate">
                                    <div class="widget-content-wrapper text-white"  id="cardprinciples">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2001 - 2022</div>
                                            <div class="widget-subheading"><?php echo $fetch_principles_count['COUNT(id)'] ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Principles of Programming</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="detail-container" id="detail-container">
                            <?php
                                include './download.php'
                            ?>
                        </div>
                        
                        
                        <div class="detail-container assign" id="assignment-container">
                            <?php
                                include './Assignment_list.php'
                            ?>
                        </div>
                      

                    </div>

                </div>
                
                <!-- START:: Footer -->
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Cloud9
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Cloud9
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            About TeachTrUe
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <div class="badge badge-success mr-1 ml-0">
                                                <small>NEW</small>
                                            </div>
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END:: Footer -->

            </div>

            <script src="../Assets/jquery-3.6.0.min.js"></script>

        <script>
  
        //  Information Communication
        $("#cardinfo").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#cardinfocom").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
  
        //  COMPUTER APPLICATION
        $("#cardcomapp").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#cardapp2").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });

        // INFORMATION TECHNOLOGY
        $("#cardinfotech").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#cardinfotech2").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });

        // Communication Skills
        $("#cardcom").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#comskillsDiv").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });

        // Database Concept
        $("#carddatabase3").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#carddatabase").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });

        // C++
        $("#cardcpp2").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#cardcpp").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        
        // JAVA
        $("#cardjava").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#cardjava2").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        
        // HCI
        $("#cardhci").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#cardhci2").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        
        // E. COMMERCE
        $("#cardecom").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#cardecom2").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        
        // PROBABILITY AND STATISTICS
        $("#cardprob").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#cardprob2").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        
        // BASIC ELECTRONICS
        $("#cardbasic").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#cardbasic2").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        
        // PRINCIPLES OF PROGRAMMING
        $("#cardprinciples").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#cardprinciples2").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        
        // Accounting 1
        $("#cardaccounting").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });
        $("#cardaccounting2").on("click", function() {
            $("#detail-container").toggleClass("detail");
        });

// THE CLOSE X BUTTON
        $("#x").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });

        $("#xassignment").on("click", function() {
            $("#assignment-container").toggleClass("showdetail");
            console.log();
        });

        $("#xassignment2").on("click", function() {
            $("#assignment-container").toggleClass("showdetail");
            console.log();
        });

    </script>
    
        <script type="text/javascript" src="../Assets/scripts/main.js"></script>

    <?php
    $count=1;
    // START:: JAVA OUTPUT
    echo "<script>
    document.getElementById('javaDiv').onclick = javaitems;
    document.getElementById('javaDiv2').onclick = javaitems;
        function javaitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Action</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
    while ($row_java = mysqli_fetch_assoc($query_java)) {    
        echo "tableHTML += 
            '<tr>' +
            '<th scope=\"row\">" . $count . "</th>' +
            '<td>" . $row_java['qualification'] . "</td>' +
            '<td>" . $row_java['course_name'] . "</td>' +
            '<td>" . $row_java['year'] . "</td>' +
            '<td>" . $row_java['level'] . "</td>' +
            '<td>' +
            '<a href=\"../uploaded_questions/" . $row_java['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
            '</td>' +
            '</tr>';
        ";
        $count++;
    }   
    echo "
            tableHTML += '</tbody></table>';
            document.getElementById('btech').innerHTML = tableHTML;
        }
    </script>"; 
    // END:: JAVA OUTPUT
?>
    <?php
    $pcount=1;
    // START:: PROBABILITY AND STATISTICS
    echo "<script>
    document.getElementById('probDiv').onclick = probitems;
    document.getElementById('probDiv2').onclick = probitems;
        function probitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Action</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
    while ($row_prob_stat = mysqli_fetch_assoc($query_prob_stat)) {    
        echo "tableHTML += 
            '<tr>' +
            '<th scope=\"row\">" . $pcount . "</th>' +
            '<td>" . $row_prob_stat['qualification'] . "</td>' +
            '<td>" . $row_prob_stat['course_name'] . "</td>' +
            '<td>" . $row_prob_stat['year'] . "</td>' +
            '<td>" . $row_prob_stat['level'] . "</td>' +
            '<td>' +
            '<a href=\"../uploaded_questions/" . $row_prob_stat['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
            '</td>' +
            '</tr>';
        ";
        $pcount++;
    }   
    echo "
            tableHTML += '</tbody></table>';
            document.getElementById('btech').innerHTML = tableHTML;
        }
    </script>"; 
    // END:: PROBABILITY AND STATISTICS
?>

    <?php
    $pcount=1;
    // START:: ACCOUNTING 1
    echo "<script>
    document.getElementById('accountingDiv').onclick = accountingitems;
    document.getElementById('accountingDiv2').onclick = accountingitems;
        function accountingitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Action</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
    while ($row_accounting1 = mysqli_fetch_assoc($query_accounting1)) {    
        echo "tableHTML += 
            '<tr>' +
            '<th scope=\"row\">" . $pcount . "</th>' +
            '<td>" . $row_accounting1['qualification'] . "</td>' +
            '<td>" . $row_accounting1['course_name'] . "</td>' +
            '<td>" . $row_accounting1['year'] . "</td>' +
            '<td>" . $row_accounting1['level'] . "</td>' +
            '<td>' +
            '<a href=\"../uploaded_questions/" . $row_accounting1['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
            '</td>' +
            '</tr>';
        ";
        $pcount++;
    }   
    echo "
            tableHTML += '</tbody></table>';
            document.getElementById('btech').innerHTML = tableHTML;
        }
    </script>"; 
    // END:: ACCOUNTING 1
?>

    <?php
    $pcount=1;
    // START:: BASIC ELECTRONICS
    echo "<script>
    document.getElementById('basicDiv').onclick = basicitems;
    document.getElementById('basicDiv2').onclick = basicitems;
        function basicitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Action</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
    while ($row_basic_stat = mysqli_fetch_assoc($query_basic_stat)) {    
        echo "tableHTML += 
            '<tr>' +
            '<th scope=\"row\">" . $pcount . "</th>' +
            '<td>" . $row_basic_stat['qualification'] . "</td>' +
            '<td>" . $row_basic_stat['course_name'] . "</td>' +
            '<td>" . $row_basic_stat['year'] . "</td>' +
            '<td>" . $row_basic_stat['level'] . "</td>' +
            '<td>' +
            '<a href=\"../uploaded_questions/" . $row_basic_stat['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
            '</td>' +
            '</tr>';
        ";
        $pcount++;
    }   
    echo "
            tableHTML += '</tbody></table>';
            document.getElementById('btech').innerHTML = tableHTML;
        }
    </script>"; 
    // END:: BASIC ELECTRONICS
?>


    <?php
    $pcount=1;
    // START:: PRINCIPLES OF PROGRAMMING
    echo "<script>
    document.getElementById('principlesDiv').onclick = principlesitems;
    document.getElementById('principlesDiv2').onclick = principlesitems;
        function principlesitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Action</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
    while ($row_principles = mysqli_fetch_assoc($query_principles)) {    
        echo "tableHTML += 
            '<tr>' +
            '<th scope=\"row\">" . $pcount . "</th>' +
            '<td>" . $row_principles['qualification'] . "</td>' +
            '<td>" . $row_principles['course_name'] . "</td>' +
            '<td>" . $row_principles['year'] . "</td>' +
            '<td>" . $row_principles['level'] . "</td>' +
            '<td>' +
            '<a href=\"../uploaded_questions/" . $row_principles['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
            '</td>' +
            '</tr>';
        ";
        $pcount++;
    }   
    echo "
            tableHTML += '</tbody></table>';
            document.getElementById('btech').innerHTML = tableHTML;
        }
    </script>"; 
    // END:: PRINCIPLES OF PROGRAMMING
?>

<?php

    // START:: INFORMATION TECHNOLOGY OUTPUT
    $count=1;
    echo "<script>
    document.getElementById('infotechDiv').onclick = infotechitems;
    document.getElementById('infotechDiv2').onclick = infotechitems;
        function infotechitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Action</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
    while ($row_infotech = mysqli_fetch_assoc($query_infotech)) {    
        echo "tableHTML += 
            '<tr>' +
            '<th scope=\"row\">" . $count . "</th>' +
            '<td>" . $row_infotech['qualification'] . "</td>' +
            '<td>" . $row_infotech['course_name'] . "</td>' +
            '<td>" . $row_infotech['year'] . "</td>' +
            '<td>" . $row_infotech['level'] . "</td>' +
            '<td>' +
            '<a href=\"../uploaded_questions/" . $row_infotech['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
            '</td>' +
            '</tr>';
        ";
        $count++;
    }   
    echo "
            tableHTML += '</tbody></table>';
            document.getElementById('btech').innerHTML = tableHTML;
        }
    </script>"; 
    // END:: INFORMATION TECHNOLOGY OUTPUT
?>

<?php

$count=1;
    // START:: African Studies OUTPUT
    echo "<script>
    document.getElementById('infoDiv').onclick = infoDivitems;
    document.getElementById('infoDiv').onclick = infoDivitems;
        function infoDivitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Action</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
        while ($row_africa = mysqli_fetch_assoc($query_africa)) {
            echo "tableHTML += 
                '<tr>' +
                '<th scope=\"row\">" . $count . "</th>' +
                '<td>" . $row_africa['qualification'] . "</td>' +
                '<td>" . $row_africa['course_name'] . "</td>' +
                '<td>" . $row_africa['year'] . "</td>' +
                '<td>" . $row_africa['level'] . "</td>' +
                '<td>' +
                '<a href=\"../uploaded_questions/" . $row_africa['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
                '</td>' +
                '</tr>';
            ";
            $count++;
        }
        echo "
                tableHTML += '</tbody></table>';
                document.getElementById('btech').innerHTML = tableHTML;
            }
        </script>";
    // END:: African Studies OUTPUT
?>


<?php
// START:: C++ OUTPUT
$count = 1;
echo "<script>
    document.getElementById('cppDiv1').onclick = cppitems;
    document.getElementById('cppDiv').onclick = cppitems;
    function cppitems() {
        console.log('c++')
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Actionss</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
while ($row_cpp = mysqli_fetch_assoc($query_cpp)) {
    echo "tableHTML += 
        '<tr>' +
        '<th scope=\"row\">" . $count . "</th>' +
        '<td>" . $row_cpp['qualification'] . "</td>' +
        '<td>" . $row_cpp['course_name'] . "</td>' +
        '<td>" . $row_cpp['year'] . "</td>' +
        '<td>" . $row_cpp['level'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_cpp['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
    $count++;
}
echo "
        tableHTML += '</tbody></table>';
        document.getElementById('btech').innerHTML = tableHTML;
    }
</script>";
// END:: C++ OUTPUT
?>

<?php
// START:: Com. Skills OUTPUT
$count=1;
echo "<script>
    document.getElementById('comDiv').onclick = comskillsitems;
    function comskillsitems() {
        var tableHTML = '<table>' +
        '<thead>' +
        '<tr>' +
        '<th>ID</th>' +
        '<th>Qua</th>' +
        '<th>Course</th>' +
        '<th>Year</th>' +
        '<th>Type</th>' +
        '<th>Actionss</th>' +
        '</tr>' +
        '</thead>' +
        '<tbody>';
    ";
while ($row_com = mysqli_fetch_assoc($query_com)) {
echo "tableHTML += 
    '<tr>' +
    '<th scope=\"row\">" . $count . "</th>' +
    '<td>" . $row_com['qualification'] . "</td>' +
    '<td>" . $row_com['course_name'] . "</td>' +
    '<td>" . $row_com['year'] . "</td>' +
    '<td>" . $row_com['level'] . "</td>' +
    '<td>' +
    '<a href=\"../uploaded_questions/" . $row_com['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
    '</td>' +
    '</tr>';
";
$count++;
}
echo "
    tableHTML += '</tbody></table>';
    document.getElementById('btech').innerHTML = tableHTML;
    }
</script>";
// END:: Com. Skills OUTPUT
?>

<?php
// START:: hci OUTPUT
$count = 1;
echo "<script>
    document.getElementById('hciDiv').onclick = hciitems;
    document.getElementById('hciDiv2').onclick = hciitems;
    function hciitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Actionss</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
while ($row_hci = mysqli_fetch_assoc($query_hci)) {
    echo "tableHTML += 
        '<tr>' +
        '<th scope=\"row\">" . $count . "</th>' +
        '<td>" . $row_hci['qualification'] . "</td>' +
        '<td>" . $row_hci['course_name'] . "</td>' +
        '<td>" . $row_hci['year'] . "</td>' +
        '<td>" . $row_hci['level'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_hci['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
    $count++;
}
echo "
        tableHTML += '</tbody></table>';
        document.getElementById('btech').innerHTML = tableHTML;
    }
</script>";
// END:: hci OUTPUT
?>

<?php
// START:: Database OUTPUT
$databasecount=1;
echo "<script>
    document.getElementById('databaseDiv1').onclick = databaseitems;
    document.getElementById('databaseDiv').onclick = databaseitems;
    function databaseitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qua</th>' +
            '<th>Course</th>' +
            '<th>Year</th>' +
            '<th>Type</th>' +
            '<th>Actionss</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
while ($row_database = mysqli_fetch_assoc($query_database)) {
    echo "tableHTML += 
        '<tr>' +
        '<th scope=\"row\">" . $databasecount . "</th>' +
        '<td>" . $row_database['qualification'] . "</td>' +
        '<td>" . $row_database['course_name'] . "</td>' +
        '<td>" . $row_database['year'] . "</td>' +
        '<td>" . $row_database['level'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_database['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
    $databasecount++;
}
echo "
        tableHTML += '</tbody></table>';
        document.getElementById('btech').innerHTML = tableHTML;

    }
</script>";
// END:: Database OUTPUT
?>

<?php
// START:: COMPUTER APPLICATION
$comappcount = 1;
echo "<script>
    document.getElementById('comappDiv').onclick = comappitems;
    document.getElementById('comappDiv2').onclick = comappitems;
    function comappitems() {
        var tableHTML = '<table>' +
        '<thead>' +
        '<tr>' +
        '<th>ID</th>' +
        '<th>Qualification</th>' +
        '<th>Course</th>' +
        '<th>Year</th>' +
        '<th>Type</th>' +
        '<th>Actionss</th>' +
        '</tr>' +
        '</thead>' +
        '<tbody>';
    ";
while ($row_comapp = mysqli_fetch_assoc($query_comapp)) {
echo "tableHTML += 
    '<tr>' +
    '<th scope=\"row\">" . $comappcount . "</th>' +
    '<td>" . $row_comapp['qualification'] . "</td>' +
    '<td>" . $row_comapp['course_name'] . "</td>' +
    '<td>" . $row_comapp['year'] . "</td>' +
    '<td>" . $row_comapp['level'] . "</td>' +
    '<td>' +
    '<a href=\"../uploaded_questions/" . $row_comapp['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
    '</td>' +
    '</tr>';
";
$comappcount++;
}
echo "
    tableHTML += '</tbody></table>';
    document.getElementById('btech').innerHTML = tableHTML;

    }
</script>";
// END:: COMPUTER APPLICATION OUTPUT
?>

<?php
// START:: E. COMMERCE
echo "<script>
    document.getElementById('ecomDiv').onclick = ecomitems;
    document.getElementById('ecomDiv2').onclick = ecomitems;
    function ecomitems() {
        var tableHTML = '<table>' +
        '<thead>' +
        '<tr>' +
        '<th>ID</th>' +
        '<th>Qua</th>' +
        '<th>Course</th>' +
        '<th>Year</th>' +
        '<th>Type</th>' +
        '<th>Actionss</th>' +
        '</tr>' +
        '</thead>' +
        '<tbody>';
    ";
while ($row_ecom = mysqli_fetch_assoc($query_ecom)) {
echo "tableHTML += 
    '<tr>' +
    '<th scope=\"row\">" . $ecomcount . "</th>' +
    '<td>" . $row_ecom['qualification'] . "</td>' +
    '<td>" . $row_ecom['course_name'] . "</td>' +
    '<td>" . $row_ecom['year'] . "</td>' +
    '<td>" . $row_ecom['level'] . "</td>' +
    '<td>' +
    '<a href=\"../uploaded_questions/" . $row_ecom['question'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
    '</td>' +
    '</tr>';
";
$ecomcount++;
}
echo "
    tableHTML += '</tbody></table>';
    document.getElementById('btech').innerHTML = tableHTML;

    }
</script>";
// END:: E. COMMERCE OUTPUT
?>


?>

</body>
</html>