<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            border-bottom: 2px solid #eee;
            padding-bottom: 20px;
        }

        .profile-header img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #007bff;
            object-fit: cover;
        }

        .profile-header h2 {
            margin: 0;
            color: #333;
        }

        .profile-header p {
            margin: 5px 0;
            color: #666;
        }

        .section {
            margin-top: 30px;
        }

        .section h3 {
            margin-bottom: 15px;
            color: #007bff;
            border-bottom: 2px solid #007bff;
            display: inline-block;
            padding-bottom: 5px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .info-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
        }

        .info-box label {
            font-weight: bold;
            color: #555;
        }

        .info-box p {
            margin: 5px 0 0;
            color: #333;
        }

        .btn {
            margin-top: 30px;
            text-align: right;
        }

        .btn a {
            text-decoration: none;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn a:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Profile Header -->
    <div class="profile-header">
        <img src="images/student.jpg" alt="Student Photo">
        <div>
            <h2>Rahul Sharma</h2>
            <p>Student ID: STU2025</p>
            <p>Bachelor of Computer Science</p>
        </div>
    </div>

    <!-- Personal Information -->
    <div class="section">
        <h3>Personal Information</h3>
        <div class="info-grid">
            <div class="info-box">
                <label>Date of Birth</label>
                <p>15 August 2003</p>
            </div>
            <div class="info-box">
                <label>Gender</label>
                <p>Male</p>
            </div>
            <div class="info-box">
                <label>Blood Group</label>
                <p>O+</p>
            </div>
        </div>
    </div>

    <!-- Academic Information -->
    <div class="section">
        <h3>Academic Information</h3>
        <div class="info-grid">
            <div class="info-box">
                <label>Course</label>
                <p>B.Sc Computer Science</p>
            </div>
            <div class="info-box">
                <label>Year / Semester</label>
                <p>3rd Year / 6th Semester</p>
            </div>
            <div class="info-box">
                <label>Enrollment No</label>
                <p>ENR123456</p>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="section">
        <h3>Contact Information</h3>
        <div class="info-grid">
            <div class="info-box">
                <label>Email</label>
                <p>rahul.sharma@gmail.com</p>
            </div>
            <div class="info-box">
                <label>Phone</label>
                <p>+91 98765 43210</p>
            </div>
            <div class="info-box">
                <label>Address</label>
                <p>Jaipur, Rajasthan, India</p>
            </div>
        </div>
    </div>

    <!-- Button -->
    <div class="btn">
        <a href="#">Edit Profile</a>
    </div>

</div>

</body>
</html>
