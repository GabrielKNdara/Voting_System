<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">

<div class="login-box" style="position:center;">
  	<div class="login-logo">
	  <div style="margin-left: auto; margin-right: auto; width: 100%;">
		  <img src="../votesystem1/images/IUM_Logo.png" >
	</div>
  		
  	</div>
  
	  <div class="login-box" style="position:center; display: block; margin-left: auto; margin-right: auto; width: 130%;">
  	<div class="login-box-body">
    	<h3><b><p class="login-box-msg">IUM Voting System (Voter)</p></b></h3>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary " style="background-color:#660026; border:#660026;" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
				<!--<div class="col-xs-4">
          			<li class=""><a href="admin/index.php"><i class="fa fa-black-tie"></i> <button>log in as admin</button></a></li>
        		</div>
				-->

				<div>
				<a href="admin/index.php" class="btn btn-primary" style="background-color:#660026; border:#660026; float:right" type="button"><i class="fa fa-black-tie"></i>log in as admin</a>
			    </div>

      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>

<footer>
<!--
	<p><center><b>NOTE:</b> To Create New Voter's ID and Password- Login to Admin Panel, Check Voters List and Add New Account. The System Automatically Generates VotersID </p></center>
	-->
</div>
</html>