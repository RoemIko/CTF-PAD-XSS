<!DOCTYPE html>
<html>
<head>
  <meta charset= ^`^}UTF-8 ^` >
  <title>PAD9 Forum</title>
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="uploadform.css" type="test/css">
</head>
<div id="header">

      <div id="headernav">        
        <a class="home" href="index.php">PAD 9 Forum</a> 
      </div>

      <img src="image/Vlogo.png" style="width: 30px; height: 40px; padding-left: 10px; padding-top: 5px;">

      <div id="search">
        <form class="search">
          <input class="searchbar" type="search" placeholder="Search" aria-label="Search">
          <button class="searchbutton" type="submit">Search</button>
        </form>  
      </div>

    </div>
	<div id="check">
		<form method="post">
			<label for="answer">Check if you got the correct flag:</label>
			<input type="text" name="answer">
			<input type="submit" id="check_button" value="Submit">
		</form>
	</div>	
	<?php
	$answer = trim($_POST['answer']);

	if ($answer == "FlagNumberOne" || $answer == "DeTweedeVlag" || $answer == "FlaggeNummerDrei"){
	echo '<script>alert("You got it right!")</script>';
	} else {
	echo '<script>alert("That is the wrong answer.")</script>';
	}
	?>

</html>
