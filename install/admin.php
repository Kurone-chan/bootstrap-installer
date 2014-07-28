<?php
  $navstep = "Step 2: Admin Account Creation";
  include("../includes/installheader.php");
?>

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Admin Account Creation</h4>
    <hr />
    <form action="scp/mkadmin.php" method="post">
      <div class="form-group">
        <label for="adminuser">Username</label>
        <input type="text" name="adminuser" id="adminuser" class="form-control" placeholder="Admin" />
      </div>
      <div class="form-group">
        <label for="adminpass">Password</label>
        <input type="password" name="adminpass" id="adminpass" class="form-control" />
      </div>
      <div class="form-group">
        <label for="adminpassconf">Confirm Password</label>
        <input type="password" name="adminpassconf" id="adminpassconf" class="form-control" />
      </div>
      <div class="form-group">
        <label for="adminemail">Email Address</label>
        <input type="text" name="adminemail" id="adminemail" class="form-control" placeholder="admin@example.com" />
      </div>
      <div class="form-group">
        <label for="adminfname">First Name</label>
        <input type="text" name="adminfname" id="adminfname" class="form-control" placeholder="John" />
      </div>
      <div class="form-group">
        <label for="adminlname">Last Name</label>
        <input type="text" name="adminlname" id="adminlname" class="form-control" placeholder="Smith" />
      </div>
      <button class="btn btn-primary btn-sm" type="submit">Create Admin User</button>
    </form>
  </div>
</div>

<?php include("../includes/installfooter.php"); ?>