<?php
session_start();

// ตรวจสอบว่ามีข้อความข้อผิดพลาดจากการเข้าสู่ระบบหรือไม่
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
// เคลียร์ข้อความข้อผิดพลาดหลังจากโหลดหน้า
unset($_SESSION['error_message']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
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
    </div>

    <div class="wrapper" id="errorpage">
        <div class="error-container">
            <h1>Login Failed</h1>
            <p><?php echo htmlspecialchars($error_message ?: "Incorrect username or password. Please try again."); ?></p>
            <a href="signup_login.php" class="btn2" style="    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;">Go Back</a>
        </div>
    </div>

    <footer class="footer">
        <div class="container d-flex justify-content-around">
            <a href="home.php" class="footer-icon"><i class="bi bi-house-door-fill"></i></a>
            <a href="search.php" class="footer-icon"><i class="bi bi-search-heart-fill"></i></a>
            <a href="add.php" class="footer-icon"><i class="bi bi-plus-circle-fill"></i></a>
            <a href="signup_login.php" class="footer-icon"><i class="bi bi-person-fill"></i></a>
        </div>
    </footer>
    <script src="js/darkMode.js"></script>
</body>
</html>