<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['name'] ?? 'User';
$username = $_SESSION['username'] ?? 'Unknown';
$email = $_SESSION['email'] ?? 'Not provided';
$profileImage = $_SESSION['profileImage'] ?? 'https://i.pravatar.cc/100';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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

<body>
    <div class="foundify" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
        <a style="flex-grow: 1; text-align: center;">Foundify</a>
    </div>
    <div class="profile-container">
        <div class="profile-pic">
            <img id="profileImage" src="<?php echo $profileImage; ?>" alt="Profile Picture">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="profileImage" accept="image/*">
                <button type="submit">Upload</button>
            </form>
        </div>
        <h1>User Profile</h1>
        <p>Name: <?php echo htmlspecialchars($name); ?></p>
        <p>Email: <?php echo htmlspecialchars($email); ?></p>
        <p>Username: <?php echo htmlspecialchars($username); ?></p>
        <a href="signup_login.php">Logout</a>
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
