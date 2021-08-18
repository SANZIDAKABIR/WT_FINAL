<?php 
include "models/db_config.php";
$error=false;

$cy = date("Y"); 
$F_NameErr=$L_NameErr=$DepartmentErr=$ManagerErr=$EmailErr=$Phone_NErr=$IssuesErr="";
$F_Name=$L_Name=$Department=$Manager=$Email=$Phone_N=$Issues="";
$F_Name1=$L_Name1=$Email1=$Phone_N1="";
$checkErr ="";
$check=0;

    if (isset($_POST['submit'])) 
    {
        //=========First Name===========
        $F_Name1=$_POST["F_Name"];
        if(empty($F_Name1)) 
        {
          $F_NameErr="Please Enter First Name";
        }
        elseif(is_numeric($_POST["F_Name"]))
        {
            $error = true;
            $F_NameErr="Numeric value is not Allow";
        }
        else
        {
           $F_Name=$_POST["F_Name"];
        }

        //=========Last Name===========
        $L_Name1=$_POST["L_Name"];
        if(empty($L_Name1)) 
        {
          $L_NameErr="Please Enter Last Name";
        }

        elseif(is_numeric($_POST["L_Name"]))
        {
            $error = true;
            $L_NameErr=" Numeric value is not Allow";
        }

        else
        {
           $L_Name=$_POST["L_Name"];
        }

        //=========Department===========
        if(empty($_POST["Department"])) 
        {
          $DepartmentErr="Please Select Department";
        }
        else       
        {
          $Department=$_POST["Department"];
        }

        //=========Manager===========
        if(empty($_POST["Manager"])) 
        {
          $ManagerErr="Please Select Manager";
        }
        else       
        {
          $Manager=$_POST["Manager"];
        }

        //=========Email===========
        $Email1=$_POST["Email"];
        if(empty($Email1)) 
        {
          $EmailErr="Please Enter Email Address";
        }
        else
        {
           $Email=$_POST["Email"];
        }

        //==============Phone Number==============
        $Phone_N1=$_POST["Phone_N"];
        if(empty($Phone_N1)) 
        {
          $Phone_NErr="Please Enter Phone Number";
        }
        else if(!(is_numeric($Phone_N1)))
        {
            $Phone_NErr="Please Enter Numeric Phone Number";
        }

        else if(strlen($Phone_N1) != 11)
        {
            $Phone_NErr= "Phone Number must contain 11 digits"; 
        }
        else
        {
            $Phone_N=$_POST["Phone_N"];
        }

        //=============What are you having issues with?===============
        if(isset($_POST['box1']))
        {
            $Issues = $_POST['box1'];
           
              $checked = count($_POST['box1']);
              if($checked<1)
              {
              $IssuesErr = "Select at least One options";
            }
        }

        $values = $_POST['box1'];
        $check = count($values);
        if($check < 1)
        {
            $checkErr ="Select at least One options";
        }
        else
        {


        }

        if (!$error)
        {
            $rs = InsertSupport($F_Name, $L_Name, $Department, $Manager,$Email,$Phone_N,$Issues);
            
            if ($rs === true)
            {
                
                echo "<script>alert('Support Submitted!');</script>";
                
                
                
            }
    
        }



        
    }

    function InsertSupport($F_Name, $L_Name, $Department, $Manager,$Email,$Phone_N,$Issues){
	
        $query = "INSERT INTO support values (NULL,'$F_Name', '$L_Name', '$Department', '$Manager','$Email','$Phone_N','$Issues')";
        return execute($query);
    }
     
?>