<?php
include '../PHP/includes/session.php';

if (isset($_SESSION['user'])) {
    header('location: ../RHome.php');
    exit;
}

if (isset($_POST['sign-up'])) {
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user(`user_name`,`email`,`password`) VALUES('$userName', '$email', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data inserted successfull. Please Login.";
        header('location: display.php');
    } else {
        die(mysqli_error($con));
    }
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from user where email='$email'AND password='$password'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo " You Have Successfully Logged in";
        header('location: ../RHome.php');
    } else {
        echo " You Have Entered Incorrect Password";
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Login</title>
</head>

<body>
    <form>
        <div class="hero">
            <h1>Read reviews. Write reviews. Find products you can trust.</h1>
            <div class="form-box">
                <div class="button-box">
                    <div id="butn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                    <button type="button" class="toggle-btn" onclick="singup()">Sign up</button>
                </div>

    </form>
    <div class="info">
        <h3>infoGiver</h3>
    </div>


    <form id="login" class="input-group" method="post">
        <input type="text" class="input-field" placeholder="email" required name="email">
        <input type="text" class="input-field" placeholder="Enter Password" required name="password">
        <input type="checkbox" class="chech-box"><span>Remember password</span>
        <button type="submit" class="submit-btn" name="login">Log in</button>

    </form>

    <!-- sing up -->

    <form id="singup" class="input-group" method="post">
        <input type="text" class="input-field" placeholder="User Name" name="userName">
        <input type="email" class="input-field" placeholder="Email Id" name="email">
        <input type="text" class="input-field" placeholder="Enter Password" name="password">
        <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions</span>
        <button type="submit" class="submit-btn" name="sign-up">Sing up</button>
    </form>
    </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("singup");
        var z = document.getElementById("butn");

        function singup() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
    <?php
    $PATH = $_SERVER['DOCUMENT_ROOT'] . "/supun/nproject/Reviews/";

    include("HTML/footer.html");
    ?>

</body>

</html>