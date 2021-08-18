<?php
 require_once "models/db_config.php";
$cy = date("Y"); 
$Day_Err=$Month_Err=$Year_Err=$C_Type_Err=$Status_Err=$c_code_Err=$Discount_Err=$Use_Err=" ";
$Day=$Month=$Year=$C_Type=$Status=$c_code=$Discount=$Use=" ";
$c_code1=$Discount1=$Use1="";
$hasError=false;

    if (isset($_POST['create'])) 
    {

        // if(empty($_POST["c_code"])) 
        // {
        //   $C_Type_Err="please write your cupon";
        //   $hasError=true;
        // }
        // else       
        // {
        //   $C_Type=$_POST["c_code"];
          
        // }

        //=========Coupon Type===========
        if(empty($_POST["c_type"])) 
        {
          $C_Type_Err="Please Select Coupon Type";
          $hasError=true;

        }
        else       
        {
          $C_Type=$_POST["c_type"];
        }

        //=========Status===========
        if(empty($_POST["Status"])) 
        {
          $Status_Err="Please Select Status";
          $hasError=true;

        }
        else       
        {
          $Status=$_POST["Status"];
        }

        //=========Expires============
        if(empty($_POST["Day"])) 
        {
          $Day_Err="Please Select Day";
          $hasError=true;

        }
        else
        {
            $Day=$_POST["Day"];
        }
        if(empty($_POST["Month"])) 
        {
          $Month_Err="Please Select Month";
          $hasError=true;

        }
        else
        {
            $Month=$_POST["Month"];
        }
        if(empty($_POST["Year"])) 
        {
          $Year_Err="Please Select Year";
          $hasError=true;

        }
        else
        {
            $Year=$_POST["Year"];
        }

        //==================Coupon Code============
        $c_code1=$_POST["c_code"];
        if(empty($c_code1)) 
        {
          $c_code_Err="Please Enter Coupon Code";
          $hasError=true;

          
        }
        else
        {
            $c_code=$_POST["c_code"];
        }

        //=================Discount============
        $Discount1=$_POST["discount"];
        if(empty($Discount1)) 
        {
          $Discount_Err="Please Enter Discount Number";
          $hasError=true;

        }
        else if(!(is_numeric($Discount1)))
        {
            $Discount_Err="Please Enter Numeric Number";
          $hasError=true;

        }
        else
        {
            $Discount=$_POST["discount"];
        }

        // //==================Times To Use============
        // $Use1=$_POST["Use"];
        // if(empty($Use1)) 
        // {
        //   $Use_Err="Please Enter Time To Use Number";
        // }
        // else if(!(is_numeric($Use1)))
        // {
        //     $Use_Err="Please Enter Numeric Number";
        // }
        // else if (!isset($_POST['checkbox1'])) 
        // {
        //     $Use_Err = "Please Mark the Checkbox";
        // }  
        // else
        // {
        //     $Use=$_POST["Use"];
        // }

        if(!$hasError) {
            $temp=$Day."/".$Month."/".$Year;

            $rs = InsertCoupon($c_code, $C_Type, $Status, $temp, $Discount);
            
            if ($rs === true)
            {
                
                echo "<script>alert('Support Submitted!');</script>";
                
                
                
            }
        }

        

    }
    function InsertCoupon($c_code, $C_Type, $Status, $temp, $Discount){
	
        $query = "INSERT INTO coupon values (NULL,'$c_code', '$C_Type', '$Status', '$temp','$Discount')";
        return execute($query);
    }
     
?>