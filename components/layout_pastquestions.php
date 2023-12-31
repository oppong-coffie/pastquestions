<?php 

// include database
include './database_con.php';

// get the java data from the questions table
// sql
$sql_java="SELECT * FROM questions WHERE course_name ='java'";
$query_java=mysqli_query($dbcon, $sql_java);

// get the total number of java questions from table
// sql
$sql_java_count="SELECT COUNT(id) FROM questions WHERE course_name ='java'";
$query_java_count=mysqli_query($dbcon, $sql_java_count);
$fetch_java_count=mysqli_fetch_assoc($query_java_count);

// get the c++ data from the questions table
// sql
$sql_cpp="SELECT * FROM questions WHERE course_name ='cpp'";
$query_cpp=mysqli_query($dbcon, $sql_cpp);

// get the total number of c++ questions from the questions table
// sql
$sql_cpp_count="SELECT COUNT(id) FROM questions WHERE course_name ='cpp'";
$query_cpp_count=mysqli_query($dbcon, $sql_cpp_count);
$fetch_cpp_count=mysqli_fetch_assoc($query_cpp_count);

// get the python data from the questions table
// sql
$sql_python="SELECT * FROM questions WHERE course_name ='python'";
$query_python=mysqli_query($dbcon, $sql_python);

// get the Total number of python questions from the questions table
// sql
$sql_python_count="SELECT COUNT(id) FROM questions WHERE course_name ='python'";
$query_python_count=mysqli_query($dbcon, $sql_python_count);
$fetch_python_count=mysqli_fetch_assoc($query_python_count);

// get the oracle data from the questions table
// sql
$sql_oracle="SELECT * FROM questions WHERE course_name ='oracle'";
$query_oracle=mysqli_query($dbcon, $sql_oracle);

// get the Total number of oracle questions from the questions table
// sql
$sql_oracle_count="SELECT COUNT(id) FROM questions WHERE course_name ='oracle'";
$query_oracle_count=mysqli_query($dbcon, $sql_oracle_count);
$fetch_oracle_count=mysqli_fetch_assoc($query_oracle_count);

// get the hci data from the questions table
// sql
$sql_hci="SELECT * FROM questions WHERE course_name ='hci'";
$query_hci=mysqli_query($dbcon, $sql_hci);

// get the Total number of hci questions from the questions table
// sql
$sql_hci_count="SELECT COUNT(id) FROM questions WHERE course_name ='hci'";
$query_hci_count=mysqli_query($dbcon, $sql_hci_count);
$fetch_hci_count=mysqli_fetch_assoc($query_hci_count);

// get the database data from the questions table
// sql
$sql_database="SELECT * FROM questions WHERE course_name ='database'";
$query_database=mysqli_query($dbcon, $sql_database);

// get the Total number of database questions from the questions table
// sql
$sql_database_count="SELECT COUNT(id) FROM questions WHERE course_name ='database'";
$query_database_count=mysqli_query($dbcon, $sql_database_count);
$fetch_database_count=mysqli_fetch_assoc($query_database_count);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/layout_past.css">
</head>
<body>
<div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">I T</li>
                            <li>
                                <a href="./index.php?page=layout_pastquestions" class="mm-activee">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Home
                                </a>
                            </li>
                            <li id="javaDiv" class="hamburger hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardjava" class="mm-activee">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Java
                                </a>
                            </li>
                            <li  id="cppDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardcpp" class="">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    C + +
                                </a>
                            </li>
                            <li id="pythonDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="cardp" class="">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Python
                                </a>
                            </li>
                            <li id="databaseDiv" class="hamburger--elastic mobile-toggle-nav is-active">
                                <a id="carddatabase" class="">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Database Concept
                                </a>
                            </li>





                    </div>
                </div>
            </div>

            <!-- START:: main bodr -->
            <div class="app-main__outer">
                
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
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
                                                    <div class="ml-auto badge badge-pill badge-danger">1000+</div>
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
                                <div class="card mb-3 widget-content bg-midnight-bloom" id="cardjava2">
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

                            <div id="cppDiv2" class="col-md-6 col-xl-4">
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

                            <div id="databaseDiv" class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-ripe-malin">
                                    <div class="widget-content-wrapper text-white" id="carddatabase">
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
                                <div class="card mb-3 widget-content bg-grow-early" id="cardp2">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">2000 - 2023</div>
                                            <div class="widget-subheading"><?php $fetch_oracle_count['COUNT(id)']; ?> copies</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>Python</span></div>
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
                                            Footer Link 3
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <div class="badge badge-success mr-1 ml-0">
                                                <small>NEW</small>
                                            </div>
                                            Footer Link 4
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END:: Footer -->

            </div>

            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        

        <script src="../Assets//jquery-3.6.0.min.js"></script>

        <script>
        $("#cardhci").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        //  PYTHON
        $("#cardp2").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        // ORACLE
        $("#cardoracle").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        // CPP

        $("#cardcpp").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });

        $("#carddatabase").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        // JAVA
        $("#cardjava").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#cardjava2").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });

        $("#x").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });

    </script>
    <script type="text/javascript" src="../assets/scripts/main.js"></script>
    <?php
    $cppcount = 1;
    $javacount = 1;
    $oraclecount = 1;
    $hcicount = 1;
    $databasecount = 1;
    // START:: JAVA OUTPUT
