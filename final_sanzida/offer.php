<?php 
require_once "controller/offer_controller.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Offer News Creation</title>
	<style>
	#btn{
		color:white; 
		background-color:blue; 
		border-radius:5px;
		font-family:calibri;
	    padding-left:10px;
	    padding-right:10px;
	    padding-top:5px;
	    padding-bottom:5px;
	}
   
	</style>
	
	<script>
	//JavaScript
var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
				if(get("Title").value == ""){
					hasError = true;
					get("TitleErr").innerHTML = "*Title Req";
				}
				if(get("Offer").selectedIndex == 0){
					hasError=true;
					get("OfferErr").innerHTML = "*Offer Req";
				}
				if(get("Description").value == ""){
					hasError = true;
					get("DescriptionErr").innerHTML = "*Description Req";
				}
				if(get("Day").selectedIndex == 0){
					hasError=true;
					get("Day_Err").innerHTML = "*Day Req";
				}
				if(get("Month").selectedIndex == 0){
					hasError=true;
					get("Month_Err").innerHTML = "*Month Req";
				}
				if(get("Year").selectedIndex == 0){
					hasError=true;
					get("Year_Err").innerHTML = "*Year Req";
				}

				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("TitleErr").innerHTML = "*Title Req";
				get("OfferErr").innerHTML = "*Offer Req";
				get("DescriptionErr").innerHTML = "*Description Req";
                get("Day_Err").innerHTML = "*Day Req";
				get("Month_Err").innerHTML = "*Month Req";
                get("Year_Err").innerHTML = "*Year Req";				
			}

</script>
</head>
<body>
    <form method="post" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset style="background-color:cyan">
        <legend></legend>  

            <table>
                <tr>
                    <td><label>Title</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input id="Title" type="text" name="Title" value="<?php echo $Title1; ?>"></td>
                    <td> <span id="TitleErr"><?php echo $TitleErr; ?></span> </td>
                </tr>
            </table>
            
            <table>
                <tr> 
                    <td><label>Offer Type</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select id="Offer" name="Offer">
                        <option disabled selected>Select Offer Type</option>
                        <option value="Eid Offer" <?php if ($Offer == 'Eid Offer') echo ' selected="selected"'; ?>>Eid Offer</option>
                        <option value="Valentines Day Offer" <?php if ($Offer == 'Valentines Day Offer') echo ' selected="selected"'; ?>>Valentines Day Offer</option>
                        <option value="New Year Offer" <?php if ($Offer == 'New Year Offer') echo ' selected="selected"'; ?>>New Year Offer</option>
                    </select></td>
                    <td>
                       <span id="OfferErr"> <?php echo $OfferErr; ?></span>
                    </td>
                </tr>
            </table> 

             <table>
                <tr> 
                    <td><label>Description</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td>
                        <textarea id="Description" name="Description" rows="4" cols="50" value=""></textarea>
                    </td>
                    <td>
                        <span id="DescriptionErr"><?php echo $DescriptionErr; ?></span>
                    </td>
                </tr>
            </table> 

            <table>
                <tr>
                    <td>
                        <label >Offer Expiry Date : </label>
                        <select id="Day" name="Day"> 
                        <option disabled selected>Day</option>
                        <?php for ($i=1; $i <= 31 ; $i++) 
                        { 
                            # code...
                        ?>
                        <option value="<?php echo $i; ?>" <?php if ($Day == $i) echo ' selected="selected"'; ?>><?php echo $i; ?></option> 
                        <?php } ?>
                        </select>
                    </td>
                    <td>
                        <select id="Month" name="Month"> 
                        <option disabled selected>Month</option>
                        <?php for ($i=1; $i <= 12 ; $i++) 
                        { 
                            # code...
                        ?>
                        <option value="<?php echo $i; ?>" <?php if ($Month == $i) echo ' selected="selected"'; ?>><?php echo $i; ?></option> 
                        <?php } ?>
                        </select>
                    </td>
                    <td>
                        <select id="Year"  name="Year"> 
                        <option disabled selected>Year</option>
                        <?php for ($i=2010; $i <= $cy ; $i++) 
                        { 
                            # code...
                        ?>
                        <option value="<?php echo $i; ?>" <?php if ($Year == $i) echo ' selected="selected"'; ?>><?php echo $i; ?></option> 
                        <?php } ?>
                        </select>
                    </td>
                    <td>
                        <?php echo $Day_Err; ?>
                        <?php echo $Month_Err; ?>
                        <?php echo $Year_Err; ?>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <input id="btn" type="submit" name="create">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>