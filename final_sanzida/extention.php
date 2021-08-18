<?php 
    require_once "controller/extention.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Form</title>
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
				if(get("Location").selectedIndex == 0){
					hasError=true;
					get("LocationErr").innerHTML = "*Location Req";
				}
				if(get("Rent").selectedIndex == 0){
					hasError=true;
					get("RentErr").innerHTML = "*Rent Req";
				}
				if(get("Price").value == ""){
					hasError = true;
					get("PriceErr").innerHTML = "*Price Req";
				}
				
				if(get("Date").selectedIndex == 0){
					hasError=true;
					get("DateErr").innerHTML = "*Date Req";
				}
				

				return !hasError;
				get("LocationErr").innerHTML = "*Location Req";
				get("RentErr").innerHTML = "*Rent Req";
				get("PriceErr").innerHTML = "*Price Req";
				get("DateErr").innerHTML = "*Date Req";
			}
			function refresh(){
				hasError=false;
								
			}

</script>
</head>
<body>
    <form method="post" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset style="background-color:cyan">
        <legend><h3>Search</h3></legend>  
            <table>
                <tr> 
                    <td><label>Location</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select id="Location" name="Location">
                        <option disabled selected>Select a Location</option>
                        <option value="Uttara" <?php if ($Location == 'Uttara') echo ' selected="selected"'; ?>>Uttara</option>
                        <option value="Nikunja" <?php if ($Location == 'Nikunja') echo ' selected="selected"'; ?>>Nikunja</option>
                        <option value="Kuratoli" <?php if ($Location == 'Kuratoli') echo ' selected="selected"'; ?>>Kuratoli</option>
                        <option value="Basudhora" <?php if ($Location == 'Basudhora') echo ' selected="selected"'; ?>>Basudhora</option>
                        <option value="Badda" <?php if ($Location == 'Badda') echo ' selected="selected"'; ?>>Badda</option>
                        <option value="Banani" <?php if ($Location == 'Banani') echo ' selected="selected"'; ?>>Banani</option>
                        <option value="Mirpur" <?php if ($Location == 'Mirpur') echo ' selected="selected"'; ?>>Mirpur</option>
                    </select></td>
                    <td>
                      <span id="LocationErr">  <?php echo $LocationErr; ?></span>
                    </td>
                </tr>
            </table> 

            <table>
                <tr> 
                    <td><label>Rent Type</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select id="Rent" name="Rent">
                        <option disabled selected>Select a Type</option>
                        <option value="Vehicle" <?php if ($Rent == 'Vehicle') echo ' selected="selected"'; ?>>Vehicle</option>
                        <option value="Instrument" <?php if ($Rent == 'Instrument') echo ' selected="selected"'; ?>>Instrument</option>
                        <option value="Apartment" <?php if ($Rent == 'Apartment') echo ' selected="selected"'; ?>>Apartment</option>
                    </select></td>
                    <td>
                       <span id="RentErr"> <?php echo $RentErr; ?></span>
                    </td>
                </tr>
            </table> 

            <table>
                <tr>
                    <td><label>Price Range</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input type="text" id="Price" name="Price" value="<?php echo $Price1; ?>"></td>
                    <td> <span id="PriceErr"><?php echo $PriceErr; ?></span> </td>
                </tr>
            </table>

             <table>
                <tr> 
                    <td><label>Date</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select id="Date" name="Date">
                        <option disabled selected>Select Date</option>
                        <option value="Newest" <?php if ($Date == 'Newest') echo ' selected="selected"'; ?>>Newest</option>
                        <option value="Oldest" <?php if ($Date == 'Oldest') echo ' selected="selected"'; ?>>Oldest</option>
                    </select></td>
                    <td>
                        <span id="DateErr"><?php echo $DateErr; ?></span>
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