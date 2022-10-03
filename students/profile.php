<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>MY Profile</title>

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

    </head>

    <body>

        <div class="wrapper">
            <div class="sidebar" data-background-color="white" data-active-color="danger">


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
                        <li class="active">
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
                                <p>PAST-PAPERS</p>
                            </a>
                        </li>

                        <li class="active-pro">
                            <a href="../includes/logout.php" ">
                                <i class=" ti-back-right"></i>
                                <p style="font-weight: 600;">LOG OUT</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar bar1"></span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">User Profile</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                            </ul>

                        </div>
                    </div>
                </nav>
                <?php if (isset($_GET['errorup'])) { ?>
                    <span style="color: red;  font-weight: 800;"><?php echo $_GET['errorup']; ?></span>
                <?php  } ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-5">
                                <div class="card card-user">
                                    <div class="image">
                                        <!-- <img src="assets/img/background.jpg" alt="..." /> -->
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            <!-- <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..." /> -->
                                            <h4 class="title">
                                                <?php
                                                echo  $_SESSION['username'];
                                                ?><br>
                                            </h4>
                                        </div>
                                        <p class="description text-center">
                                            <?php
                                            echo  $_SESSION['email'];
                                            ?> <br>
                                            <?php
                                            echo  $_SESSION['type'];
                                            ?> <br>
                                            <!-- I wanna bag it up" -->
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-md-3 col-md-offset-1">
                                                <h5>Depart<br /><small><?php
                                                                        echo  $_SESSION['depart'];
                                                                        ?></small></h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Program<br /><small><?php
                                                                        echo  $_SESSION['program'];
                                                                        ?></small></h5>
                                            </div>
                                            <div class="col-md-3">
                                                <h5>Level<br /><small><?php
                                                                        echo  $_SESSION['level'];
                                                                        ?></small></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Edit Profile</h4>
                                    </div>
                                    <form action="../includes/update.php" method="post">
                                        <div class="content">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" name="username" class="form-control border-input" placeholder="Username" value="<?php
                                                                                                                                                                echo  $_SESSION['username'];
                                                                                                                                                                ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" name="email" class="form-control border-input" placeholder="Email" value="<?php
                                                                                                                                                            echo  $_SESSION['email'];
                                                                                                                                                            ?>">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control border-input" placeholder="Email">
                                                    </div>
                                                </div> -->
                                                </div>

                                                <!-- <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control border-input" placeholder="Company" value="Chet">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">
                                                    </div>
                                                </div>
                                            </div> -->



                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Department</label>
                                                            <input type="text" name="department" class="form-control border-input" placeholder="Department" value="<?php
                                                                                                                                                                    echo  $_SESSION['depart'];
                                                                                                                                                                    ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Program</label>
                                                            <input type="text" name="program" class="form-control border-input" placeholder="program" value="<?php
                                                                                                                                                                echo  $_SESSION['program'];
                                                                                                                                                                ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Level</label>
                                                            <input type="number" name="level" class="form-control border-input" placeholder="level" value="<?php
                                                                                                                                                            echo  $_SESSION['level'];
                                                                                                                                                            ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Change password</label>
                                                            <input type="text" name="password" class="form-control border-input" placeholder="Password" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>About Me</label>
                                                        <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                                    </div>
                                                </div>
                                            </div> -->
                                                <div class="text-center">
                                                    <button name="update" type="submit" class="btn btn-success btn-fill btn-wd">Update Profile</button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </form>
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
                                        Joseph Kimaro
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright pull-right">
                            &copy; <script>
                                document.write(new Date().getFullYear())
                            </script>, made by <a href="">Joseph Kimaro</a>
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