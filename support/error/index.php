<?php
  include("../../includes/header.php");
  
  $link = mysqli_connect($sqlhost, $sqluser, $sqlpass, $sqldata);
  
  $errno = mysqli_query($link, "SELECT * FROM errors WHERE id='" . $_GET['id'] . "'");
  $errdata = mysqli_fetch_array($errno);
?>

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Error! <?php echo $errdata['title']; ?></h4>
    <hr />
    <p><?php echo $errdata['errdesc']; ?></p>
    <p>Please click <a href="//<?php echo $sitehost; ?>">here</a> to go back to the homepage.</p>
  </div>
</div>

<?php
  include("../../includes/footer.php");
?>