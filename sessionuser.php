<?php

if(isset($_SESSION['c_ic']))
{
	if($_SESSION['cic']=="admin")
	{
		header('location:adminhome.php');
	}
}


?>



