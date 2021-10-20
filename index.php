<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Life</title>
</head>
<style>
	body{
 		background-image: url('piece.jpg');
 		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;	
  		}
		
</style>
<body>

	<a href="logout.php">Logout</a><br>
	<img src="love.jpg" width="200" height="200"/>
	<img src="rei.jpg" width="200" height="200"/>


	
	<h1>JESSICA MAE M.BACSA & REI ALLAN M.CLAVERIA</h1><div style="color: red;">
	<h1>One Piece</h1><div style="color: red;">

	<div style="color: black;">


	<br>
	Hello, <?php echo $user_data['user_name']; ?> 22 years ago, the Pirate King, Gol D. Roger. was executed.However, before his death the revealed to evryone that his trasure, the One Piece, was hidden at the end of the Grand Line. <br><br>
	This inspired people to become pirates and sail toward the treasure, the beginning the Great Age of Pirates. Twelve years later, a young boy from the East Blue named Monkey D. Luffy dreamed of finding the One Piece, but lost the ability to swim after eating a Devil Fruit giving him the ability to stretch his body like rubber.<br>
	 He was given a straw hat by the pirate Shanks, who would later go on to become an Emperor, one of the four most powerful pirates in the world, in the agreement that he would return the hat once he become a pirate and surpassed Shanks.<br>
	Ten years passed, and luffy set off to sea at the age of 17. His infamy began to grow as he formed the Straw Hat Pirates and defeated some of the East's Blue's most notorious pirates.<br><br>
	He recruited four crewmates: Roronoa Zoro, who sought to become the greatest swordsman in the world, Usopp, who sought to become a brave warrior of the sea, Sanji who sought to find a hidden sea known as the all Blue, and Nami, who sought to make a map of the world. He entered the Grand Line with a bounty of 30,000,000 and was pursued by Smoker of the Marines.<br> 
	In the Grand Line, Luffy and the Straw Hat Pirates became involved in a plot to dismantle the criminal organization Baroque Works, led by Crocodile of the Seven Warlords of the Sea, seven pirates who work for the World Government. <br>They gained two crewments in the process, Tonny Tonny Chopper, who sought to cure every illness , and the mysterious Nico Robin,formerly the second in command of Baroque works.<br><br>

	
</body>
</html>
