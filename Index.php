 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form  Validation</title>
 	<script type="text/javascript">
 		var full_name = document.forms["login"]["full_name"].value;
 		var Mobile = document.forms["login"]["Mobile"].value;
 		var email = document.forms["login"]["email"].value;
 		var state = document.forms["login"]["state"].value;
 		var full_name = document.forms["login"]["full_name"].value;
 		var full_name = document.forms["login"]["full_name"].value;
 		alert(state);
 		alert("hello");
 	</script>
 </head>
 <body>
 	<form method="post" action="abc.html" name="login">
		<center>
		<table border="2">
			<tr><td colspan="3"><center>Login Details</center> </td></tr>
			<tr>
				<td style="text-align: right;">Enter Yout full Name :-</td>
				<td><input type="text" name="full_name" placeholder="UserName" required="required" />
				<td><p name="full_name" style="color: red"></td>
			</tr>
			<tr>
				<td style="text-align: right;">Enter Yout Mobile Number :-</td>
				<td><input type="text" name="Mobile" placeholder="UserName" required="required" /></td>
				<td><p name="full_name" style="color: red"></td>
			</tr>
			<tr>
				<td style="text-align: right;">Enter Yout Email Address :-</td>
				<td><input type="text" name="email" placeholder="Enter Email" required="required" /></td>
				<td><p name="full_name" style="color: red"></td>
			</tr>
			<tr>
				<td style="text-align: right;">Select Your State :-</td>
				<td>
					 <select name="state" required="required">
    <option value="">Select State</option>
    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
    <option value="Daman and Diu">Daman and Diu</option>
    <option value="Delhi">Delhi</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Orissa">Orissa</option>
    <option value="Pondicherry">Pondicherry</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttaranchal">Uttaranchal</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="West Bengal">West Bengal</option>
    </select>
				</td>
				<td><p name="full_name" style="color: red"></td>
			</tr>

			<tr>
				<td style="text-align: right;">Enter your city :- </td>
				<td><input type="text" name="pwd" placeholder="Enter your city" required="required" /></td>
				<td><p name="full_name" style="color: red"></td>
			</tr>
			<tr>
				<td style="text-align: right;">Enter Yout Password :-</td>
				<td><input type="Password" name="pwd" placeholder="Enter your password" required="required" /></td>
				<td><p name="full_name" style="color: red"></td>
			</tr>
			<tr>
				<td style="text-align: right;">Enter Yout Password :-</td>
				<td><input type="Password" name="pwd" placeholder="Confirm your password" required="required" /></td>
				<td><p name="full_name" style="color: red"></td>
			</tr>
			<tr><td colspan="2"><center><input type="submit" name="submit" value="Login" > </center></td></tr>
		</table>
		</center>
	</form>
 </body>
 </html>