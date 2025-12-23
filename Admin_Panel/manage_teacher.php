<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-11 mx-auto">

            <div class="card shadow border-0">
                
                <!-- Header -->
                <div class="card-header bg-dark text-white d-flex justify-content-between">
                    <h4 class="mb-0">👨‍🏫 Manage Teachers</h4>
                    <a href="add_teacher.php" class="btn btn-success btn-sm">➕ Add Teacher</a>
                </div>

                <!-- Body -->
                <div class="card-body table-responsive">

                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Department</th>
                                <th>Subject</th>
                                <th>Experience</th>
                                <th>Status</th>
                                <th width="180">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        // Example static data (DB se loop ayega)
                        for($i=1; $i<=5; $i++)
                        {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>
                                    <img src="images/teacher.jpg" width="45" height="45" class="rounded-circle">
                                </td>
                                <td>Teacher <?php echo $i; ?></td>
                                <td>teacher<?php echo $i; ?>@gmail.com</td>
                                <td>987654321<?php echo $i; ?></td>
                                <td>Computer</td>
                                <td>PHP</td>
                                <td>5 Years</td>

                                <td>
                                    <a href="#" class="btn btn-success btn-sm">Active</a>
                                    <!-- inactive ke liye btn-danger -->
                                </td>

                                <td>
                                    <a href="edit_teacher.php?id=<?php echo $i; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete_teacher.php?id=<?php echo $i; ?>" 
                                       onclick="return confirm('Are you sure?')" 
                                       class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
