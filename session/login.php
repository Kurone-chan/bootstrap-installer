<?php
  include("../includes/header.php");
  
  if(isset($_GET['next']))
  {
	  $page = $_GET['next'];
  }else
  {
	  $page = "";
  }
?>

<div class="col-lg-3"></div>

<div class="col-lg-6">
  <div class="panel panel-default">
    <div class="panel-body">
      <h4>Login to <?php echo $sitename; ?></h4>
      <hr />
      <form action="../resources/scripts/login.php" method="post">
        <div class="input-group form-group">
          <span class="input-group-addon">Username</span>
          <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" style="padding-right:15px;">Password</span>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <input type="hidden" name="directTo" id="directTo" value="<?php echo $page; ?>" />
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Login</button>
          <a href="../support/reset" class="pull-right" style="margin-top:10px">Forgot Password?</a>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="col-lg-3"></div>

<?php include("../includes/footer.php"); ?>