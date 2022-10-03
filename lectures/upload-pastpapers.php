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
                            <a class="navbar-brand" href="#">Upload Past Papers</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">


                            </ul>

                        </div>
                    </div>
                </nav>


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body" style="margin: 12px; padding:20px;">
                                    <?php if (isset($_GET['message'])) { ?>
                                        <span style=" color:red; font-weight: 800;"><?php echo $_GET['message']; ?></span>
                                    <?php  } ?>
                                    <h5 class="card-title">Past-paper</h5>
                                    <form class="form-group" enctype="multipart/form-data" method="POST" action="../includes/upload_pastpaper.php">
                                        <div class="position-relative form-group"><label for="exampleEmail" class="">Title:</label><input name="title" id="exampleEmail" placeholder="Title of your notes" type="text" class="form-control" required></div>
                                        <div class="position-relative form-group"><label for="exampleText" class="">Description:</label><textarea name="description" placeholder="Description" id="exampleText" class="form-control"></textarea>
                                        </div>
                                        <label for="exampleSelect" class="">Program:</label>
                                        <select name="program" id="exampleSelect" class="form-control" required>
                                            <option value="">Select the Program</option>
                                            <option value="Electrical">Electrical</option>
                                            <option value="Mechanical">Mechanical</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Computer science">Computer science</option>
                                            <option value="Laboratory science">Laboratory science</option>
                                        </select>
                                        <label for="exampleSelect" class="">Level:</label>
                                        <select name="level" id="exampleSelect" class="form-control" required>
                                            <option value="">Select the level</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4 </option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7-1">7-1</option>
                                            <option value="7-2">7-2</option>
                                            <option value="8">8</option>
                                        </select>
                                        <div class="position-relative form-group"><label for="exampleFile" class="">File:</label><input name="file" id="exampleFile" type="file" class="form-control-file" style="margin-top: 20px;" required>
                                        </div>
                                        <button class="mt-1 btn btn-warning" type="submit" name="upload_pastpapers">Submit</button>
                                    </form>
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


    </html>

<?php
} else {
    header("Location:../index.php");
    exit();
}
?>