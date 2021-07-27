<?php
	require_once 'models/db_config.php';

	$name="";
	$err_name="";

@@ -14,7 +15,7 @@
    $did="";
	$err_did="";
	$err_db="";
	

	$hasError=false;

    if (isset($_POST["add_std"])){
@@ -23,7 +24,7 @@
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["uname"];
			$name = $_POST["name"];
		}

        if(empty($_POST["dob"])){
@@ -70,8 +71,52 @@
		}
		$err_db = $rs;
        }
	}

		elseif(isset($_POST["edit_std"])){
			if(empty($_POST["name"])){
				$hasError = true;
				$err_name = "Name Required";
			}
			else{
				$name = $_POST["name"];
			}

			if(empty($_POST["dob"])){
				$hasError = true;
				$err_dob = "DOB Required";
			}
			else{
				$dob = $_POST["dob"];
			}
			if(empty($_POST["credit"])){
				$hasError = true;
				$err_credit = "Credit Required";
			}
			else{
				$credit = $_POST["credit"];
			}
			if(empty($_POST["cgpa"])){
				$hasError = true;
				$err_cgpa = "CGPA Required";
			}
			else{
				$cgpa = $_POST["cgpa"];
			}
			if(empty($_POST["dept"])){
				$hasError = true;
				$err_dname = "Dept. name Required";
			}
			else{
				$dname = $_POST["dept"];
			}
			if(empty($_POST["did"])){
				$hasError = true;
				$err_did = "Dept. ID Required";
			}
			else{
				$did = $_POST["did"];
			}

			$rs = editstudent($name,$dob,$credit,$cgpa,$dname,$did,$id);
			if($rs === true){
@@ -80,7 +125,23 @@
			$err_db = $rs;
		}

    }
		elseif(isset($_POST["dlt_std"])){
			if(empty($_POST["dname"])){
				$hasError = true;
				$err_name = "Name Required";
			}
			else{
				$name = $_POST["dname"];
			}
			$rs = deletestudent($name);
			if($rs === true){
				header("Location: all_student.php");
			}
			$err_db = $rs;

		}


		function insertstudent($name,$dob,$credit,$cgpa,$dname,$did){

			$query= "INSERT INTO `student`(`name`, `id`, `dob`, `credit`, `cgpa`, `dept_name`, `dept_id`) VALUES ('$name',NULL,'$dob','$credit','$cgpa','$dname','$did')";
@@ -98,11 +159,19 @@ function getstudent($id){
        }

        function editstudent($name,$dob,$credit,$cgpa,$dname,$did,$id){
            $query = "update student set name='$name',id='Null', dob='$dob',credit='$credit',cgpa='$cgpa',dept_name='$dname',dept_id='$did'  where id=$id";
            $query = "update student set name='$name',id=NULL, dob='$dob',credit='$credit',cgpa='$cgpa',dept_name='$dname',dept_id='$did'  where id=$id";
            return execute($query);

        }

		function deletestudent($name){
            $query = "DELETE FROM `student` WHERE name='$name'";
            return execute($query);

        }

