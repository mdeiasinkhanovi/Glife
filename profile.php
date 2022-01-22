<head>

<title>Profile | Glife.Cf - Give Blood To Save Life</title>

</head>

<body>

<?php

include_once('header.php');

?>


<?php

include_once('includes/config.php');

$user_name = $_GET['user_name'];

if(isset($user_name)){	


$sql = "SELECT * FROM user_details WHERE user_name='$user_name'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	 
	$user_fullname = $row['user_fullname'];
	 
	$user_name = $row['user_name'];
	
    $user_blood_group = $row['user_blood_group'];
	
	$user_district = $row['user_district'];

	echo <<<_END
	
	$user_fullname
	
	$user_name
	
	$user_blood_group
	
	$user_district

_END;

 }
 
}

?>

<?php

include_once('footer.php');

?>

</body>