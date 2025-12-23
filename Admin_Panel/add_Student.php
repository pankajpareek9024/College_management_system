<?php

  include_once('header.php');

?>

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h3 class="mb-0">Add New Student</h3>
    </div>
    <div class="card-body">
      <form action="add_student" method="POST" enctype="multipart/form-data">
        
        <!-- student Name -->
        <div class="mb-3">
          <label for="StudentName" class="form-label">Student Name</label>
          <input type="text" class="form-control" id="StudentName" name="student_name" placeholder="Enter Student Name" required>
        </div>


        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="student_email" placeholder="Enter Email" required>
        </div>

         <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="Password" class="form-control" id="password" name="student_password" placeholder="Enter Password" required>
        </div>

         <!-- Phone -->
        <div class="mb-3">
          <label for="phone" class="form-label">Phone No.</label>
          <input type="number" class="form-control" id="phone" name="student_phone" placeholder="Enter Phone Number" required>
        </div>

         <!-- Message -->
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <input type="text" class="form-control" id="message" name="student_message" placeholder="Enter Message" required>
        </div>



         <!-- Image -->
          <div class="mb-3">
            <label for="Student_image" class="form-label">Student Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Student Image">
          </div>

        <!-- Submit Button -->
        <button type="submit" name="addStudent" class="btn btn-success">Add Student</button>

      </form>
    </div>
  </div>
</div>

<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="./assets/js/dashboard.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>