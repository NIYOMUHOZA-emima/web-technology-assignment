<!DOCTYPE html>
<html>
<head>
<title>DECORATION</title>
<style >
		body{
			background-color:lightgray;
		}
		a{
			font-size: 30px;
		}
		p{
			font-size: 25px;
		}
	</style>
</head>
<body>
	<p>Fill the form below to request for a service</p>
	

<form action="decorsub.php" method="get">

  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br>
  <label for="email">Enter your email:</label>
  <input type="email" id="email" name="email"><br>

  <input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>

<label for="cities">Choose your city from the list:</label>

<input list="cities" name="cities">

<datalist id="cities">
	<select>
  <option value="musanze">
  <option value="karongi">
  <option value="Huye">
  <option value="Musanze">
  <option value="rubavu">
</select>
</datalist><br>


  <input type="checkbox" id="BIRTHDAY" name="party" value="BIRTHDAY">
  <label for="BIRTHDAY"> Birtday decoration</label><br>
  <input type="checkbox" id="WEDDING" name="party" value="WEDDING">
  <label for="WEDDING"> Wedding decoration</label><br>
  <input type="checkbox" id="funerals" name="party" value="funerals">
 <label for="funerals"> funeral decoration</label><br>
<input type="submit">
<input type="reset"><br>
<a href="services.html">Back to service</a><br>
<a href="flower shop.html">BACK TO HOME</a><br>

</body>
</html>
<?php
require("connect.php");
$firstname = $_REQUEST['fname'];
$lastname= $_REQUEST['lname'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$adress = $_REQUEST['cities'];
$choice = $_REQUEST['party'];
$sql="INSERT INTO customer(Firstname,Lastname,email,gender,adress,choice)
VALUES ('$firstname','$lastname','$email','$gender','$adress','$choice')";
$results=mysqli_query($con,$sql);
if ($results){
  echo "submitted successfully";
} else {
  echo "Error:". mysqli_error($con);
}
?>
