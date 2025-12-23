<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login - Pragati Global University</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            padding: 2rem 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #0d1128;
            margin-bottom: 1.5rem;
        }
        input[type="text"], input[type="password"] {
            width: 92%;
            padding: 0.8rem;
            margin: 0.5rem 0 1rem 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 0.8rem;
            background: #0d1128;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background: #163469;
        }
        .links {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }
        .links a {
            color: #0d1128;
            text-decoration: none;
            font-size: 0.9rem;
            font-family: inherit;
            font-weight: 600;
        }
        .links a:hover {
            text-decoration: underline;
        }
        .error {color:red; text-align:center; margin-bottom:1rem;}
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Student Login</h2>
        <?php
        if(isset($_GET['error'])){
            echo '<p class="error">'.htmlspecialchars($_GET['error']).'</p>';
        }
        ?>
        <form action="student_login_form" method="POST">
            <input type="text" name="student_email" placeholder="Email" required>
            <input type="password" name="student_password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <div class="links">
            <a href="student_register">Register</a>
            <a href="forgot_password.php">Forgot Password?</a>
        </div>
    </div>
</body>
</html>
