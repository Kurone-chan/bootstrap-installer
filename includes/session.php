<?php
  session_start();
  
  if(!session_is_registered("bscLoginUser"))
  {
  	$user = "";
  }else
  {
	$user = $_SESSION['bscLoginUser'];
  }
?>