echo "<script>
document.getElementById('javaDiv').onclick = javaitems;
function javaitems() {
        console.log('java')
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qualification</th>' +
            '<th>Course Name</th>' +
            '<th>Year</th>' +
            '<th>Action</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        
        ";

while ($row_java = mysqli_fetch_assoc($query_java)) {
    
    echo "tableHTML += 
        '<tr>' +
        '<th scope=\"row\">" . $javacount . "</th>' +
        '<td>" . $row_java['qualification'] . "</td>' +
        '<td>" . $row_java['course_name'] . "</td>' +
        '<td>" . $row_java['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_java['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
    $javacount++;
}

echo "
        console.log('java2')
        tableHTML += '</tbody></table>';
        document.getElementById('btech').innerHTML = tableHTML;
    }
</script>";
?>

<?php
// START:: C++ OUTPUT
echo "<script>
    document.getElementById('cppDiv').onclick = cppitems;
    function cppitems() {
        console.log('c++')
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qualification</th>' +
            '<th>Course Name</th>' +
            '<th>Year</th>' +
            '<th>Actionss</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
while ($row_cpp = mysqli_fetch_assoc($query_cpp)) {
    echo "tableHTML += 
        '<tr>' +
        '<th scope=\"row\">" . $cppcount . "</th>' +
        '<td>" . $row_cpp['qualification'] . "</td>' +
        '<td>" . $row_cpp['course_name'] . "</td>' +
        '<td>" . $row_cpp['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_cpp['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
    $cppcount++;
}
echo "
        tableHTML += '</tbody></table>';
        document.getElementById('btech').innerHTML = tableHTML;
    }
</script>";
// END:: C++ OUTPUT
?>

<?php
// START:: oracle OUTPUT
echo "<script>
    document.getElementById('oracleDiv').onclick = oracleitems;
    function oracleitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qualification</th>' +
            '<th>Course Name</th>' +
            '<th>Year</th>' +
            '<th>Actionss</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
while ($row_oracle = mysqli_fetch_assoc($query_oracle)) {
    echo "tableHTML += 
        '<tr>' +
        '<th scope=\"row\">" . $oraclecount . "</th>' +
        '<td>" . $row_oracle['qualification'] . "</td>' +
        '<td>" . $row_oracle['course_name'] . "</td>' +
        '<td>" . $row_oracle['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_oracle['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
    $oraclecount++;
}
echo "
        tableHTML += '</tbody></table>';
        document.getElementById('btech').innerHTML = tableHTML;
    }
</script>";
// END:: oracle OUTPUT
?>

<?php
// START:: hci OUTPUT
echo "<script>
    document.getElementById('hciDiv').onclick = hciitems;
    function hciitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qualification</th>' +
            '<th>Course Name</th>' +
            '<th>Year</th>' +
            '<th>Actionss</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
while ($row_hci = mysqli_fetch_assoc($query_hci)) {
    echo "tableHTML += 
        '<tr>' +
        '<th scope=\"row\">" . $hcicount . "</th>' +
        '<td>" . $row_hci['qualification'] . "</td>' +
        '<td>" . $row_hci['course_name'] . "</td>' +
        '<td>" . $row_hci['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_hci['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
    $hcicount++;
}
echo "
        tableHTML += '</tbody></table>';
        document.getElementById('btech').innerHTML = tableHTML;
    }
</script>";
// END:: hci OUTPUT
?>

<?php
// START:: Database Concept OUTPUT
echo "<script>
    document.getElementById('databaseDiv').onclick = databaseitems;
    function databaseitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qualification</th>' +
            '<th>Course Name</th>' +
            '<th>Year</th>' +
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
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_database['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
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
// END:: Database Concept OUTPUT
?>

<?php
// START:: python OUTPUT
echo "<script>
    document.getElementById('pythonDiv').onclick = pythonitems;
    function pythonitems() {
        var tableHTML = '<table>' +
            '<thead>' +
            '<tr>' +
            '<th>ID</th>' +
            '<th>Qualification</th>' +
            '<th>Course Name</th>' +
            '<th>Year</th>' +
            '<th>Actionss</th>' +
            '</tr>' +
            '</thead>' +
            '<tbody>';
        ";
while ($row_python = mysqli_fetch_assoc($query_python)) {
    echo "tableHTML += 
    '<tr>' +
    '<th scope=\"row\">" . $databasecount . "</th>' +
    '<td>" . $row_python['qualification'] . "</td>' +
    '<td>" . $row_python['course_name'] . "</td>' +
    '<td>" . $row_python['year'] . "</td>' +
    '<td>' +
    '<a href=\"../uploaded_questions/" . $row_python['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
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
// END:: python OUTPUT
?>

<?php
// // START:: hci OUTPUT
// echo "<script>
//     document.getElementById('pythonDiv').onclick = pythonitems;
//     function pythonitems() {
//         var tableHTML = '<table>' +
//             '<thead>' +
//             '<tr>' +
//             '<th>ID</th>' +
//             '<th>Qualification</th>' +
//             '<th>Course Name</th>' +
//             '<th>Year</th>' +
//             '<th>Actionss</th>' +
//             '</tr>' +
//             '</thead>' +
//             '<tbody>';
//         ";
// while ($row_python = mysqli_fetch_assoc($query_python)) {
//     echo "tableHTML += 
//     '<tr>' +
//     '<th scope=\"row\">" . $row_python['id'] . "</th>' +
//     '<td>" . $row_python['qualification'] . "</td>' +
//     '<td>" . $row_python['course_name'] . "</td>' +
//     '<td>" . $row_python['year'] . "</td>' +
//     '<td>' +
//     '<a href=\"../uploaded_questions/" . $row_python['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate\">Download</button></a>' +
//     '</td>' +
//     '</tr>';
// ";
// }
// echo "
//         tableHTML += '</tbody></table>';
//         document.getElementById('btech').innerHTML = tableHTML;
//     }
// </script>";
// // END:: hci OUTPUT
?>


<!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script type="text/javascript" src="../assets/scripts/main.js"></script> -->
</body>
</html>