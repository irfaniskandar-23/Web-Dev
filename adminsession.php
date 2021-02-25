<?php
    if(!session_id())
    {
    	session_start();
    }

    if(isset($_SESSION['c_ic'])!='admin')
    {
    	header('location:index.php');
    }

  ?>