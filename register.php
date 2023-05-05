<?php
include("setting.php");
$name=$_POST['name'];
$email=$_POST['email'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$sid=$_POST['sid'];
$pas=sha1($_POST['pass']);
if($name==NULL || $email==NULL || $sem==NULL || $branch==NULL || $sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($set,"INSERT INTO students(sid,name,branch,sem,password,email) VALUES('$sid','$name','$branch','$sem','$pas','$email')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="User Already Exists";
	}
}
?>
<!DOCTYPE html>
<html >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<link href="register.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
<nav class="navbar ">
  <span class="navbar-brand mb-0 h1">Libary Management System</span>
</nav>
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Registration Form
		</div>

		<form class="form" method="POST" action="#">
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">Name</label>
						<input type="text" name="name" id="fname">
					</div>
				</div>
				<div class="input_wrap">
					<label for="email">Email Address</label>
					<input type="text" name="email" id="email">
				</div>
				<div class="input_wrap">
					<label for="stdid">Student id</label>
					<input type="text" name="sid" id="stdid">
				</div>
				<div  class="input_wrap">
					<label for="sem">Select Sem</label>
					<select name="sem" style="width:100%;" class="fields" required>
					<option value="" disabled="disabled"  selected="selected">Select Sem</option>
					<option value="1">First Sem</option>
					<option value="2">Second Sem</option>
					<option value="3">Third Sem</option>
					<option value="4">Fourth Sem</option>
					<option value="5">Fifth Sem</option>
					<option value="6">Sixth Sem</option>
					<option value="7">Seventh Sem</option>
					<option value="8">Eighth Sem</option>
				</select>
					
				</div>
				<div class="input_wrap">
					<label for="branch" >Select Branch</label>
					<select name="branch" style="width:100%;" class="fields" required>
					<option value="" disabled="disabled" selected="selected"> Select Branch</option>
					<option value="Computer Engineering">Computer Engineering</option>
					<option value="Electronics Engineering">Electronics Engineering</option>
					<option value="Mechanical Engineering">Mechanical Engineering</option>
					<option value="Civil Engineering">Civil Engineering</option>
					<option value="Information Technology">Information Technology</option>
					</select>
				</div>
				<div class="input_wrap">
					<label for="country">Create Password</label>
					<input name="pass" type="text" id="country">
				</div>
				<div class="input_wrap">
					<input type="submit" value="Register Now" class="submit_btn">
				</div>
				<div class="input_wrap">
					<a href="index.php" style="text-align:center; text-decoration:none; color:black" type="submit" class="submit_btn">Go Back To Login</a>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- 
<span class="SubHead">Student Registration</span>
<br />
<br />

<form class="form" method="post" action="">
<table class="table">

<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" /></td></tr>

<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" /></td></tr>

<tr><td class="labels">Sem : </td>
<td>
<select name="sem" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Select Sem - -</option>
<option value="1">First Sem</option>
<option value="2">Second Sem</option>
<option value="3">Third Sem</option>
<option value="4">Fourth Sem</option>
<option value="5">Fifth Sem</option>
<option value="6">Sixth Sem</option>
<option value="7">Seventh Sem</option>
<option value="8">Eighth Sem</option>
</select>
</td></tr>

<tr><td class="labels">Branch : </td>
<td>
<select name="branch" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Select Branch - -</option>
<option value="Computer Engineering">Computer Engineering</option>
<option value="Electronics Engineering">Electronics Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Information Technology">Information Technology</option>
</select>
</td></tr>
<tr>
	<td class="labels">Student ID : </td>
	<td><input type="text" name="sid" class="fields" placeholder="Enter Student ID" required="required" size="25" />
</td>
</tr>
<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" placeholder="Enter Password" required="required" size="25" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Register" class="fields" /></td></tr>
</table>
</form><br />
<br />
<a href="index.php" class="link">Go Back</a>
<br />
<br />

</div>
</div> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body> 
</html>
