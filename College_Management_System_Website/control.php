<?php

include_once('model.php');  // step 1 model load

class control extends model{  //  step 2 model class extends in control for functionalites use
	
	function __construct(){

		session_start();
			
		model::__construct();	  // step 3 call model __construct
		
		$url=$_SERVER['PATH_INFO']; //http://localhost/students/01_Aug_PHP_2025/Project/website/control.php
		// echo $url;
		
		switch($url)
		{

			
			case '/':
				include_once('index.php');
			break;
			case '/index':
				include_once('index.php');
			break;
			case '/about':
				include_once('about.php');
			break;
			
			case '/courses':
				include_once('courses.php');
			break;
			case '/teacher':
				include_once('teacher.php');
			break;
			case '/blog':
				include_once('blog.php');
			break;
			case '/profile':
				include_once('profile.php');
			break;
			case '/manage_student':
				$std_arr=$this->select('student');
				include_once('manage_student.php');
			break;
			case '/contact':

				if (isset($_REQUEST['sendMsg'])) {

					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$message = $_REQUEST['message'];

					$arr = array("name" => $name, "email" => $email, "message" => $message);

					$run = $this->insert('contact',$arr); 

				}

				include_once('contact.php');
				
			break;
			case '/student_register':

    			if(isset($_REQUEST['submit']))
    			{
					// Get form values
					$name     = $_REQUEST['student_name'];
					$email    = $_REQUEST['student_email'];
					$password = $_REQUEST['student_password'];
					$phone    = $_REQUEST['student_phone'];
					$message  = $_REQUEST['student_message'];

					// Image upload
					$image = $_FILES['image']['name'];

					if($_FILES['image']['size'] > 0)
					{
						$path = "db_images/" . $image;   // Upload folder
						$tmp  = $_FILES['image']['tmp_name'];  // Correct tmp file
						move_uploaded_file($tmp, $path);
					}

					// Prepare array for DB insert
					$arr = array(
						"std_name"    => $name,
						"std_email"   => $email,
						"std_password"=> $password,
						"std_phone"   => $phone,
						"std_message" => $message,
						"std_image"   => $image
					);

					// Insert into students table
					$run = $this->insert('student', $arr);
					if($run){
						echo "<script>
						alert('Registration are Successful');
						window.location.href='student_login_form';
						</script>";
					}else{
						echo "<script>
						alert('Registration Failed');
						window.location.href='student_register';
						</script>";
					}
				}

				include_once('student_register.php');
				break;
				case '/student_login_form':

					if(isset($_REQUEST['login'])){
						
						$email = $_REQUEST['student_email'];
						$password = $_REQUEST['student_password'];

						
						$where = array("std_email"=>$email, "std_password"=>$password);

						$run = $this->select_where('student',$where);
						$chk=$run->num_rows;

						if($chk==1){

							$fetch=$run->fetch_object();
							// sessiob_create
							$_SESSION['std_name']=$fetch->std_name;
							$_SESSION['std_id']=$fetch->std_id;

							echo "<script>
								alert('Login Successful ✅');
								window.location.href='index';
								</script>";
						}else{
							echo "<script>
								alert('Invalid Username or Password Please try again ❌');
								window.location.href='student_login_form';
								</script>";
						}



						
					}
					include_once('student_login_form.php');
				break;
			
		}
	}
	
}

$obj=new control;
?>