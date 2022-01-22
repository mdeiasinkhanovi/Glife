<?php

if(isset($_SESSION['user_email'])){
	
	echo <<<_END

<table width="100%" cellspacing="0px">

<tr>

<td class="category" width="1%">

<img height="15px;" width="15px;;" src="icons/heart-rate-white.png"/> 

</td>

<td class="category" width="99%">

Settings

</td>

</tr>

</table>

<a href="login">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/setting-black.png"/> 

</td>

<td>

Change Name

</td>

</tr>

</table>

</div>

</a>

<a href="login">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/setting-black.png"/> 

</td>

<td>

Change Profile

</td>

</tr>

</table>

</div>

</a>

<a href="login">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/setting-black.png"/> 

</td>

<td>

Change Profile Picture

</td>

</tr>

</table>

</div>

</a>

<a href="login">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/setting-black.png"/> 

</td>

<td>

Change User Name

</td>

</tr>

</table>

</div>

</a>

<a href="registration">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/setting-black.png"/> 

</td>

<td>

Change Email

</td>

</tr>

</table>

</div>

</a>

<a href="about-blood-donation">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/setting-black.png"/> 

</td>

<td>

Change Password

</td>

</tr>

</table>

</div>

</a>

<a href="about-blood-donation">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/setting-black.png"/> 

</td>

<td>

Delete Your Account

</td>

</tr>

</table>

</div>

</a>

_END;
	
}else{
	echo <<<_END
	
	<table width="100%" cellspacing="0px">

<tr>

<td class="category" width="1%">

<img height="15px;" width="15px;;" src="icons/heart-rate-white.png"/> 

</td>

<td class="category" width="99%">

More

</td>

</tr>

</table>

<a href="login">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/more-black.png"/> 

</td>

<td>

Login

</td>

</tr>

</table>

</div>

</a>

<a href="registration">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/more-black.png"/> 

</td>

<td>

Registration

</td>

</tr>

</table>

</div>

</a>

<a href="about-blood-donation">

<div class="list">

<table>

<tr>

<td>

<img height="15px;" width="15px;;" src="icons/more-black.png"/> 

</td>

<td>

About Blood Donation

</td>

</tr>

</table>

</div>

</a>

_END;

}

?>
	