<head>

<title>Login | Glife.Cf - Give Blood To Save Life</title>

</head>

<body>

<?php

include_once('header.php');

?>

<?php

include_once('includes/class.user.php');

if(isset($_POST['submit'])){

$user_email = htmlentities($_POST['user_email']);

$user_password = md5($_POST['user_password']);

$user = new User();

$login = $user->Login($user_email,$user_password);

}

?>

<?php

if(isset($_SESSION['user_email'])){
	
	header('location:index');
	
}else{
	
	echo <<<_END

<table width="100%" cellspacing="0px">

<tr>

<td class="category" width="1%">

<img height="15px;" width="15px;;" src="icons/heart-rate-white.png"/> 

</td>

<td class="category" width="99%">

Login

</td>

</tr>

</table>

<div class="border">

<center>

<form name="login" action="" method="post">

<input name="user_email" class="text" type="text" placeholder="Email">

<input name="user_password" class="text" type="password" placeholder="Password">

<input name="submit" class="submit" type="submit" value="Login">

</form>

</center>

</div>

_END;

}

?>

<?php

include_once('footer.php');

?>

</body>