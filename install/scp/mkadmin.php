<?php
  $username = $_POST['adminuser'];
  $password = $_POST['adminpass'];
  $passconf = $_POST['adminpassconf'];
  $email = $_POST['adminemail'];
  $frstname = $_POST['adminfname'];
  $lastname = $_POST['adminlname'];
  
  if($password != $passconf)
  {
	  header("location: ../admin.php?errno=1");
  }elseif($password == "" or $password == NULL)
  {
	  header("location: ../admin.php?errno=2");
  }elseif($username == "" or $username == NULL)
  {
	  header("location: ../admin.php?errno=3");
  }
  
  include("../../includes/config.php");
  
  $link = mysqli_connect($sqlhost, $sqluser, $sqlpass, $sqldata);
  
  $usertablesql = "CREATE TABLE IF NOT EXISTS users 
  		  (
  		  id INT NOT NULL AUTO_INCREMENT, 
  		  PRIMARY KEY(id),
  		  username TINYTEXT,
  		  password TEXT,
  		  email TEXT,
  		  firstname TINYTEXT,
  		  lastname TINYTEXT,
  		  isadmin BOOLEAN
  		  )";
  		  
  if(mysqli_query($link, $usertablesql))
  {
  	  $pwhash = hash('sha256', $password);
	  $sql = "INSERT INTO users (username, password, email, firstname, lastname, isadmin) VALUES ('" . $username . "', '" . $pwhash . "', '" . $email . "', '" . $frstname . "', '" . $lastname . "', true)";
	  if(mysqli_query($link, $sql))
	  {
	  	  
	  	  $tablestoinsert = "CREATE TABLE IF NOT EXISTS errors 
  		  (
  		  id INT NOT NULL AUTO_INCREMENT, 
  		  PRIMARY KEY(id),
  		  title TINYTEXT,
  		  errdesc TEXT
  		  );
  		  
  		  CREATE TABLE IF NOT EXISTS navlinks 
  		  (
  		  id INT NOT NULL AUTO_INCREMENT, 
  		  PRIMARY KEY(id),
  		  parent INT,
  		  title TINYTEXT,
  		  page TEXT,
  		  priority INT,
  		  isdropdown BOOLEAN
  		  );";
  		  
  		  $datatoinsert = "
  		  
  		  INSERT INTO errors (title, errdesc) VALUES ('Login Failed.', 'Your username and/or password is incorrect Please verify your input and try again.'); INSERT INTO errors (title, errdesc) VALUES ('Not Found', 'The page you are trying to access does not exist. Please try again later. If this keeps happening, please contact the website administrator.');
  		  
  		  INSERT INTO navlinks (parent, title, page, priority, isdropdown) VALUES (0, 'Home', 'index.php', 100, false);
  		  
  		  ";
  		  
  		  mysqli_query($link, $tablestoinsert);
  		  //mysqli_query($link, $datatoinsert);
	  
		  header("location: ../modules.php");
	  }else
	  {
		  echo "Error: " . mysqli_error($link);
	  }
  }else
  {
	  echo "Error: " . mysqli_error($link);
  }
?>