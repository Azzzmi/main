<?php
session_start();

if (isset($_GET['logout'])) {
    // Perform logout action here
    // For example, clear session data
    session_destroy();
    // Redirect to a login page or any other desired page
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout Example</title>
    <script>
        function confirmLogout() {
            var result = confirm("Are you sure you want to logout?");
            if (result) {
                window.location.href = "logout.php?logout=1";
            }
        }
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style_4.css">
</head>
<body>
    <div class="container">
        <div class="input-group">
            <button onclick="confirmLogout()" class="btn"><a>Logout</a></button>
        </div>
        
    </div>

</body>
</html>