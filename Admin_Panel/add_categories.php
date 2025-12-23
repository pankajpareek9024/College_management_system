<?php

  include_once('header.php');

?>

 <div class="container mt-5">
    <div class="card shadow-lg">
      <div class="card-header bg-primary text-white">
        <h3 class="mb-0">Add Categories</h3>
      </div>
      <div class="card-body">
        <form action="add_category.php" method="POST">
          
          <!-- Student Course -->
          <div class="mb-3">
            <label for="studentCourse" class="form-label">Category Name </label>
            <input type="text" class="form-control" id="studentCourse" name="student_course" placeholder="Enter Category Name">
          </div>

          <!-- Faculty -->
          <div class="mb-3">
            <label for="faculty" class="form-label">Category Discription</label>
            <input type="text" class="form-control" id="faculty" name="faculty" placeholder="Enter Category Discription">
          </div>

          <!-- Image -->
          <div class="mb-3">
            <label for="Category_image" class="form-label">Category Image</label>
            <input type="file" class="form-control" id="department" name="department" placeholder="Category Image">
          </div>

        

          <!-- Submit Button -->
          <button type="submit" class="btn btn-success">Save Categories</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
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