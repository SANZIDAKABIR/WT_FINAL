<?php
$Location=$Rent=$Price=$Date="";
    $LocationErr=$RentErr=$PriceErr=$DateErr="";
    $Price1="";
    if (isset($_POST['create'])) 
    {
        //=========Location===========
        if(empty($_POST["Location"])) 
        {
            $LocationErr="Please Select a Location";
        }
        else       
        {
            $Location=$_POST["Location"];
        }

        //=========Rent Type===========
        if(empty($_POST["Rent"])) 
        {
            $RentErr="Please Select Rent Type";
        }
        else       
        {
            $Rent=$_POST["Rent"];
        }


        //=========Price Range===========
        $Price1=$_POST["Price"];
        if(empty($Price1)) 
        {
            $PriceErr="Please Enter Price Range";
        }
        else if(!(is_numeric($Price1)))
        {
            $PriceErr="Please Enter Numeric Price Range";
        }
        else       
        {
            $Price=$_POST["Price"];
        }

        //=========Date===========
        if(empty($_POST["Date"])) 
        {
            $DateErr="Please Select Date";
        }
        else       
        {
            $Date=$_POST["Date"];
        }
    }
?>