<?php

//Make short Variable names
$fristname=$_REQUESt['frist_name_field'];$lastname=$_REQUESt["last_name_field];									   
$lastname=$_REQUESt['last_name_field'];
$phonenumber=$_REQUESt['phone_number_field'];
$gender=$_REQUESt['gender_field'];
$age=$_REQUESt['age_field'];
$available=$_REQUESt['available_field'];
$comments=$_REQUESt['comments_field'];
$hidden"=$_REQUESt['hidden_field'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Volunteer Form</title>
</head>
<body>
<fieldset>
<h1>Documwnt</h1>
<form action="	"																					  
	<fieldset>
<legend>My Info</legend>
<div>
<label>First Name:<input type="text" name="first_name_field"></label>
</div>
<div>
<label>Last Name:<input type="text" name="last_name_field"></label>
</div>
<div>
<label>Phone Number:<input type="text" name="phone_number_field"></label>
</div>
<div>
<label>Email Address:<input type="text" name="email_address_field"></label>
</div>
<div>Gender:</div>
<div>
<label>Male:<input type="radio" name="gender_field" checked="checked" value="M" ></label>
<label>Female:<input type="riadio" name="gender_field" value="F"></label>
</label>
</div>
<label>Age:</label>
<select name="age_field">
	<option>under18<input type="menu" name="age_field" value="under18"></option>
	<option>18-24<input type="menu" name="age_field" value="18-24"></option>
	<option>25-34<input type="menu" name="age_field" value="25-34"></option>
	<option>35-44<input type="menu" name="age_field" value="35-44"></option>
	<option>45-54<input type="menu" name="age_field" value="45-54"></option>
	<option>55-64<input type="menu" name="age_field" value="55-64"></option>
	<option>65 and over<input type="menu" name="age_field" value="65 and over"></option>
</select>
</div>
</fieldset>
<fieldset>
<legend>My Available</legend>

<h3>Days Available:</h3>
<div>		   
	<div><label>Sunday<input type="checkbox name=" available_field[]" value="sun" checked="checked"></label></div>
	<div><label>Monday<input type="checkbox name="available_field[]" value="mon"></label></div>
	<div><label>Tuesday<input type="checkbox name="available_field[]" value="tue"></label></div>
	<div><label>Wednesday<input type="checkbox name="available_field[]" value="web"></label></div>
	<div><label>Thursday<input type="checkbox name="available_field[]" value="thu"></label></div>
	<div><label>Friday<input type="checkbox name="available_field[]" value="fri"></label></div>
	<div><label>Saturday<input type="checkbox name="available_field[]" value="sat"></label></div>
</div>
<div>
<h3>Any Comments?</h3>
<textarea cols="20" rows="6" name="comments_field"></textarea>
</div>
</fieldset>
<input type="submit" value="Send Me">
<input type="hidden" name="hidden_field" value="Volunteer ###">
						 
</form>
</body>
</html>