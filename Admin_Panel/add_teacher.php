<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow border-0">
                
                <!-- Card Header -->
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">➕ Add New Teacher</h4>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <!-- Personal Info -->
                        <h6 class="text-primary mb-3">Personal Information</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Full Name</label>
                                <input type="text" name="teacher_name" class="form-control" placeholder="Enter full name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email Address</label>
                                <input type="email" name="teacher_email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone Number</label>
                                <input type="text" name="teacher_phone" class="form-control" placeholder="Enter phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="">Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <hr>

                        <!-- Academic Info -->
                        <h6 class="text-primary mb-3">Academic & Professional</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Department</label>
                                <select name="department" class="form-control">
                                    <option value="">Select Department</option>
                                    <option>Computer Science</option>
                                    <option>Mechanical</option>
                                    <option>Electrical</option>
                                    <option>Commerce</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Subject name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Qualification</label>
                                <input type="text" name="qualification" class="form-control" placeholder="M.Tech / PhD">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Experience (Years)</label>
                                <input type="number" name="experience" class="form-control">
                            </div>
                        </div>

                        <hr>

                        <!-- College Info -->
                        <h6 class="text-primary mb-3">College Details</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Joining Date</label>
                                <input type="date" name="joining_date" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <hr>

                        <!-- Upload -->
                        <h6 class="text-primary mb-3">Upload</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Profile Photo</label>
                                <input type="file" name="teacher_image" class="form-control">
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="text-end mt-4">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" name="add_teacher" class="btn btn-primary">Save Teacher</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
