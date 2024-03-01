<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In</title>
    <link rel="stylesheet" href="style_admin.css">
    <script type="text/javascript">
      
    </script>
</head>
<body>
    
    <div class="container">
        <div class="form">
            <form onsubmit="return validate()">
                <h1>Login</h1>
                <p id="alert"></p>
                <input type="text" placeholder="Username" id="user" class="inp" required>
                <input type="password" placeholder="Password" id="pass" class="inp" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>