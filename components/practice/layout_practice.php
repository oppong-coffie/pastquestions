
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Questons</title>
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
                                <i class="metismenu-icon fa fa-home"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="./index.php?page=layout_practice&page2=java" class="mm-activee">
                                <i class="metismenu-icon fa fa-book"></i>
                                    Java
                                </a>
                            </li>
                            <li>
                                <a href="./index.php?page=layout_practice&page2=cpp" class="">
                                <i class="metismenu-icon fa fa-book"></i>
                                    C + +
                                </a>
                            </li>
                            <li>
                                <a href="./index.php?page=layout_practice&page2=python" class="">
                                <i class="metismenu-icon fa fa-book"></i>
                                    Python
                                </a>
                            </li>





                    </div>
                </div>
            </div>

            <!-- START:: main bodr -->
            <div class="app-main__outer">
                

            <?php


@$page=  $_GET['page2'];
if($page!="")
{
    if($page=="java")
{
    include('java_practice.php');
}

if($page=="cpp")
{
    include('cpp_practice.php');
}

if($page=="python")
{
    include('python_practice.php');
}
}
else
{
            
        include('index_practice.php');
}
?>

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
        </div>

        <script src="../Assets//jquery-3.6.0.min.js"></script>

        <script>
        $("#cardhci").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#cardp").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#cardoracle").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#cardcpp").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#carddatabase").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#cardjava").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });
        $("#x").on("click", function() {
            $("#detail-container").toggleClass("detail");
            console.log();
        });

    </script>
    <script type="text/javascript" src="../Assets/scripts/main.js"></script>
    <?php
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
        '<th scope=\"row\">" . $row_java['id'] . "</th>' +
        '<td>" . $row_java['qualification'] . "</td>' +
        '<td>" . $row_java['course_name'] . "</td>' +
        '<td>" . $row_java['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_java['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
}

echo "
        console.log('java2')
        tableHTML += '</tbody></table>';
        document.getElementById('btech').innerHTML = tableHTML;
    }
</script>";

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
        '<th scope=\"row\">" . $row_cpp['id'] . "</th>' +
        '<td>" . $row_cpp['qualification'] . "</td>' +
        '<td>" . $row_cpp['course_name'] . "</td>' +
        '<td>" . $row_cpp['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_cpp['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
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
        '<th scope=\"row\">" . $row_oracle['id'] . "</th>' +
        '<td>" . $row_oracle['qualification'] . "</td>' +
        '<td>" . $row_oracle['course_name'] . "</td>' +
        '<td>" . $row_oracle['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_oracle['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
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
        '<th scope=\"row\">" . $row_hci['id'] . "</th>' +
        '<td>" . $row_hci['qualification'] . "</td>' +
        '<td>" . $row_hci['course_name'] . "</td>' +
        '<td>" . $row_hci['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_hci['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-warning\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
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
        '<th scope=\"row\">" . $row_database['id'] . "</th>' +
        '<td>" . $row_database['qualification'] . "</td>' +
        '<td>" . $row_database['course_name'] . "</td>' +
        '<td>" . $row_database['year'] . "</td>' +
        '<td>' +
        '<a href=\"../uploaded_questions/" . $row_database['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate\">Download</button></a>' +
        '</td>' +
        '</tr>';
    ";
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
    '<th scope=\"row\">" . $row_python['id'] . "</th>' +
    '<td>" . $row_python['qualification'] . "</td>' +
    '<td>" . $row_python['course_name'] . "</td>' +
    '<td>" . $row_python['year'] . "</td>' +
    '<td>' +
    '<a href=\"../uploaded_questions/" . $row_python['questions'] . "\" download><button class=\"mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate\">Download</button></a>' +
    '</td>' +
    '</tr>';
";
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


<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>