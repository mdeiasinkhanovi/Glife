<head>

<title>Location | Glife.Cf - Give Blood To Save Life</title>

</head>

<body>

<?php

include_once('header.php');

?>

<?php

if(isset($_GET['division'])){

$location = htmlentities($_GET['division']);

echo $location;

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