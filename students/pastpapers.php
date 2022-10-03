<?php
session_start();
include_once "../includes/dbh.php";
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Past-pappers</title>
        <link rel="stylesheet" href="../assets/css/custom.css">

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="../assets/css/animate.min.css" rel="stylesheet" />

        <!--  Paper Dashboard core CSS    -->
        <link href="../assets/css/paper-dashboard.css" rel="stylesheet" />


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <!-- <link href="../assets/css/demo.css" rel="stylesheet" /> -->


        <!--  Fonts and icons     -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="../assets/css/themify-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="../viewformcss/demo.css">
        <link rel="stylesheet" href="../viewformcss/fresh-bootstrap-table.css">
        <link rel="stylesheet" href="../viewformcss/fresh-bootstrap-table.css.map">


        <!-- <style>
            a {
                color: #000;
            }


            /* Popup container */
            .popup {
                position: relative;
                display: inline-block;
                cursor: pointer;
            }

            /* The actual popup (appears on top) */
            .popup .popuptext {
                visibility: hidden;
                width: 160px;
                background-color: #555;
                color: #fff;
                text-align: center;
                border-radius: 6px;
                padding: 8px 0;
                position: absolute;
                z-index: 1;
                bottom: 125%;
                left: 50%;
                margin-left: -80px;
            }

            /* Popup arrow */
            .popup .popuptext::after {
                content: "";
                position: absolute;
                top: 100%;
                left: 50%;
                margin-left: -5px;
                border-width: 5px;
                border-style: solid;
                border-color: #555 transparent transparent transparent;
            }

            /* Toggle this class when clicking on the popup container (hide and show the popup) */
            .popup .show {
                visibility: visible;
                -webkit-animation: fadeIn 1s;
                animation: fadeIn 1s
            }

            /* Add animation (fade in the popup) */
            @-webkit-keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }
        </style> -->
        <style>
            a {
                color: #000;
            }
        </style>
    </head>

    <body>

        <div class="wrapper">
            <div class="sidebar" data-background-color="white" data-active-color="warning">
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="" class="simple-text">
                            <?php
                            echo "Welcome " . $_SESSION['username'];
                            ?>
                        </a>
                    </div>

                    <ul class="nav">
                        <li>
                            <a href="./dashboard.php">
                                <i class="ti-panel"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="./profile.php">
                                <i class="ti-user"></i>
                                <p>User Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="./notes.php">
                                <i class="ti-files"></i>
                                <p>NOTES</p>
                            </a>
                        </li>

                        <li>
                            <a href="./assignment.php">
                                <i class="ti-ink-pen"></i>
                                <p>ASSIGNMENTS</p>
                            </a>
                        </li>
                        <li class="active">
                            <a href="./pastpapers.php">
                                <i class="ti-pencil-alt2"></i>
                                <p>PAST-PAPERS</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="../includes/logout.php">
                                <i class="ti-back-right"></i>
                                <p style="font-weight: 600;">LOG OUT</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=" main-panel">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar bar1"></span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">View Past Pappers</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                            </ul>

                        </div>
                    </div>
                </nav>



                <div class="content">
                    <!-- <div class="container-fluid"> -->
                    <!--    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-warning text-center">
                                                    <i class="ti-server"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>Capacity</p>
                                                    105GB
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <button class="btn">
                                                    <i class="ti-reload"></i> Download
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-success text-center">
                                                    <i class="ti-wallet"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>Revenue</p>
                                                    $1,345
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <button class="btn">
                                                    <i class="ti-reload"></i> Download
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-danger text-center">
                                                    <i class="ti-pulse"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>Errors</p>
                                                    23
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <button class="btn">
                                                    <i class="ti-reload"></i> Download
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="icon-big icon-info text-center">
                                                    <i class="ti-twitter-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="numbers">
                                                    <p>Followers</p>
                                                    +45
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                            <div class="stats">
                                                <button class="btn">
                                                    <i class="ti-reload"></i> Download
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->





                    <!-- <div class="white_card mb_20" style="background-color: #fff; padding:8px;text-align:center; border-radius:5px; box-shadow:1px 2px 1px 1px grey;">
                        <div class="white_card_body renew_report_card d-flex align-items-center justify-content-between flex-wrap">
                            <div class="renew_report_left">
                                <h4 class="f_s_19 f_w_600 color_theme2 ">Download your earnings report</h4>
                                <p class="color_gray2 f_s_12 f_w_600">There are many variations of passages There are many variations of passages There are many variations of passages There are many variations of passages There are many variations of passages.</p>
                            </div>
                            <div class="create_report_btn">
                                <a href="#" class="btn btn-success mt-1 mb-1">Download</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="white_card mb_20" style="background-color: #fff; padding:8px;text-align:center; border-radius:5px; box-shadow:1px 2px 1px 1px grey;">
                        <div class="white_card_body renew_report_card d-flex align-items-center justify-content-between flex-wrap">
                            <div class="renew_report_left">
                                <h4 class="f_s_19 f_w_600 color_theme2 ">Download your earnings report</h4>
                                <p class="color_gray2 f_s_12 f_w_600">There are many variations of passages There are many variations of passages There are many variations of passages There are many variations of passages There are many variations of passages.</p>
                            </div>
                            <div class="create_report_btn">
                                <a href="#" class="btn btn-success mt-1 mb-1">Download</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="white_card mb_20" style="background-color: #fff; padding:8px;text-align:center; border-radius:5px; box-shadow:1px 2px 1px 1px grey;">
                        <div class="white_card_body renew_report_card d-flex align-items-center justify-content-between flex-wrap">
                            <div class="renew_report_left">
                                <h4 class="f_s_19 f_w_600 color_theme2 ">Download your earnings report</h4>
                                <p class="color_gray2 f_s_12 f_w_600">There are many variations of passages There are many variations of passages There are many variations of passages There are many variations of passages There are many variations of passages.</p>
                            </div>
                            <div class="create_report_btn">
                                <a href="#" class="btn btn-success mt-1 mb-1">Download</a>
                            </div>
                        </div>
                    </div> -->


                    <div class="fresh-table " style="margin-top: 0px;">
                        <div class="bootstrap-table bootstrap3">
                            <div class="fixed-table-toolbar">
                                <!-- <div class="bs-bars pull-left">
                                    <div class="toolbar">
                                        <button id="alertBtn" class="btn btn-default">Alert</button>
                                    </div>
                                </div> -->
                                <!-- <div class="columns columns-right btn-group pull-right"><button class="btn btn-default" type="button" name="refresh" aria-label="Refresh" title="Refresh"><i class="glyphicon glyphicon-refresh icon-refresh"></i> </button><button class="btn btn-default" type="button" name="toggle" aria-label="Show card view" title="Show card view"><i class="glyphicon glyphicon-list-alt icon-list-alt"></i> </button>
                                    <div class="keep-open btn-group" title="Columns">
                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-label="Columns" title="Columns" aria-expanded="false">
                                            <i class="glyphicon glyphicon-th icon-th"></i>

                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown-item-marker" role="menuitem"><label><input type="checkbox" data-field="id" value="0" checked="checked"> <span>ID</span></label></li>
                                            <li class="dropdown-item-marker" role="menuitem"><label><input type="checkbox" data-field="name" value="1" checked="checked"> <span>Name</span></label></li>
                                            <li class="dropdown-item-marker" role="menuitem"><label><input type="checkbox" data-field="salary" value="2" checked="checked"> <span>Salary</span></label></li>
                                            <li class="dropdown-item-marker" role="menuitem"><label><input type="checkbox" data-field="country" value="3" checked="checked"> <span>Country</span></label></li>
                                            <li class="dropdown-item-marker" role="menuitem"><label><input type="checkbox" data-field="city" value="4" checked="checked"> <span>City</span></label></li>
                                            <li class="dropdown-item-marker" role="menuitem"><label><input type="checkbox" data-field="actions" value="5" checked="checked"> <span>Actions</span></label></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="pull-right search input-group">
                                    <input class="form-control search-input" type="search" placeholder="Search" autocomplete="off">
                                </div>
                            </div>

                            <div class="fixed-table-container" style="padding-bottom: 0px;">
                                <div class="fixed-table-header" style="display: none;">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <!-- <div class="fixed-table-loading table table-hover table-striped" style="top: 56.8381px;">
                                        <span class="loading-wrap">
                                            <span class="loading-text">Loading, please wait</span>
                                            <span class="animation-wrap"><span class="animation-dot"></span></span>
                                        </span>

                                    </div> -->
                                    <table id="fresh-table" class="table table-hover table-striped" style="margin-top: 0px;">
                                        <thead>
                                            <tr>
                                                <th data-field="name">
                                                    <div class="th-inner sortable both desc">Title</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th data-field="salary">
                                                    <div class="th-inner sortable both">Description</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th data-field="country">
                                                    <!-- <div class="th-inner sortable both">Description</div> -->
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th data-field="city" colspan="7">
                                                    <div class="th-inner ">Actions</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th data-field="actions">
                                                    <div class="th-inner "></div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $program = $_SESSION['program'];
                                            $level = $_SESSION['level'];
                                            $sql = "SELECT * FROM resources WHERE type='pastpaper' AND program='$program' AND level='$level'";
                                            $results = mysqli_query($con, $sql);

                                            if (mysqli_num_rows($results) < 1) {
                                                echo '<div class="alert alert-warning">No pastpaer uploaded</div>';
                                            } else {
                                                while ($row = mysqli_fetch_assoc($results)) {

                                            ?>

                                                    <tr data-index="0">
                                                        <td><?php echo $row['title']; ?></td>

                                                        <td colspan="7">
                                                            <span><?php echo $row['description']; ?></span>
                                                        </td>
                                                        <!-- <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
                                                        Description
                                                    </button></td> -->
                                                        <!-- <td> <button class="btn btn-info">
                                                            <div class="popup" onclick="myFunction()">Description
                                                                <span class="popuptext" id="myPopup"><?php echo $row['description']; ?></span>
                                                                <i class="ti-help"></i>
                                                            </div>
                                                        </button></td> -->
                                                        <!-- <td><button class="btn btn-warning">
                                                            Read-document
                                                            <i class="ti-eye"></i>
                                                        </button>
                                                    </td> -->

                                                        <td>
                                                            <a class="btn btn-success" href="<?php echo '../' . $row['filepath']; ?>" download>Download
                                                                <i class="ti-import"></i>
                                                            </a>
                                                        </td>


                                                        <!-- <td><a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)"><i class="fa fa-heart"></i></a><a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)"><i class="fa fa-edit"></i></a><a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)"><i class="fa fa-remove"></i></a></td> -->
                                                    </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="fixed-table-footer"></div>
                            </div>
                            <div class="fixed-table-pagination">
                                <div class="pull-left pagination-detail"><span class="pagination-info">

                                    </span>
                                    <!-- <div class="page-list">
                                        <div class="btn-group dropdown dropup">
                                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                <span class="page-size">
                                                    8
                                                </span>
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li role="menuitem" class="active"><a href="#">8</a></li>
                                                <li role="menuitem" class=""><a href="#">10</a></li>
                                                <li role="menuitem" class=""><a href="#">25</a></li>
                                                <li role="menuitem" class=""><a href="#">50</a></li>
                                                <litem role="menui
                                                
                                                
                                                                                                tem" class=""><a href="#">100</a></litem" class=""><a href="#">100</a></li>
                                            </ul>
                                        </div> rows visible
                                    </div> -->
                                </div>
                                <!-- <div class="pull-right pagination">
                                    <ul class="pagination">
                                        <li class="page-item page-pre"><a class="page-link" aria-label="previous page" href="javascript:void(0)">‹</a></li>
                                        <li class="page-item active"><a class="page-link" aria-label="to page 1" href="javascript:void(0)">1</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="to page 2" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="to page 3" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="to page 4" href="javascript:void(0)">4</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="to page 5" href="javascript:void(0)">5</a></li>
                                        <li class="page-item page-last-separator disabled"><a class="page-link" aria-label="" href="javascript:void(0)">...</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="to page 13" href="javascript:void(0)">13</a></li>
                                        <li class="page-item page-next"><a class="page-link" aria-label="next page" href="javascript:void(0)">›</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="">
                                    Joseph kimaro
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>
                            document.write(new Date().getFullYear())
                        </script>, made</i> by <a href="">Joseph Kimaro</a>
                    </div>
                </div>
            </footer>

        </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="../viewformjs/demo.js"></script>
        <script src="../viewformjs/gsdk-switch.js"></script>
        <script src="../viewformjs/jquery.sharrre.js"></script>

        <!--   Core JS Files   -->
        <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

        <!--  Checkbox, Radio & Switch Plugins -->
        <!-- <script src="../assets/js/bootstrap-checkbox-radio.js"></script> -->

        <!--  Charts Plugin -->
        <!-- <script src="../assets/js/chartist.min.js"></script> -->

        <!--  Notifications Plugin    -->
        <script src="../assets/js/bootstrap-notify.js"></script>

        <!--  Google Maps Plugin    -->
        <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

        <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
        <script src="../assets/js/paper-dashboard.js"></script>

        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <!-- <script src="../assets/js/demo.js"></script> -->

        <script>
            // When the user clicks on <div>, open the popup
            function myFunction() {
                var popup = document.getElementById("myPopup");
                popup.classList.toggle("show");
            }
        </script>

    </body>


    </html>

<?php
} else {
    header("Location:../index.php");
    exit();
}
?>