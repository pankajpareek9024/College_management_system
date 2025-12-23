<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Profile | College Management System</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
    body { background: #f1f5f9; padding: 20px; }

    .profile-wrapper {
      max-width: 1000px;
      margin: auto;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      overflow: hidden;
      display: grid;
      grid-template-columns: 300px 1fr;
    }

    /* LEFT PANEL */
    .profile-left {
      background: linear-gradient(135deg, #1e3a8a, #2563eb);
      color: #fff;
      padding: 35px 25px;
      text-align: center;
    }
    .profile-left img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 4px solid #fff;
      object-fit: cover;
      margin-bottom: 15px;
    }
    .profile-left h2 { margin-bottom: 5px; }
    .profile-left p { font-size: 14px; opacity: 0.9; }

    /* RIGHT PANEL */
    .profile-right { padding: 35px; }

    .section { margin-bottom: 30px; }
    .section h3 {
      margin-bottom: 15px;
      font-size: 18px;
      color: #1f2937;
      border-bottom: 2px solid #e5e7eb;
      padding-bottom: 6px;
    }

    .info-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 15px;
    }
    .info-box {
      background: #f9fafb;
      padding: 14px 16px;
      border-radius: 8px;
    }
    .info-box span {
      font-size: 12px;
      color: #6b7280;
      display: block;
      margin-bottom: 3px;
    }
    .info-box strong { color: #111827; }

    .btn-group {
      margin-top: 20px;
    }
    .btn {
      padding: 10px 18px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      font-size: 14px;
      margin-right: 10px;
    }
    .btn-edit { background: #2563eb; color: #fff; }
    .btn-password { background: #f59e0b; color: #fff; }
    .btn-logout { background: #dc2626; color: #fff; }

    @media (max-width: 768px) {
      .profile-wrapper { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<?php
// SESSION CHECK (example)
// session_start();
// if(!isset($_SESSION['admin_id'])){
//   header('Location: admin_login.php');
// }

// Dummy data (replace with DB data)
// $admin_name = "Admin User";
// $admin_email = "admin@college.edu";
// $admin_phone = "+91 99999 88888";
// $admin_role = "Super Admin";
// $admin_college = "ABC College of Engineering";
// $admin_username = "admin";
// ?>

<div class="profile-wrapper">

  <!-- LEFT SIDE -->
  <div class="profile-left">
    <img src="https://via.placeholder.com/150" alt="Admin Profile">
    <h2></h2>
    <p></p>
  </div>

  <!-- RIGHT SIDE -->
  <div class="profile-right">

    <div class="section">
      <h3>Admin Profile</h3>
      <div class="info-grid">
        <div class="info-box">
          <span>Username</span>
          <strong></strong>
        </div>
        <div class="info-box">
          <span>Email</span>
          <strong></strong>
        </div>
        <div class="info-box">
          <span>Phone</span>
          <strong></strong>
        </div>
        <div class="info-box">
          <span>College</span>
          <strong></strong>
        </div>
      </div>
    </div>

    <div class="section">
      <h3>About Admin</h3>
      <p style="color:#374151; line-height:1.6;">
        This admin panel allows full control over students, faculty,
        courses, departments, fees, and reports within the College
        Management System.
      </p>
    </div>

    <div class="btn-group">
      <a href="edit_profile" class="btn btn-edit">Edit Profile</a>
      <a href="change_password" class="btn btn-password">Change Password</a>
      <a href="log_out" class="btn btn-logout">Logout</a>
    </div>

  </div>
</div>

</body>
</html>
