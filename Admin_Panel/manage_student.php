<?php

  include_once('header.php');

?>

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h3 class="mb-0">Student List</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Message</th>
           
          </tr>
        </thead>
        <tbody>
        <?php 
          foreach ($std_arr as $value)
            {
        ?> 
        <tr>
          <td class="px-0"><?php echo $value->std_id ?></td>
          <td class="px-0"><?php echo $value->std_name?></td>
          <td class="px-0"><?php echo $value->std_email ?></td>
          <td class="px-0"><?php echo $value->std_password ?></td>
          <td class="px-0"><?php echo $value->std_phone ?></td>
          <td class="px-0"><?php echo $value->std_message ?></td>
        </tr>
        <?php
          }
        ?>
        </tbody>
      </table>
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