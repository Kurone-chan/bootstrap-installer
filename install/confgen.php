<?php

  include("../includes/installheader.php");

  $sitehost = $_POST['sitehost'];
  $sitename = $_POST['sitename'];
  $sqlhost = $_POST['sqlhost'];
  $sqluser = $_POST['sqlname'];
  $sqlpass = $_POST['sqlpass'];
  $sqldata = $_POST['sqldata'];
  
  $link = mysqli_connect($sqlhost, $sqluser, $sqlpass, $sqldata);
  
  if(!$link)
  {
	  header("location: ./setup.php?error=1&errdata=" . mysqli_connect_error());
  }elseif($sqlhost == NULL or $sqlhost == "")
  {
	  header("location: ./setup.php?error=2");
  }elseif($sqldata == NULL or $sqldata == "")
  {
	  header("location: ./setup.php?error=3");
  }
  
  mysqli_close($link);

?>

<?php
  if(!file_exists("../includes/config.php"))
  {
  	  echo '
  	    <div class="panel panel-default">
          <div class="panel-body">
            <h4>Saving Configuration File...</h4>
          </div>
        </div>
  	  ';
	  $config = fopen("../includes/config.php", "w");
	  $data = '
<?php
  // Auto-Generated Configuration File
  //
  // Created on ' . date("F j, Y") . ' at ' . date("G:i:s") . '

  // Community Hostname
  $sitehost = "' . $sitehost . '";

  // Community Name
  $sitename = "' . $sitename . '";

  // MySQL Hostname
  $sqlhost = "' . $sqlhost . '";

  // MySQL Username
  $sqluser = "' . $sqluser . '";

  // MySQL Password
  $sqlpass = "' . $sqlpass . '";

  // MySQL Database
  $sqldata = "' . $sqldata . '";
?>';
	  
	  fwrite($config, $data);
	  
	  fclose($config);
	  
	  header("location: admin.php");
  }else
  {
	  echo '
	    <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <strong>Error!</strong> A config.php file already exists! Please rename or remove this and re-run the installer.
        </div>
	  ';
  }
?>

<?php include("../includes/installfooter.php");