<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/book.css" rel="stylesheet" type="text/css">
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
	    <img src="images/1588843579185.jpeg" width="100%" height="auto" alt=""/><br>
	    <br>
	    <h1 class="text-center text-uppercase">Book Your Tour</h1>
	    <br>
		<form action="book_form.php" name="bookform" method="post">
		  <center><fieldset style="width: 80%; align-content: center; border: solid; border-color: #00CA8E">
			  <h3>Booking Form</h3><br>
		  <table width="100%" height="auto" border="0">
		      <tr>
		        <td width="201.6">&nbsp;&nbsp;&nbsp;&nbsp;Name</td>
		        <td width="416">: <input type="text" placeholder="Enter Your Name" name="name" required></td>
	          </tr>
		      <tr>
		        <td>&nbsp;&nbsp;&nbsp;&nbsp;Address</td>
		        <td>: <input type="text" placeholder="Enter Your Address" name="address" required></td>
	          </tr>
		      <tr>
		        <td>&nbsp;&nbsp;&nbsp;&nbsp;E-mail</td>
		        <td>: <input type="email" placeholder="Enter Your E-mail" name="email" required></td>
	          </tr>
		      <tr>
		        <td>&nbsp;&nbsp;&nbsp;&nbsp;Tel- Number</td>
		        <td>: <input type="text" placeholder="Enter Your Number" name="number" required></td>
	          </tr>
		      <tr>
		        <td>&nbsp;&nbsp;&nbsp;&nbsp;Where to</td>
		        <td>: <input type="text" placeholder="Where are you going" name="where" required></td>
	          </tr>
		      <tr>
		        <td>&nbsp;&nbsp;&nbsp;&nbsp;How Many</td>
		        <td>: <input type="text" placeholder="Number of Guests" name="guests" required></td>
	          </tr>
		      <tr>
		        <td>&nbsp;&nbsp;&nbsp;&nbsp;From</td>
		        <td>: <input type="date" name="from" required></td>
	          </tr>
		      <tr>
		        <td>&nbsp;&nbsp;&nbsp;&nbsp;To</td>
		        <td>: <input type="date" name="to" required></td>
	          </tr>
				<tr>
		        <td>&nbsp;&nbsp;&nbsp;&nbsp;If You Have something to say</td>
					<td>: <textarea cols="35" rows="4" placeholder="Say something" name="massege" ></textarea></td>
	          </tr>
				<tr>
					<td colspan="2"><p>Thank you for choosing us as yor travel partner. Fill the form given above and send it to us. We will contact you soon.</p></td>
				</tr>
	      </table>
		  <br>
        <input type="submit" value="Send Us a Massege" name="send" >
		<br><br>
	    </fieldset></center>
		</form>
<br>
	    <br>
	    <footer>
	      <div class="row">
	        <div class="offset-lg-0 col-lg-6">
	          <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About us</h5>
	          <ul>
	            We are a travel agency that guides foreigners and locals in Sri Lanka. You can join with us and make your journey memorable..
              </ul>
            <img src="images/logo.jpg" width="60%" height="" alt=""/>            </div>
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