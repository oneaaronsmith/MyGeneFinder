
<div class="navbar-wrapper">
  <div class="container">

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand navtext" href="http://ec2-52-90-240-175.compute-1.amazonaws.com/">Home</a>
		  <a class="navbar-brand navtext" href="http://ec2-52-90-240-175.compute-1.amazonaws.com/learn.php">Learn</a>
		  <a class="navbar-brand navtext" href="http://ec2-52-90-240-175.compute-1.amazonaws.com/search.php">Search</a>
		 
		  <?php if(isset($_COOKIE['user'])){ echo "<a class='navbar-brand' href='http://ec2-52-90-240-175.compute-1.amazonaws.com/user_library.php'>My Library</a>"; } else { echo "<a class='navbar-brand' href='http://ec2-52-90-240-175.compute-1.amazonaws.com/register.php'>Register</a>"; }?>
		</div>
		<?php if(isset($_COOKIE['user']) == FALSE) { 
			include('/var/www/html/authenticate/login_form.php'); }?>
		<?php if(isset($_COOKIE['user'])) { include('/var/www/html/authenticate/logout_form.php'); } ?>
	  </div>
	</nav>

  </div>
</div>