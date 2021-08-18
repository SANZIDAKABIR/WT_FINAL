<?php
include "models/db_config.php";
    $cy = date("Y"); 
    $Title=$Offer=$Description=$Day=$Month=$Year="";
    $TitleErr=$OfferErr=$DescriptionErr=$Day_Err=$Month_Err=$Year_Err="";
    $Title1=$Description1="";
    $error = false;
    if (isset($_POST['create'])) 
    {
        //=========Title===========
        $Title1=$_POST["Title"];
        if(empty($Title1)) 
        {
            $TitleErr="Please Enter Title";
            $error = true;
        }
        else       
        {
            $Title=$_POST["Title"];
            
        }

        //=========Offer Type===========
        if(empty($_POST["Offer"])) 
        {
            $OfferErr="Please Select Offer Type";
            $error = true;
        }
        else       
        {
            $Offer=$_POST["Offer"];
        }

        //=========Title===========
        $Description1=$_POST["Description"];
        if(empty($Description1)) 
        {
            $DescriptionErr="Please Enter Description";
            $error = true;
        }
        else       
        {
            $Description=$_POST["Description"];
        }

        //=========Offer Expiry Date============
        if(empty($_POST["Day"])) 
        {
          $Day_Err="Please Select Day";
          $error = true;
        }
        else
        {
            $Day=$_POST["Day"];
        }
        if(empty($_POST["Month"])) 
        {
          $Month_Err="Please Select Month";
          $error = true;
        }
        else
        {
            $Month=$_POST["Month"];
        }
        if(empty($_POST["Year"])) 
        {
          $Year_Err="Please Select Year";
          $error = true;
        }
        else
        {
            $Year=$_POST["Year"];
        }
           
    if(!$error) 
    {
        $temp = $Day."/".$Month."/".$Year;

        $rs = InsertNew_offer_creation($Title, $Offer, $Description, $temp);
        
        if ($rs === true)
        {
            
            echo "<script>alert('Support Submitted!');</script>";
            
            
            
        }
    }
}


function InsertNew_offer_creation($Title, $Offer, $Description, $temp){

    $query = "INSERT INTO offer_creation values (NULL,'$Title', '$Offer', '$Description', '$temp')";
    return execute($query);
}
?>