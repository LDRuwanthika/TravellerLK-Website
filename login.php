<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  	<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script>
	
	<div class="container-fluid">
	  <div class="container">
	    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <img src="images/logo.jpg" width="250" height="auto">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
	      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item"> <a class="nav-link" href="index.php">Home&nbsp;</a></li>
	          <li class="nav-item"> <a class="nav-link" href="aboutus.php">About us&nbsp;</a></li>
	          <li class="nav-item"> <a class="nav-link" href="contactus.php">Contact&nbsp;</a></li>
	          <li class="nav-item"> <a class="nav-link" href="services.php">Services&nbsp;</a></li>
	          <li class="nav-item"> <a class="nav-link" href="book.php">Booking&nbsp;</a></li>
            </ul>
          </div>
          <a href="login.php"><img src="images/log in.png" width="70" height=""></a></nav>
<br>
	    <br>
	    <form action="adminvalidation.php" name="bookform" method="post">
	      <center>
	        <fieldset style="width: 40%; align-content: center; border: solid; border-color: #00CA8E">
				<br>
	         <h3>Admin Log In Form</h3>
				<br>
				<table>
				  <tr height="50">
						<td width="100">Username</td>
						<td><input type="text" name="username"></td>
					</tr>
				  <tr height="50">
						<td width="100">Password</td>
						<td><input type="password" name="password"></td>
					</tr>
				  <tr height="50">
						<td colspan="2" width="100"><input type="submit" name="submit" value="Log In"></td>
					</tr>	
			  </table>
				<br>
            </fieldset>
          </center>
        </form>
	    <br>
	    <br>
		<br>
		<br>
		<br>
		<br>
		<br>
	    <footer>
	      <div class="row">
	        <div class="offset-lg-0 col-lg-6">
	          <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About us</h5>
	          <ul>
	            We are a travel agency that guides foreigners and locals in Sri Lanka. You can join with us and make your journey memorable..
              </ul>
	          <img src="images/logo.jpg" width="60%" height="" alt=""/></div>
	        <div class="col-lg-2">
	          <h5>&nbsp;Our Branches</h5>
	          <ul>
	            <a href="#">Colombo</a>
              </ul>
	          <ul>
	            <a href="#">Kalutara</a>
              </ul>
	          <ul>
	            <a href="#">Matara</a>
              </ul>
	          <ul>
	            <a href="#">Jaffna</a>
              </ul>
            </div>
	        <div class="col-lg-2">
	          <h5>&nbsp;&nbsp;Quick Links</h5>
	          <ul>
	            <a href="index.php">Home</a>
              </ul>
	          <ul>
	            <a href="aboutus.php">About us</a>
              </ul>
	          <ul>
	            <a href="contactus.php">Contact</a>
              </ul>
	          <ul>
	            <a href="services.php">Services</a>
              </ul>
	          <ul>
	            <a href="book.php">Booking</a>
              </ul>
            </div>
	        <div class="col-lg-2">
	          <h5>&nbsp;&nbsp;&nbsp;Follow Us</h5>
	          <ul>
	            <a href="#">Facebook</a>
              </ul>
	          <ul>
	            <a href="#">Instagram</a>
              </ul>
	          <ul>
	            <a href="#">Twitter</a>
              </ul>
	          <ul>
	            <a href="#">Youtube</a>
              </ul>
            </div>
          </div>
	      <center>
	        Created by 22.2 Group B2 - no.54 / All Rights Reserved!!
          </center>
        </footer>
      </div>
  </div>
<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>