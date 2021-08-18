<?php 
require_once "controller/support_controller.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>IT Service Request Form</title>
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
				if(get("F_Name").value == ""){
					hasError = true;
					get("F_NameErr").innerHTML = "*F Name Req";
				}
				if(get("L_Name").value == ""){
					hasError = true;
					get("L_NameErr").innerHTML = "*L Name Req";
				}
				if(get("Department").selectedIndex == 0){
					hasError=true;
					get("DepartmentErr").innerHTML = "*Department Req";
				}
				if(get("Manager").selectedIndex == 0){
					hasError=true;
					get("ManagerErr").innerHTML = "*Manager Req";
				}
				if(get("Email").value == ""){
					hasError = true;
					get("EmailErr").innerHTML = "*Email Req";
				}
				
				if(get("Phone").selectedIndex == 0){
					hasError=true;
					get("Phone_NErr").innerHTML = "*Phone Req";
				}
				

				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("F_NameErr").innerHTML = "*F Name Req";
				get("L_NameErr").innerHTML = "*L Name Req";
				get("DepartmentErr").innerHTML = "*Department Req";
				get("ManagerErr").innerHTML = "*Manager Req";
				get("EmailErr").innerHTML = "*Email Req";
				get("Phone_NErr").innerHTML = "*Phone Req";
								
			}

</script>
</head>
<body>
    <form method="post" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset style="background-color:cyan">
        <legend></legend>  
            <table>
                <tr>
                    <td><label>First Name</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input id="F_Name" type="text" name="F_Name" value="<?php echo $F_Name1; ?>"></td>
                    <td> <span id="F_NameErr"> <?php echo $F_NameErr; ?></span> </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><label>Last Name</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input id="L_Name" type="text" name="L_Name" value="<?php echo $L_Name1; ?>"></td>
                    <td> <span id="L_NameErr"><?php echo $L_NameErr; ?></span> </td>
                </tr>
            </table> 

            <table>
                <tr> 
                    <td><label>Department</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select id="Department" name="Department">
                        <option disabled selected>Chose Department</option>
                        <option value="AA" <?php if ($Department == 'AA') echo ' selected="selected"'; ?>>AA</option>
                        <option value="BB" <?php if ($Department == 'BB') echo ' selected="selected"'; ?>>BB</option>
                        <option value="CC" <?php if ($Department == 'CC') echo ' selected="selected"'; ?>>CC</option>
                    </select></td>
                    <td>
                       <span id="DepartmentErr"> <?php echo $DepartmentErr; ?></span>
                    </td>
                </tr>
            </table> 

            <table>
                <tr> 
                    <td><label>Manager</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select id="Manager" name="Manager">
                        <option disabled selected>Chose Manager</option>
                        <option value="A" <?php if ($Manager == 'A') echo ' selected="selected"'; ?>>A</option>
                        <option value="B" <?php if ($Manager == 'B') echo ' selected="selected"'; ?>>B</option>
                        <option value="C" <?php if ($Manager == 'C') echo ' selected="selected"'; ?>>C</option>
                    </select></td>
                    <td>
                        <span id="ManagerErr"><?php echo $ManagerErr; ?></span>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td><label>Email Address</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input id="Email" type="text" name="Email" value="<?php echo $Email1; ?>"></td>
                    <td> <span id="EmailErr"><?php echo $EmailErr; ?> </td></span>
                </tr>
            </table>

            <table>
                <tr>
                    <td><label>Phone Number</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input id="Phone" type="text" name="Phone_N" value="<?php echo $Phone_N1; ?>"></td>
                    <td> <span id="Phone_NErr"><?php echo $Phone_NErr; ?> </td></span>
                </tr>
            </table> 

            <table>
                <tr>
                    <td><label>What are you having issues with?</label></td>
                    <td><?php echo $IssuesErr; ?></td>
                    <td><?php echo $checkErr; ?></td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="box1[0]" value="Laptop"> <label>Laptop </label>
                        <input type="checkbox" name="box1[1]" value="Laptop_Carry_Case"><label>Laptop Carry Case</label>
                        <input type="checkbox" name="box1[2]" value="AC_Power_Cord"><label>AC Power Cord</label>
                        <input type="checkbox" name="box1[3]" value="Phone"><label>Phone</label>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>
                        <input id="btn" type="submit" name="submit" >
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>