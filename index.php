<?php include('tellerserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
  <div class="header">
  	<h2>Tell Your Story</h2>
  </div>
	
  <form method="post" action="teller_dashboard.php">
  	
  	<div class="input-group">
  	  <label>Title</label>
  	  <input type="text" name="title" value="<?php echo $title; ?>">
  	</div>
  	<div class="input-group">
  	  <label>name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>location</label>
  	  <input type="text" name="location">
  	</div>
  	<div class="input-group">
  	  <label>category</label>
  	  <input type="text" name="category">
  	</div>
  	<div class="input-group">
  	  <label>description</label>
  	  <textarea type="text" name="description">
           </textarea>
  	</div>
      
      <div class="input-group">
  	  <label>image</label>
        <input type="file" id="myFile" name="filename">
  	</div>
      
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>