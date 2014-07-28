<?php
  $navstep = "Step 1: Core Configuration";
  include("../includes/installheader.php");
?>

<?php

  if(file_exists("../includes/config.php"))
  {
	  header("location: ./admin.php");
  }

  if(isset($_GET['error']))
  {
	  $errno = $_GET['error'];
	  if($errno == 1)
	  {
		  echo '
		    <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Error!</strong> ' . $_GET['errdata'] . '. Please verify your settings and try again!
            </div>
		  ';
	  }elseif($errno == 2)
	  {
		  echo '
		    <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Error!</strong> MySQL Hostname is blank. Please verify your settings and try again!
            </div>
		  ';
	  }elseif($errno == 3)
	  {
		  echo '
		    <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Error!</strong> MySQL Database is blank. Please verify your settings and try again!
            </div>
		  ';
	  }
  }
?>

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Configuration Creator</h4>
    <hr />
    <form action="confgen.php" method="post">
      <div class="form-group">
        <label for="sitehost">Community Hostname</label>
        <input type="text" name="sitehost" id="sitehost" class="form-control" value="<?php echo str_replace("/install/setup.php", "", $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']); ?>" />
      </div>
      <div class="form-group">
        <label for="sitename">Community Name</label>
        <input type="text" name="sitename" id="sitename" class="form-control" placeholder="Example: My Community" />
      </div>
      <div class="form-group">
        <label for="sqlhost">MySQL Hostname</label>
        <input type="text" name="sqlhost" id="sqlhost" class="form-control" placeholder="Usually localhost" />
      </div>
      <div class="form-group">
        <label for="sqlname">MySQL Username</label>
        <input type="text" name="sqlname" id="sqlname" class="form-control" placeholder="Usually root" />
      </div>
      <div class="form-group">
        <label for="sqlpass">MySQL Password</label>
        <input type="password" name="sqlpass" id="sqlpass" class="form-control" placeholder="Your MySQL Account Password" />
      </div>
      <div class="form-group">
        <label for="sqldata">MySQL Database</label>
        <input type="text" name="sqldata" id="sqldata" class="form-control" placeholder="An empty database to fill" />
      </div>
      <button type="submit" class="btn btn-primary btn-sm">Generate Configuration File</button>
    </form>
  </div>
</div>

<?php include("../includes/installfooter.php"); ?>