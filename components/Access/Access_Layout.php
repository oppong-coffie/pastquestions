
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Questons</title>
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
                                <a href="./index.php?page=layout_access&page2=maths.obj" class="mm-activee">
                                <i class="metismenu-icon fa fa-book"></i>
                                    Maths
                                </a>
                            </li>
                            <li>
                                <a href="./index.php?page=layout_access&page2=english.obj" class="">
                                <i class="metismenu-icon fa fa-book"></i>
                                    English
                                </a>
                            </li>
                            <li>
                                <a href="./index.php?page=layout_access&page2=science.obj" class="">
                                <i class="metismenu-icon fa fa-book"></i>
                                    Science
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
    if($page=="maths.obj")
{
    include('Maths_obj.php');
}

if($page=="science.obj")
{
    include('Science_obj.php');
}

if($page=="english.obj")
{
    include('English_obj.php');
}
    if($page=="maths.b")
{
    include('Maths_B.php');
}

if($page=="science.b")
{
    include('Science_B.php');
}

if($page=="english.b")
{
    include('English_B.php');
}
}
else
{    
        include('index_access.php');
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
    <script type="text/javascript" src="../Assets/scripts/main.js"></script>
   

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script type="text/javascript" src="./Assets/scripts/main.js"></script>
</body>
</html>