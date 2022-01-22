<head>

<title>Blood Group | Glife.Cf - Give Blood To Save Life</title>

</head>

<body>

<?php

include_once('header.php');

?>

<?php

if(isset($_GET['group'])){

$blood_group = htmlentities($_GET['group']);

echo $blood_group;

}else{
	
echo <<<_END
 
 <div class="error">
 
 Page Not Found
 
 </div>
 
_END;

}

?>

<?php

include_once('footer.php');

?>

</body>