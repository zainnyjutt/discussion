<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="../view/login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Admin Login</h2>
            <form class="login-form" method="POST" action="../controller/login.php">
                <label for="username">E-mail:</label>
                <input type="text" id="username" name="email" placeholder="Enter your E-mail">
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
                
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
