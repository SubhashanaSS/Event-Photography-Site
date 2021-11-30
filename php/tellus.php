<?php 
include("database.php");
if(isset($_POST["btn"]))
{
	$name= $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];



	$sql = "INSERT INTO feedback(name,email,message)  VALUES ('$name','$email','$message')";
	$result = $conn->query($sql);
	
	if($result == true)
	{
	echo "<script>alert('success')</script>";
	}
	else{
		echo "error".$conn->error;
	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tell Us|ZStudios </title>
	<link rel="stylesheet" type ="text/css" href="css\feedback.css">
<body>

<!-- navigation bar-->
<div class="menu">

 <div class="zstd"><a href="../../HomeAndLogin/Homepage.php"><h1>Z studioz</h1></a></div>
 
 <div class="nav">
 <ul>
 <li  class="hover"><a href="../../HomeAndLogin/Homepage.php"><font style="color:white">Home</font></a></li>
 <li  class="hover"><a href="../Event.html"><font style="color:white">Events</font></a></li>
 <li  class="hover"><a href="../../Payment/payment.html"><font style="color:white">Payment</font></a></li>
 <li  class="hover"><a href="../../ContactAndAboutus/contact.html"><font style="color:white">Contact</font></a></li>
 <li  class="hover"><a href="../../ContactAndAboutus/about.html"><font style="color:white">About Us</font></a></li>
 <ul>
 </div>
 
 <div class="login">
 <ul>
 <li ><a href="../../Registartion_and_Staff/register.html"><button class="btn btn1" >Register</button></a></li>
 <li align="right" ><a href="../../HomeAndLogin/login.php"><button class="btn btn1">Login</button></a></li>
 </ul>
 </div>

 </div>	
 
<!--title-->

	<div class="contact-title">
		<h1><font style="color:black">Need More</h1>
		<h2>We are always ready to serve you!<br>
		    Tell Us What You Need! We'll Contact You As Soon As Possible</font></h2>
	</div>

<!--form-->

<div class="form">
	<form id="contact-form"method="post"action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype = "multipart/form-data">
	<input name="name"type="text"class="form-control"placeholder="Your name"required>
	<br>
	<input name="email"type="email" class="form-control"placeholder="your email"required><br>

		<textarea name="message"class="form-control"placeholder="Message"row="4"
		required></textarea><br>
	
		<input type="submit" class="btn btn1" name= "btn"value="SEND MESSAGE">


	</form>
</div>
<br>
<br>
<br>
<br>

<!--footer-->

<div class="footer">
	
	<div class="pay">
	<img src="pic/payment.png" width = "300" height = "50">
	</div>
	
	<div class="arr"><b>All Rights Reserved.</b>
	<center>Powered by <a href = "../../HomeAndLogin/Homepage.php"><font style="color:white">Z studioz</font></a></center>
	</div>

	<div class="Social">
	<a href="https://www.facebook.com/"><img src="pic/fbb.png" width = "30" height = "30"></a>
	<a href="https://www.instagram.com/?hl=en"><img src="pic/insta.png" width = "30" height = "30"></a>
	<a href="https://twitter.com/?lang=en"><img src="pic/twt.png" width = "30" height = "30"></a>
	<a href="https://www.pinterest.com/"><img src="pic/pint.png" width = "30" height = "30"></a>
	</div>
	
	</div>

</body>
</html>
