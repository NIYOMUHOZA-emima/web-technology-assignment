<html>
<head>
<title>BOUQUET</title>
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
<form action="submission.php" method="get">
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
  <option value="kimironko">
  <option value="kacyiru">
  <option value="Huye">
  <option value="Musanze">
  <option value="Gisenyi">
  <option value="karongi">
    <option value="muhanga">
</select>
</datalist><br>
 <input type="checkbox" id="BOUQUET" name="BOUQUET" value="ROSE">
  <label for="BOUQUET1"> Rose bouquet</label><br>
  <input type="checkbox" id="BOUQUET" name="BOUQUET" value="SUNFLOWER">
  <label for="BOUQUET2"> Sunflower bouquet</label><br>
  <input type="checkbox" id="BOUQUET" name="BOUQUET" value="Tulip">
  <label for="BOUQUET3"> Tulip bouquet</label><br>
<input type="submit">
<input type="reset">
 </form>
<a href="services.html">back to service</a><br>
<a href="flower shop.html">BACK TO HOME</a><br>
</body>
</html>
<?php
require("connect.php");
$firstname = $_REQUEST['fname'];
$lastname= $_REQUEST['lname'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$adress=$_REQUEST['cities'];
$choice=$_REQUEST['BOUQUET'];
$sql="INSERT INTO customer(Firstname,Lastname,email,gender,adress,choice)
VALUES ('$firstname','$lastname','$email','$gender','$adress','$choice')";
$results=mysqli_query($con,$sql);
if ($results){
  echo "submitted successfully";
} else {
  echo "Error:". mysqli_error($con);
}
?>
