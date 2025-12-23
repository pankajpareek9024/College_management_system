<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration - Pragati Global University</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background: #fff;
            padding: 2rem 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #0d1128;
            margin-bottom: 1.5rem;
        }
        input, textarea {
            width: 100%;
            padding: 0.8rem;
            margin: 0.5rem 0 1rem 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        textarea {
            resize: vertical;
            height: 80px;
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
            text-align: center;
            margin-top: 1rem;
        }
        .links a {
            color: #0d1128;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .links a:hover {
            text-decoration: underline;
        }
        .error {color:red; text-align:center; margin-bottom:1rem;}
        .success {color:green; text-align:center; margin-bottom:1rem;}
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Student Registration</h2>
        <form action="student_register" method="POST" enctype="multipart/form-data">
            <input type="text" name="student_name" placeholder="Full Name" required>
            <input type="email" name="student_email" placeholder="Email" required>
            <input type="password" name="student_password" placeholder="Password" required>
            <input type="text" name="student_phone" placeholder="Phone Number" required>
            <input type="file" name="image"  required>
            <textarea name="student_message" placeholder="Message / Note"></textarea>
            <button type="submit" name="submit">Register</button>
        </form>
        <div class="links">
            <a href="student_login_form">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>
