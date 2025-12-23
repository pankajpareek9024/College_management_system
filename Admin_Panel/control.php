<?php

include_once('../College_Management_System_Website/model.php');  // step 1 model load

class control extends model{  //  step 2 model class extends in control for functionalites use
	
	function __construct(){
		session_start();
		// echo "Admin Control ";

		model::__construct();	  // step 3 call model __construct
		
		$path = $_SERVER['PATH_INFO'];//http://localhost/students/01_Aug_PHP_2025/Project/website/control.php
		switch($path)
		{		
			case '/dashbord':
				include_once('dashbord.php');
			break;

			case '/admin_register':

				if (isset($_REQUEST['Register'])) {

					//user data get kar ke variable me store karwana
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$password = $_REQUEST['password'];
					//Array create kiyaa :- admin table me jo column name ha un me variable se data dala ha 
					$arr=array(
						'admin_name' => $name,
						'admin_email' => $email,
						'admin_password' => $password
					);

					//Insert data in database through insert function
					$run = $this->insert('admin',$arr);

					echo "<script>
					alert('Registration Success');
					window.location.href = 'admin_login';
					</script>";

				}

				include_once('admin_register.php');
			break;

			case '/index':
				if(isset($_REQUEST['signin'])){

					

					$email = $_REQUEST['email'];
					$password = $_REQUEST['password'];
	
					$where = array(
						'admin_email'=>$email,
						'admin_password'=>$password
					);

					$run = $this->select_where('admin',$where);
					$chk = $run->num_rows;

					if($chk){
						$fetch=$run->fetch_object();
						$_SESSION['admin_name']=$fetch->admin_name;
						$_SESSION['admin_email']=$fetch->admin_email;
						$_SESSION['admin_id']=$fetch->admin_id;
						echo "<script>
						alert('Login Successful ✅');
						window.location.href = 'dashbord';
						</script>";
					}else{
						echo "<script>
						alert('Invalid Email or Password Please try again ❌');
						window.location.href = 'index';
						</script>";
					}
				}
				include_once('index.php');
			break;
			case '/profile':
				include_once('profile.php');
			break;
			case '/edit_profile':
				include_once('edit_profile.php');
				echo "Edit Profile Page";
			break;
			case '/change_password':
				echo "Change Password Page";
				include_once('change_password.php');
			break;
			case '/log_out':
				echo "<script>
				alert('Log out Successful');
				window.location.href = 'admin_login';
				</script>";
				include_once('log_out.php');
			break;
			case '/add_categories':
				include_once('add_categories.php');
			break;
			
			case '/add_student':

				if(isset($_REQUEST['addStudent'])){

					$name = $_REQUEST['student_name'];
					$email = $_REQUEST['student_email'];
					$password = $_REQUEST['student_password'];
					$message = $_REQUEST['student_message'];
					$phone = $_REQUEST['student_phone'];

					$image = $_FILES['image']['name'];

					if($_FILES['image']['size'] > 0)
					{
						$path = "../College_Management_System_Website/images/" . $image;   // Upload folder
						$tmp  = $_FILES['image']['tmp_name'];  // Correct tmp file
						move_uploaded_file($tmp, $path);
					}

						$arr = array(
						"std_name"    => $name,
						"std_email"   => $email,
						"std_password"=> $password,
						"std_phone"   => $phone,
						"std_message" => $message,
						"std_image"   => $image
					);

					$run = $this->insert('student', $arr);

				}

				include_once('add_student.php');
			break;
			case '/manage_student':
				$std_arr = $this->select('student');
				include_once('manage_student.php');
			break;
			
			case '/manage_categories':
				include_once('manage_categories.php');
			break;
			case '/add_teacher':
				include_once('add_teacher.php');
			break;			
			case '/manage_teacher':
				include_once('manage_teacher.php');
			break;			
		}
	}
	
}

$obj=new control;
?>