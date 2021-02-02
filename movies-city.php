<?php
session_start();
if($_SESSION['login']=="False")
{
	header("Location: movies-static-home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>city</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet"><!-- href="dbmsstyle.css"> -->

	<style type="text/css">
.icon-bar {
  width: 100%; /* Full-width */
  background-color: #555; /* Dark-grey background */
  overflow: auto; /* Overflow due to float */
}

.icon-bar a {
  float: left; /* Float links side by side */
  text-align: center; /* Center-align text */
  text-decoration: none;
  width: 25%; /* Equal width (4 icons with 25% width each = 100%) */
  padding: 12px 0; /* Some top and bottom padding */
  transition: all 0.3s ease; /* Add transition for hover effects */
  color: white; /* White text color */
  font-size: 36px; /* Increased font size */
}

.icon-bar a:hover {
  background-color: #000; /* Add a hover color */
}

.active {
  background-color: #4CAF50; /* Add an active/current color */
}

/*movie-counter */
.city-counter
{
  margin-top: 10px;
  margin-bottom: 10px;
  background-color: #defabc; 
  /*padding and margin not req.*/
  text-align: center;
  border: 5px solid gray;
}

.city-counter p
{

  color: #cc3399;
  text-decoration: none;
  font-size: 30px;
  text-align: center;
}
 
 .city
{ /* layout of city chart */
  overflow: hidden;
  width:100%;
  margin-left: 0px;
  margin-right: 0px;
  background-color: #ccffff;
  border: 3px solid green; 
}

.monument
{ /*layout of particular city */
  overflow: hidden;
  float: left;
  margin:18px;
  background-color: #e6ffe6; 
  width:300px; 
  height: 400px;
  margin-left:3%;
  border: 3px solid green;
}

@media only screen and (max-width: 800px)
{
  .monument, .label
  {
  	width:200px;
  	height: 250px;
  }
  .label img
  {
  	height: 200px;
  	width: 200px;	
  }
}
/*monument hover :zoom */
.monument:hover
{
  transform: scale(1.05);
}

.dot input
{
	height: 30px;
	width:  30px;
	margin:5px 5px 5px 5px;
	float: left;
}
 
.dot
{
	display: block;
	position: absolute;
	height: 0px;
	width: 300px;
	background-color:lightgreen; rgb(100,100,250);
}
.label
{
	display: block;
	height: 400px;
	width: 300px;
}

.label h1,p
{ /*layout of text in city */
  margin:10px 10px;
  font-size: 20px;
  color: black;
}

.label:hover
{
	cursor: pointer;
} 

/* submit buttons */
.selection
{
  display: block;
  height: 60px;
  width: 100%;
  background-color: lightgray;
  margin-top: 30px;
}
.up, .log
{
  float: left;
  height:40px;
  width: 32%;
  background-color: #4CAF50;
  margin:10px 0 10px 1%;
}

.up p, .log p
{
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  text-align: center;
  margin :10px 30px;
  text-decoration: none;
}

.select input 
{
  left;
  height:40px;
  width: 32%;
  background-color: #4CAF50;
  margin:10px 0 10px 1%;

  color: white;
  font-size: 20px;
  font-family: sans-serif;
  text-align: center;
  text-decoration: none;
  border:none;
}
.up:hover , .select input:hover, .log:hover
{
  cursor: pointer;
  background-color:green;
}
/* button till here */


</style>

</head>
<!-- Add icon library -->
<body>
	 <?php include_once'header.php'; ?>
<center>
<div class="icon-bar">

  <a href="movies-home.php">Home</a>
  <a class="active" href="movies-city.php">City</a>
  <a href="movies-aboutus.php">AboutUs</a>
  <a href="movies-logout.php">Logout</a>

</div>
</center>

<div class="city-counter">
<p> Select the city for watching your show</p>	
</div>

<form method="post" action="movies-cinema.php">
<div class="city">

<div  class="monument">
<div class="dot">
  	<input type="radio" id="1" name="city" value="Noida"> 
</div>
  <label for="1">
  	<div class="label">
  	<img src="pictures/Noida.jpg" alt="Noida" width="300" height="300">	
	<h1>Noida</h1>
	<p>Enjoy your show in Noida</p>
	</div>
   </label>	
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="2" name="city" value="Agra">
	</div>
	<label for="2">	
	<div class="label">
		<img src="pictures/Agra.jfif" alt="Agra" width="300" height="300">
		<h1>Agra</h1>
		<p>Enjoy your show in Agra</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="3" name="city" value="Patna">
	</div>
	<label for="3">	
	<div class="label">
		<img src="pictures/patna.jfif" alt="patna" width="300" height="300">
		<h1>Patna</h1>
		<p>Watch your show in the city of Buddha</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="4" name="city" value="Jaipur">
	</div>
	<label for="4">	
	<div class="label">
		<img src="pictures/jaipur.jfif" alt="jaipur" width="300" height="300">
		<h1>Jaipur</h1>
		<p>Enjoy your show in the Pink City</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="5" name="city" value="Kolkata">
	</div>
	<label for="5">	
	<div class="label">
		<img src="pictures/kolkata.jfif" alt="kolkata" width="300" height="300">
		<h1>Kolkata</h1>
		<p>Watch your show in Kolkata-city of bridges</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="6" name="city" value="Mumbai">
	</div>
	<label for="6">	
	<div class="label">
		<img src="pictures/mumbai.jfif" alt="mumbai" width="300" height="300">
		<h1>Mumbai</h1>
		<p>Enjoy your show in the dynamic city Mumbai</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="7" name="city" value="Amritsar">
	</div>
	<label for="7">	
	<div class="label">
		<img src="pictures/amritsar.jfif" alt="amritsar" width="300" height="300">
		<h1>Amritsar</h1>
		<p>Watch your show in the city of Gurunank</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="8" name="city" value="Ranchi">
	</div>
	<label for="8">	
	<div class="label">
		<img src="pictures/ranchi.jfif" alt="ranchi" width="300" height="300">
		<h1>Ranchi</h1>
		<p>Watch your show in Ranchi</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="9" name="city" value="Lucknow">
	</div>
	<label for="9">	
	<div class="label">
		<img src="pictures/lucknow.jfif" alt="lucknow" width="300" height="300">
		<h1>Lucknow</h1>
		<p>Enjoy your show in the city of Nawabs</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="10" name="city" value="Delhi">
	</div>
	<label for="10">	
	<div class="label">
		<img src="pictures/delhi.jfif" alt="delhi" width="300" height="300">
		<h1>Delhi</h1>
		<p>Watch your show in Delhi-NCR</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="11" name="city" value="Hyderabad">
	</div>
	<label for="11">	
	<div class="label">
		<img src="pictures/hyderabad.jfif" alt="hyderabad" width="300" height="300">
		<h1>Hyderabad</h1>
		<p>Enjoy your show in the city of Charminar</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="12" name="city" value="Banglore">
	</div>
	<label for="12">	
	<div class="label">
		<img src="pictures/banglore.jfif" alt="banglore" width="300" height="300">
		<h1>Banglore</h1>
		<p>Watch your show in the Silicon City of India</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="13" name="city" value="Nainital">
	</div>
	<label for="13">	
	<div class="label">
		<img src="pictures/Nainital.jpg" alt="Nainital" width="300" height="300">
		<h1>Nainital</h1>
		<p>Enjoy your show in Nainital</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="14" name="city" value="Bhopal">
	</div>
	<label for="14">	
	<div class="label">
		<img src="pictures/mp.jpg" alt="Bhopal" width="300" height="300">
		<h1>Bhopal</h1>
		<p>Enjoy your show in Bhopal</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="15" name="city" value="Gwalior">
	</div>
	<label for="15">	
	<div class="label">
		<img src="pictures/Gwalior.jpg" alt="Gwalior" width="300" height="300">
		<h1>Gwalior</h1>
		<p>Enjoy your show in Gwalior</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="16" name="city" value="Srinagar">
	</div>
	<label for="16">	
	<div class="label">
		<img src="pictures/Srinagar.jpg" alt="Srinagar" width="300" height="300">
		<h1>Srinagar</h1>
		<p>Enjoy your show in Srinagar</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="17" name="city" value="Gangtok">
	</div>
	<label for="17">	
	<div class="label">
		<img src="pictures/Gangtok.jpg" alt="Gangtok" width="300" height="300">
		<h1>Gangtok</h1>
		<p>Enjoy your show in Gangtok</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="18" name="city" value="Bikaner">
	</div>
	<label for="18">	
	<div class="label">
		<img src="pictures/Bikaner.jpg" alt="Bikaner" width="300" height="300">
		<h1>Bikaner</h1>
		<p>Enjoy your show in Bikaner</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="19" name="city" value="Vijayawada">
	</div>
	<label for="19">	
	<div class="label">
		<img src="pictures/Vijayawada.jpg" alt="Vijayawada" width="300" height="300">
		<h1>Vijayawada</h1>
		<p>Enjoy your show in Vijayawada</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="20" name="city" value="Manglore">
	</div>
	<label for="20">	
	<div class="label">
		<img src="pictures/Manglore.jpg" alt="Manglore" width="300" height="300">
		<h1>Manglore</h1>
		<p>Enjoy your show in Manglore</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="21" name="city" value="Darjeeling">
	</div>
	<label for="21">	
	<div class="label">
		<img src="pictures/Darjeeling.jpg" alt="Darjeeling" width="300" height="300">
		<h1>Darjeeling</h1>
		<p>Enjoy your show in Darjeeling</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="22" name="city" value="Ludhiana">
	</div>
	<label for="22">	
	<div class="label">
		<img src="pictures/Ludhiana.jpg" alt="Ludhiana" width="300" height="300">
		<h1>Ludhiana</h1>
		<p>Enjoy your show in Ludhiana</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="23" name="city" value="Guwahati">
	</div>
	<label for="23">	
	<div class="label">
		<img src="pictures/Guwahati.jpg" alt="Guwahati" width="300" height="300">
		<h1>Guwahati</h1>
		<p>Enjoy your show in Guwahati</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="24" name="city" value="Ooty">
	</div>
	<label for="24">	
	<div class="label">
		<img src="pictures/Ooty.jpg" alt="Ooty" width="300" height="300">
		<h1>Ooty</h1>
		<p>Enjoy your show in Ooty</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="25" name="city" value="Aurangabad
		">
	</div>
	<label for="25">	
	<div class="label">
		<img src="pictures/Aurangabad.jpg" alt="Aurangabad" width="300" height="300">
		<h1>Aurangabad</h1>
		<p>Enjoy your show in Aurangabad</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="26" name="city" value="Bhubaneswar">
	</div>
	<label for="26">	
	<div class="label">
	<img src="pictures/Bhubaneswar.jpg" alt="Bhubaneswar" width="300" height="300">
	<h1>Bhubaneswar</h1>
	<p>Enjoy your show in Bhubaneswar</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="27" name="city" value="Prayagraj">
	</div>
	<label for="27">	
	<div class="label">
	<img src="pictures/Prayagraj.jpg" alt="Prayagraj" width="300" height="300">
	<h1>Prayagraj</h1>
	<p>Enjoy your show in Prayagraj</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="28" name="city" value="Coimbatore">
	</div>
	<label for="28">	
	<div class="label">
	<img src="pictures/Coimbatore.jpg" alt="Coimbatore" width="300" height="300">
	<h1>Coimbatore</h1>
	<p>Enjoy your show in Coimbatore</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="29" name="city" value="Vadodara">
	</div>
	<label for="29">	
	<div class="label">
	<img src="pictures/Vadodara.jpg" alt="Vadodara" width="300" height="300">
	<h1>Vadodara</h1>
	<p>Enjoy your show in Vadodara</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="30" name="city" value="Nashik">
	</div>
	<label for="30">	
	<div class="label">
	<img src="pictures/Nashik.jpg" alt="Nashik" width="300" height="300">
	<h1>Nashik</h1>
	<p>Enjoy your show in Nashik</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="31" name="city" value="Pondicherry">
	</div>
	<label for="31">	
	<div class="label">
	<img src="pictures/Pondicherry.jpg" alt="Pondicherry" width="300" height="300">
	<h1>Pondicherry</h1>
	<p>Enjoy your show in Pondicherry</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="32" name="city" value="Gurgaon">
	</div>
	<label for="32">	
	<div class="label">
	<img src="pictures/Gurgaon.jpg" alt="Gurgaon" width="300" height="300">
	<h1>Gurgaon</h1>
	<p>Enjoy your show in Gurgaon</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="33" name="city" value="Shimla">
	</div>
	<label for="33">	
	<div class="label">
	<img src="pictures/Shimla.jpg" alt="Shimla" width="300" height="300">
	<h1>Shimla</h1>
	<p>Enjoy your show in Shimla</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="34" name="city" value="Jaisalmer">
	</div>
	<label for="34">	
	<div class="label">
	<img src="pictures/Jaisalmer.jpg" alt="Jaisalmer" width="300" height="300">
	<h1>Jaisalmer</h1>
	<p>Enjoy your show in Jaisalmer</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="35" name="city" value="Madurai">
	</div>
	<label for="35">	
	<div class="label">
	<img src="pictures/Madurai.jpg" alt="Madurai" width="300" height="300">
	<h1>Madurai</h1>
	<p>Enjoy your show in Madurai</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="36" name="city" value="Nagpur">
	</div>
	<label for="36">	
	<div class="label">
	<img src="pictures/Nagpur.jpg" alt="Nagpur" width="300" height="300">
	<h1>Nagpur</h1>
	<p>Enjoy your show in Nagpur</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="37" name="city" value="Visakhapatnam">
	</div>
	<label for="37">	
	<div class="label">
	<img src="pictures/Visakhapatnam.jpg" alt="Visakhapatnam" width="300" height="300">
	<h1>Visakhapatnam</h1>
	<p>Enjoy your show in Visakhapatnam</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="38" name="city" value="Indore">
	</div>
	<label for="38">	
	<div class="label">
	<img src="pictures/Indore.jpg" alt="Indore" width="300" height="300">
	<h1>Indore</h1>
	<p>Enjoy your show in Indore</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="39" name="city" value="Trivandrum">
	</div>
	<label for="39">	
	<div class="label">
	<img src="pictures/Trivandrum.jpg" alt="Trivandrum" width="300" height="300">
	<h1>Trivandrum</h1>
	<p>Enjoy your show in Trivandrum</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="40" name="city" value="Jhodhpur">
	</div>
	<label for="40">	
	<div class="label">
	<img src="pictures/Jhodhpur.jpg" alt="Jhodhpur" width="300" height="300">
	<h1>Jhodhpur</h1>
	<p>Enjoy your show in Jhodhpur</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="41" name="city" value="Mysore">
	</div>
	<label for="41">	
	<div class="label">
	<img src="pictures/Mysore.jpg" alt="Mysore" width="300" height="300">
	<h1>Mysore</h1>
	<p>Enjoy your show in Mysore</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="42" name="city" value="Udaipur">
	</div>
	<label for="42">	
	<div class="label">
	<img src="pictures/Udaipur.jpg" alt="Udaipur" width="300" height="300">
	<h1>Udaipur</h1>
	<p>Enjoy your show in Udaipur</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="43" name="city" value="Ahmedabad">
	</div>
	<label for="43">	
	<div class="label">
	<img src="pictures/Ahmedabad.jpg" alt="Ahmedabad" width="300" height="300">
	<h1>Ahmedabad</h1>
	<p>Enjoy your show in Ahmedabad</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="44" name="city" value="Varanasi">
	</div>
	<label for="44">	
	<div class="label">
	<img src="pictures/Varanasi.jpg" alt="Varanasi" width="300" height="300">
	<h1>Varanasi</h1>
	<p>Enjoy your show in Varanasi</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="45" name="city" value="Chennai">
	</div>
	<label for="45">	
	<div class="label">
	<img src="pictures/Chennai.jpg" alt="Chennai" width="300" height="300">
	<h1>Chennai</h1>
	<p>Enjoy your show in Chennai</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="46" name="city" value="Rewari">
	</div>
	<label for="46">	
	<div class="label">
	<img src="pictures/Rewari.jpg" alt="Rewari" width="300" height="300">
	<h1>Rewari</h1>
	<p>Enjoy your show in Rewari</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="47" name="city" value="Rohtak">
	</div>
	<label for="47">	
	<div class="label">
	<img src="pictures/Rohtak.jpg" alt="Rohtak" width="300" height="300">
	<h1>Rohtak</h1>
	<p>Enjoy your show in Rohtak</p>
	</div>
	</label> 
</div>

<div class="monument">
	<div class="dot">
		<input type="radio" id="48" name="city" <?php if(isset($city) && $city=="Dehradun") echo "checked"; ?> value="Dehradun">
	</div>
	<label for="48">	
	<div class="label">
	<img src="pictures/Dehradun.jpg" alt="Dehradun" width="300" height="300">
	<h1>Dehradun</h1>
	<p>Enjoy your show in Dehradun</p>
	</div>
	</label> 
</div>

</div> 


<!-- link bar   -->
<div class="selection">

  <a href="movies-logout.php">
    <div class="log"><p>&#171  Logout</p></div>
  </a>

  <a href="#">
  <div class="up"><p>Go up </p></div>
  </a>

  <div class="select">
  	<input type="submit" name="submit" value="Select the cinema &#187">
  </div>
 
</div>

</form>
<?php include_once 'footer.php'; ?>
</body>
</html>




