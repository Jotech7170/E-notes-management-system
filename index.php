<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Notes Management System</title>
    <link rel="stylesheet" href="./css/index.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        select {
            margin-bottom: 7px;
        }
    </style>
</head>

<body>
    <section>


        <div class="container" style="border-radius: 15px;">
            <div class="user signinBx">
                <div class="imgBx">
                    <img src="https://images.unsplash.com/photo-1494252713559-f26b4bf0b174?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="pic1">
                </div>
                <div class="formBx">
                    <form action="./includes/login.php" method="POST" onsubmit="return login()">
                        <h2>Sign In</h2>
                        <?php if (isset($_GET['errorup'])) { ?>
                            <span style="color: red;  font-weight: 800;"><?php echo $_GET['errorup']; ?></span>
                        <?php  } ?>
                        <?php if (isset($_GET['errorin'])) { ?>
                            <span style="color: red;  font-weight: 800;"><?php echo $_GET['errorin']; ?></span><br>
                        <?php  } ?>
                        <span id="signinerr" style="  font-weight: 800;"></span>
                        <input type=" text" placeholder="Email" id="email" name="email">
                        <input type="password" placeholder="Password" id="password" name="password">
                        <input type="submit" value="Login" id="signin" name="signin">
                        <p class="signup">Don't have an account? <a href="#" onclick="toggleForm()">Sign Up.</a></p>
                    </form>
                </div>
            </div>


            <div class="user signupBx">
                <div class="formBx">
                    <form method="POST" action="./includes/register.php" onsubmit="return register()">
                        <h2>Sign Up</h2>

                        <span id="signuperr" style="  font-weight: 800;"></span>

                        <input type="text" placeholder="Username" name="username" id="name">
                        <input type="text" placeholder="Email" name="email" id="upemail">
                        <input type="password" placeholder=" Password" name="password" id="uppassword">
                        <select name="who" id="exampleSelect" class="form-select alert-warning" required>
                            <option value="">...who are you...</option>
                            <option value="student">student</option>
                            <option value="lecture">lecture</option>
                        </select>
                        <select name="department" id="exampleSelect" class="form-select alert-warning" required>
                            <option value="">...Department...</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Computer science">Computer science</option>
                            <option value="Laboratory science">Laboratory science</option>
                        </select>
                        <select name="program" id="exampleSelect" class="form-select alert-warning" required>
                            <option value="">...Program...</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Computer science">Computer science</option>
                            <option value="Laboratory science">Laboratory science</option>
                            <option value="lecture">I'm a lecture</option>
                        </select>

                        <select name="level" id="exampleSelect" class="form-control alert-warning" required>
                            <option value="">...level..</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4 </option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7-1">7-1</option>
                            <option value="7-2">7-2</option>
                            <option value="8">8</option>
                            <option value="0">i'm a lecture</option>
                        </select>
                        <input type="submit" value="Sign Up" class="btn2" name="signup">
                        <p class="signin">You have an account? <a href="#" onclick="toggleForm()">Sign In.</a></p>
                    </form>
                </div>
                <div class="imgBx">
                    <img src="https://images.unsplash.com/photo-1527293203126-5659bb83a9a1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="pic1">
                </div>
            </div>
        </div>
    </section>
    <script src="./js/index.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>