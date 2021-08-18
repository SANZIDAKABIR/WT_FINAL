<?php 
 require_once "controller/cupon_controller.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New Coupon</title>
	
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
				if(get("c_code").value == ""){
					hasError = true;
					get("c_code_Err").innerHTML = "*Code Req";
				}
				if(get("c_type").selectedIndex == 0){
					hasError=true;
					get("C_Type_Err").innerHTML = "*Type Req";
				}
				if(get("discount").value == ""){
					hasError = true;
					get("Discount_Err").innerHTML = "*Discount Req";
				}
				if(get("Use").value == ""){
					hasError = true;
					get("Use_Err").innerHTML = "*use Req";
				}
				if(get("Status").value == ""){
					hasError = true;
					get("Status_Err").innerHTML = "*Status Req";
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
				get("c_code_Err").innerHTML = "*Code Req";
				get("C_Type_Err").innerHTML = "*Type Req";
                get("Discount_Err").innerHTML = "*Discount Req";
                get("Use_Err").innerHTML = "*use Req";
                get("Status_Err").innerHTML = "*Status Req";
                get("Day_Err").innerHTML = "*Day Req";
				get("Month_Err").innerHTML = "*Month Req";
                get("Year_Err").innerHTML = "*Year Req";				
			}

</script>
</head>
<body>
    <form method="post" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset style="background-color:cyan">
        <legend><h3>Add New Coupon</h3></legend>  
            <table>
                <tr>
                    <td><label>Coupon Code</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input id="c_code" type="text" name="c_code" value="<?php echo $c_code1; ?>"></td>
                    <td> <span id="c_code_Err"> <?php echo $c_code_Err; ?> </span> </td>
                </tr>
            </table>

            <table>
                <tr> 
                    <td><label>Coupon Type</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select id="c_type" name="c_type">
                        <option disabled selected>% Off</option>
                        <?php for ($j=5; $j <= 80 ; $j=$j+5) 
                        { 
                            # code...
                        ?>
                        <option value="<?php echo $j; ?>" <?php if ($C_Type == $j) echo ' selected="selected"'; ?>><?php echo $j."%"; ?></option> 
                        <?php } ?>
                    </select></td>
                     
                    <td> <span id="C_Type_Err"> <?php echo $C_Type_Err; ?> </span> </td>					
                    
                </tr>
            </table> 

            <table>
                <tr>
                    <td><label>Discount</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input id="discount" type="text" name="discount" value="<?php echo $Discount1; ?>"></td>
					<td> <span id="Discount_Err"> <?php echo $Discount_Err; ?> </span> </td>
                    
                </tr>
            </table>

             <table>
                <tr>
                    <td><label>Times To Use</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input type="text" id="Use" name="Use" value="<?php echo $Use1;?>"></td>
                    <td></td>
                    <td><input type="checkbox" name="checkbox1" value="">Per Logged in Customer</td>
                    <td> <span id="Use_Err"> <?php echo $Use_Err; ?> </span> </td>
                </tr>
            </table>

            <table>
                <tr> 
                    <td><label>Status</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select id="Status" name="Status">
                        <option disabled selected>None</option>
                        <option value="Active" <?php if ($Status == 'Active') echo ' selected="selected"'; ?>>Active</option>
                        <option value="Deactive" <?php if ($Status == 'Deactive') echo ' selected="selected"'; ?>>Deactive</option>
                    </select></td>
                    <td> <span id="Status_Err"> <?php echo $Status_Err; ?> </span> </td>
                </tr>
            </table> 

            <table>
                <tr>
                    <td>
                        <label >Expires : </label>
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
                        <?php for ($i=1900; $i <= $cy ; $i++) 
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
                        <input type="submit" id="btn" name="create">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>