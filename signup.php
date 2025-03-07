<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signUp"])) {
    $_SESSION["name"] = $_POST["fName"];
    $_SESSION["username"] = $_POST["lName"];
    $_SESSION["email"] = $_POST["email"];
    header("Location: profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="/Front/css/design.css">
    <link rel="stylesheet" href="/Front/css/addDesign.css">
    <link rel="stylesheet" href="/Front/css/designset.css">
    <link rel="stylesheet" href="/Front/css/profile.css">
    <link rel="stylesheet" href="/Front/css/design_login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="UTF-8"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="body">
    <div class="foundify" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
        <a style="flex-grow: 1; text-align: center;">Foundify</a>
    </div>

    <div class="wrapper" id="signup">
        <form method="post" action="">
            <h1 id="login">Sign up</h1>
                        <div class="input-box" style="text-align: left;">
                <label for="lName">Username</label>
                <input type="text" name="lName" id="signup-Username" placeholder="Last Name" required>
            </div>
            <div class="input-box" style="text-align: left;">
                <label for="fname">Name</label>
                <input type="text" name="fName" id="signup-Name" placeholder="First Name" required>
            </div>

            <div class="input-box" style="text-align: left;">
                <label for="email">Email</label>
                <input type="email" name="email" id="signup-email" placeholder="Email" required>
            </div>
            <div class="input-box" style="text-align: left;">
                <label for="password">Password</label>
                <input type="password" name="password" id="signup-password" placeholder="Password" required>
            </div>
            <div style="padding-top: 10px;">
                <input type="submit" class="btn2" id="submit_form" value="Sign Up" name="signUp">
            </div>
        </form>
        <div class="register-link">
            <p>Already Have Account ?</p>
            <a href="login.php" style="color: rgb(36, 222, 206);">Log In</a>
        </div>
    </div>

    <footer class="footer">
        <div class="container d-flex justify-content-around d-flex2">
            <a href="index.php" id="homeLink" class="footer-icon"><i class="bi bi-house-door-fill"></i></a>
            <a href="search.php" id="searchLink" class="footer-icon"><i class="bi bi-search-heart-fill"></i></a>
            <a href="add.php" id="addLink" class="footer-icon"><i class="bi bi-plus-circle-fill"></i></a>
            <a href="signup_login.php" id="setLink" class="footer-icon"><i class="bi bi-person-fill"></i></a>
        </div>
    </footer>
    <script src="js/darkMode.js"></script>
</body>

</html>