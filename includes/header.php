<?php
  if(file_exists("install"))
  {
	  header("location: install");
  }
?>
<?php include("config.php"); ?>
<?php include("session.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $sitename; ?></title>
    
    <link href="//<?php echo $sitehost; ?>/resources/css/themes/simplex/bootstrap.min.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
    
    <?php //include("pluginloader.php"); ?>
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Show/Hide Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="//<?php echo $sitehost; ?>"><?php echo $sitename; ?></a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="//<?php echo $sitehost; ?>">Home</a></li>
          </ul>
             
          <ul class="nav navbar-nav navbar-right">
            <?php
              if($user == "")
              {
	              echo '<li><a href="//' . $sitehost . '/session/login.php">Login</a></li>';
              }else
              {
	              $link = mysqli_connect($sqlhost, $sqluser, $sqlpass, $sqldata);
	                
	              $sql = "SELECT * FROM users WHERE username='" . $user . "'";
	              
	              $usr = mysqli_query($link, $sql);
	                
	              $userdata = mysqli_fetch_array($usr);
	              
	              if(($userdata['firstname'] != "" or $userdata['firstname'] != NULL) and ($userdata['lastname'] != "" or $userdata['lastname'] != NULL))
	              {
		              echo '
		                <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, ' . $userdata['firstname'] . ' ' . $userdata['lastname'] . ' <b class="fa fa-angle-down"></b></a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-header">Profile Actions</li>
                            <li><a href="//' . $sitehost . '">Example Link</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Example Category</li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="//' . $sitehost . '/session/logout.php">Logout</a></li>
                          </ul>
                        </li>
		              ';
	              }else
	              {
		              echo '
		                <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, ' . $user . ' <b class="fa fa-angle-down"></b></a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-header">Profile Actions</li>
                            <li><a href="//' . $sitehost . '">Example Link</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Example Category</li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="//' . $sitehost . '/session/logout.php">Logout</a></li>
                          </ul>
                        </li>
		              ';
	              }
	                
	              mysqli_close($link);
              }
              
            ?>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container" style="margin-top:65px;">
      <div class="row">