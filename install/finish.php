<?php
  $navstep = "Installation Successful!";
  include("../includes/installheader.php");
?>

<div class="alert alert-danger"><strong>Make sure you DELETE the install directory before continuing! If you leave the install directory open, ANYONE CAN CREATE AN ADMIN ACCOUNT!</strong></div>

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Congratulations!</h4>
    <p>Bootstrap has been successfully installed on your web server environment. What do you do now?</p>
    <p>You can now...</p>
    <ul>
      <li><a href="../">Visit your new Bootstrap website</a></li>
      <li>View the source code of Bootstrap on your web server and configure it the way you like.</li>
      <li>Open the <a href="../admin">administration panel</a> and configure your website.</li>
      <li>Start adding pages and items.</li>
      <li>Start exploring the filesystem and playing around with Bootstrap!</li>
    </ul>
    <hr />
    <p>
      Have fun with your new Bootstrap installation!<br />
	  <span class="fa fa-heart"></span> Oshizu
    </p>
  </div>
</div>

<?php include("../includes/installfooter.php"); ?>