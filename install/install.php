<?php
  function installTheme($themename)
  {
  	  if(!file_exists("../resources/css/themes/" . $themename))
  	  {
	  	mkdir("../resources/css/themes/" . $themename);
	    file_put_contents("../resources/css/themes/" . $themename . "/bootstrap.min.css", file_get_contents("http://bootswatch.com/" . $themename . "/bootstrap.min.css"));
	  }else
	  {
		  $status = "Cannot download theme. Theme already installed!";
	  }
	  $status = "Installed.";
	  header("location: ./modules.php");
  }
  
  if(isset($_GET['theme']))
  {
	  installTheme($_GET['theme']);
  }
?>