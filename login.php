<?php

DEFINE ('DB_USER', 'proof');
DEFINE ('DB_PASSWORD', 'nnaemeke92');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME','proof');

$dbc = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die('wrong password' . mysql_error());
mysql_select_db(DB_NAME) OR die('<p>Could not select the database:</p>' . mysql_error());




if(isset($_POST['submit']))
{

//ERRROR VALIDATOR

$errors = ""; //Initalize errors var


if(empty($_POST['fname']))
{
$errors='y';
$fname_error="true";
}
else
{
$fname=$_POST['fname'];
}

if(empty($_POST['lname']))
{
$errors='y';
$lname_error="true";
}
else
{
$lname=$_POST['lname'];
}

if(empty($_POST['phone']))
{
$errors='y';
$phone_error="true";
}
else
{
$phone=$_POST['phone'];
$phone = str_replace (" ", "", $phone);
} 

if(empty($_POST['email']))
{
$errors='y';
$email_error="true";
}
else
{
$email=$_POST['email'];
} 

if(empty($_POST['address']))
{
$errors='y';
$address_error="true";
}
else
{
$address=$_POST['address'];
} 


if(empty($_POST['postalcode']))
{
$errors='y';
$postalcode_error="true";
}
else
{
$postalcode=$_POST['postalcode'];
$postalcode = str_replace (" ", "", $postalcode);
} 


if(empty($_POST['city']))
{
$errors='y';
$city_error="true";
}
else
{
$city=$_POST['city'];
} 


if(empty($_POST['terms']))
{
$errors='y';
$terms_error="true";
}
else
{
$terms=$_POST['terms'];
} 


$age=$_POST['age'];
$address2=$_POST['address2'];




if(trim($errors)=="")
{ 

$query = "INSERT INTO table(id,fname,lname,age,phone,email,address,address2,postalcode)VALUES('$id','$fname','$lname','$age',
'$phone','$email','$address','$address2','$postalcode')";
$result = mysql_query($query);

}

} 


?>


<form action='' method='post'>

<fieldset style='width:550px;text-align:left;border-width:2px;'><legend class='h3'>Dungeon Bootcamp Registration - Personal Information</legend>
<br>
<span style='color:#820010;font-size:12px;font-weight:normal;'>* required field</span><br><br>


<table width='350' border='0' style='padding-left:20px;'>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='fname'>First Name</label></td>
<td><input type='text' name='fname' id='fname' value='".$fname."'></td>
</tr>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='lname'>Last Name</label></td>
<td><input type='text' name='lname' id='lname' value='".$lname."'></td>
</tr>

<tr>
<td></td>
<td><label for='age'>Age</label></td>
<td><input type='text' name='age' id='age' value='".$age."'></td>
</tr>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='phone'>Contact Phone #</label></td>
<td><input type='text' name='phone' id='phone' value='".$phone."'></td>
</tr>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='email'>E-mail Address</label></td>
<td><input type='text' name='email' id='email' value='".$email."'></td>
</tr>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='address'>Address</label></td>
<td><input type='text' name='address' id='address' value='".$address."'></td>
</tr>

<tr>
<td></td>
<td><label for='address2'>Address 2</label></td>
<td><input type='text' name='address2' id='address2' value='".$address2."'></td>
</tr>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='postalcode'>Postal Code</label></td>
<td><input type='text' name='postalcode' id='postcode' value='".$postalcode."'></td>
</tr>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='city'>City</label></td>
<td><input type='text' name='city' id='city' value='".$city."'></td>
</tr>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='province'>Province</label></td>
<td><input type='text' name='province' id='state' value='Ontario' disabled></td>
</tr>

<tr>
<td><span style='color:#820010;'>*</span></td>
<td><label for='country'>Country</label></td>
<td><input type='text' name='country' id='country' value='Canada' disabled></td>
</tr>
</table>
<br>
<input type='checkbox' name='terms' id='terms' value='terms'"; if(isset($terms)){echo "CHECKED";} echo"><label for='terms'>I have read and understood the <a href='policies.php' rel="nofollow" target='_blank'>terms and conditions</label></a>

<table style='padding-left:20px;'>


<input type='submit' name='submit' value='Next' style='background-color:#464443;font-size:11px;color:white;font-weight:bold;border:solid 1px white;padding:2px 5px 2px 5px;'>


</fieldset>

</form>