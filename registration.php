<head>

<title>Registration | Glife.Cf - Give Blood To Save Life</title>

</head>

<body>

<?php

include_once('header.php');

?>

<table width="100%" cellspacing="0px">

<tr>

<td class="category" width="1%">

<img height="15px;" width="15px;;" src="icons/heart-rate-white.png"/> 

</td>

<td class="category" width="99%">

Registration

</td>

</tr>

</table>

<?php

include_once('header.php');

include_once('includes/class.user.php');

if(isset($_POST['submit'])){
	
	$full_name = htmlentities($_POST['first_name'] . " " . $_POST['last_name']);
	
	$user_name = htmlentities($_POST['user_name']);
	
	$blood_group = htmlentities($_POST['blood_group']);
	
	$user_email = htmlentities($_POST['user_email']);
	
	$user_phone = htmlentities($_POST['user_phone']);
	
	$user_password = md5($_POST['user_password']);
	
	$user = new User();
	
	$registration = $user->Registration($full_name,$user_name,$blood_group,$user_email,$user_phone,$user_password);
	
}

?>


<?php

if(isset($_SESSION['user_email'])){
	
	header('location:index');
	
}else{
	
	echo <<<_END
	
	
<center>

<div class="border">

<form name="" action="registration" method="post">

<input name="first_name" class="text" type="text" placeholder="First Name" required>

<input name="last_name" class="text" type="text" placeholder="Last Name" required>

<input name="user_name" class="text" type="text" placeholder="User Name" required>

<select name="blood_group" class="text" required>

<option value="None" selected>Choose Blood Group</option>

<option value="AB+">AB+</option>

<option value="AB-">AB-</option>

<option value="A+">A+</option>

<option value="A-">A-</option>

<option value="B+">B+</option>

<option value="B-">B-</option>

<option value="O+">O+</option>

<option value="O-">O-</option>

</select>

<input name="user_email" class="text" type="text" placeholder="Email" required>

<input name="user_phone" class="text" type="text" placeholder="Phone" required>

<input name="user_password" class="text" type="text" placeholder="Password" required>

<input name="submit" class="submit" type="submit" value="Registration">

</form>

</div>

</center>

_END;

}

?>

<?php

include_once('footer.php');

?>

</body>