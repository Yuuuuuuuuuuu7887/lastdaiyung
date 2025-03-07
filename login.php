<?php
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // ตัวอย่างข้อมูลบัญชีที่ถูกต้อง
        $validUser = "user123@gmail.com";
        $validPass = "password123";
    
        if ($email === $validUser && $password === $validPass) {
            $_SESSION['user'] = "Username";
            $_SESSION['email'] = $email;
            header("Location: profile.php");
            exit();
        } else {
            header("Location: error.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body class="body">
    <div class="foundify" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
        <a style="flex-grow: 1; text-align: center;">Foundify</a>
        <label class="switch">
            <input type="checkbox" id="toggleMode">
            <span class="slider"></span>
        </label>
    </div>

    <div class="wrapper" id="signIn">
        <form method="post" action="">
            <h1 id="login">Log in</h1>
            <div class="input-box" style="text-align: left;">
                <label for="email">Email</label>
                <input type="email" name="email" id="signin-email" placeholder="Email" required>
            </div>
            <div class="input-box" style="text-align: left;">
                <label for="password">Password</label>
                <input type="password" name="password" id="signin-password" placeholder="Password" required>
            </div>
            <div style="padding-top: 10px;">
                <input type="submit" class="btn2" value="Sign In" id="submit_form" name="signIn">
            </div>
        </form>

        <div class="register-link">
            <p>Don't have an account?</p>
            <a href="signup.php" style="color: rgb(36, 222, 206);">Sign Up</a>
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
