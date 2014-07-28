<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Community Installer</title>
    
    <?php
      if(isset($_GET['style']))
      {
		  echo '<link href="../resources/css/themes/' . $_GET['style'] . '/bootstrap.min.css" rel="stylesheet">';
      }else
      {
	      echo '<link href="../resources/css/themes/simplex/bootstrap.min.css" rel="stylesheet">';
      }
    ?>
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
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
          <a class="navbar-brand" href="">Bootstrap Community Installer</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
          </ul>
             
          <ul class="nav navbar-nav navbar-right">
            <li class="navbar-text"><?php echo $navstep; ?></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container" style="margin-top:65px;">
      <div class="row">