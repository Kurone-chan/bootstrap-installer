<?php
  $navstep = "Step 3: Install Modules";
  include("../includes/installheader.php");
?>

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Install Additional Modules <a href="finish.php" class="btn btn-primary btn-sm pull-right" style="margin-top:-7px;">Finalize Installation &raquo;</a></h4>
    <hr />
    <p>These are additional modules you can add to your Bootstrap environment. Just click "Install" on the modules you would like!</p>
    <p>You may also manually install plugins and themes! Just upload the desired plugin or theme to the appropriate section in the <kbd>resources</kbd> folder!</p>
    <hr />
    <p>If you need additional help, please consult the <a href="//oshizu.tk/projects/bootstrap-community/docs" target="_blank">official documentation</a>.</p>
  </div>
</div>

<div class="col-lg-6">
  <div class="panel panel-default" id="themes">
    <div class="panel-heading">
      <h4 class="panel-title">Themes</h4>
    </div>
    <div class="panel-body">
      <?php include("themes.php"); ?>
    </div>
  </div>
</div>

<div class="col-lg-6">
  <div class="panel panel-default" id="styleplugins">
    <div class="panel-heading">
      <h4 class="panel-title">Bootstrap CSS Addons</h4>
    </div>
    <div class="panel-body">
      <p>Bootstrap CSS Addons will come soon!</p>
    </div>
  </div>
  
  <div class="panel panel-default" id="jsplugins">
    <div class="panel-heading">
      <h4 class="panel-title">Bootstrap JS Addons</h4>
    </div>
    <div class="panel-body">
      <p>Bootstrap JavaScript Addons will come soon!</p>
    </div>
  </div>
</div>

<?php include("../includes/installfooter.php"); ?>