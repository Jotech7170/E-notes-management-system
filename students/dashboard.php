<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dashboard</title>
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
        <link href="../assets/css/demo.css" rel="stylesheet" />


        <!--  Fonts and icons     -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="../assets/css/themify-icons.css" rel="stylesheet">
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
                        <li class="active">
                            <a href="./Dashboard.php">
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
                        <li>
                            <a href="./pastpapers.php">
                                <i class="ti-pencil-alt2"></i>
                                <p>SHARE PAST-PAPERS</p>
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
                            <a class="navbar-brand" href="#">Dashboard</a>
                        </div>

                    </div>
                </nav>


                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <a href="./profile.php">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-warning text-center">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p>USER PROFILE</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <a href="./notes.php">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-success text-center">
                                                        <i class="ti-file"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p>NOTES</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <a href="./pastpapers.php">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-danger text-center">
                                                        <i class="ti-layout-tab"></i>
                                                    </div>
                                                </div>

                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p> PAST PAPPERS</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <a href="./assignment.php">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-info text-center">
                                                        <i class="ti-files"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p>ASSIGNMENT</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="card">
                                    <div class="content">
                                        <a href="../includes/logout.php">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-grey text-center">
                                                        <i class="ti-back-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p>LOG OUT</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
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


    </body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="../assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="../assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            demo.initChartist();

            $.notify({
                icon: 'ti-wheelchair',
                message: "<span> <?php
                                    echo $_SESSION['username'];
                                    ?> Welcome to <span>E-Note Management Dashboard.</span> "

            }, {
                type: 'warning',
                timer: 4000
            });

        });
    </script>

    </html>

<?php
} else {
    header("Location:../index.php");
    exit();
}
?>