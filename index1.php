<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Notes Management System</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <h2>E-NOTES MANAGEMENT SYSTEM</h2>
    <div class="container <?php if (isset($_GET['errorup'])) { ?>
        right-panel-active
                <?php  } ?>" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="./includes/register.php" onsubmit="return register()" class="form-group">
                <h1>Create Account</h1>
                <?php if (isset($_GET['errorup'])) { ?>
                    <span style="color: red;  font-weight: 800;"><?php echo $_GET['errorup']; ?></span>
                <?php  } ?>
                <span id="signuperr" style="  font-weight: 800;"></span>
                <input type="text" placeholder="UserName" name="username" id="name" />
                <input type="text" placeholder="Email" name="email" id="upemail" />
                <input type="password" placeholder="Password" name="password" id="uppassword" />
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form class="form-group" enctype="multipart/form-data" method="POST">

                            <label for="exampleSelect" class="">Program:</label>
                            <select name="select" id="exampleSelect" class="form-control" required>
                                <option value=""></option>
                                <option>Electrical</option>
                                <option>Mechanical</option>
                                <option>Information Technology</option>
                                <option>Computer science</option>
                                <option>Laboratory science</option>
                            </select>
                            <label for="exampleSelect" class="">Level:</label>
                            <select name="select" id="exampleSelect" class="form-control" required>
                                <option value=""></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4 </option>
                                <option>5</option>
                                <option>6</option>
                                <option>7-1</option>
                                <option>7-2</option>
                                <option>8</option>
                            </select>
                    </div>
                </div>
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="./includes/login.php" method="POST" onsubmit="return login()">
                <h1>Sign in</h1>
                <?php if (isset($_GET['errorin'])) { ?>
                    <span style="color: red;  font-weight: 800;"><?php echo $_GET['errorin']; ?></span><br>
                <?php  } ?>
                <span id="signinerr" style="  font-weight: 800;"></span>
                <input type=" text" placeholder="Email" id="email" name="email" />
                <input type="password" placeholder="Password" id="password" name="password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" id="signin" name="signin">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/index.js"></script>
</body>

</html>