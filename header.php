<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8" />

<meta name="author" content="Md Eiasin Khan Ovi" />

<meta name="description" content="Give Blood To Save Life" />

<meta name="keywords" content="Glife,glife.cf,www.glife.cf,need blood,bangladesh,emergency blood,donate blood," />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link type="image/png" rel="icon" href="icons/icon.png">
	
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="header">

<table width="100%">

<tr>

<td width="95%">

<a href="/Glife/">

<img height="50px;" width="150px;" src="icons/logo-white.png"/>

</a>

</td>

<td width="5%">

<a href="search">

<img align="right" height="25px" width="25px;" src="icons/search-white.png"/>

</a>

</td>

</tr>

</table>

</div>

<?php

session_start();

if(isset($_SESSION['user_email'])){

echo <<<_END

<table width="100%" cellpadding="0px" cellspacing="0px">

<td align="center" width="33%">

<a href="index">

<div class="list">

Home

</div>

</a>

</td>

<td align="center" width="33%">

<a href="profile?user_name=$_SESSION[user_name]">

<div class="list">

Profile

</div>

</a>

</td>

<td align="center" width="33%">

<a href="logout">

<div class="list">

Logout

</div>

</a>

</td>

</table>

<table width="100%" cellspacing="0px">

<tr>

<td class="category" width="1%">

<img height="15px;" width="15px;;" src="icons/heart-rate-white.png"/> 

</td>

<td class="category" width="99%">

Search

</td>

</tr>

</table>

_END;

}

?>

<div class="ad">

<form action="">

<input name="search" class="text" type="text" placeholder="Search Blood.."> 

<br/>

<input class="submit" type="submit" value="Search">

</form>

</div>

</body>