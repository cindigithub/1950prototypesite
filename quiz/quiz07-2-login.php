<?PHP	
/*
COMP1950: 	Course Site Redesign
File:		quiz07-2-login.php
Date:		June 30th, 2015
Group:		Bill Kwok
			Cindy Wang
			Dennis Deveras
			Neil MacDonald*		*/

// 		set variables for username ($name) and password ($pswd)
if(isset($_POST["user"])){
	$name = trim($_POST["user"]);
}
if(isset($_POST["pswd"])){
	$pswd = trim($_POST["pswd"]);
}
if(empty($name)){
	exit("Please enter a username and password.");
}
//		set cookie for student name
if(!empty($_POST["user"])){
	setcookie("student", $name, time() + (600), "/");	
}	

//		set cookie for student number
if(!empty($_POST["pswd"])){
	setcookie("st_number", $pswd, time() + (600), "/");	
}
	
// 		declare string to sanitize input
$forbidden = "/<|>/";

//		validate the user's name and password: exclude forbidden characters
if(preg_match($forbidden, @trim($_POST["user"]))){	
	exit("The < and > characters are forbidden. Please try again.");
	}if(preg_match($forbidden, @trim($_POST["pswd"]))){	
		exit("The < and > characters are forbidden. Please try again.");
	}
	
//		create string with $name + $pswd
$combo1 = "/$name/";
$combo2 = "/$pswd/";

//		read passwords.txt into an array and look for a match, if found, user is welcomed and given options	
$accounts = file("textFiles/userID.txt");
	foreach($accounts as $login){
		if(preg_match($combo1, $login) && preg_match($combo2, $login)){				
			echo "Welcome ";
			echo $name;
			echo "!";
			echo "<br>";
//			echo "Click to begin the quiz. ";	
//			echo "<input type='submit' name='submit_button' value='Start Quiz'>";	
			@fclose($accounts);		
?>

<html>
<head>
	<title>Quiz 7: begin</title>
	<meta charset="utf-8">
</head>

<body>

	<form action="quiz07-3-test.php" method="post">

<!--		Start button 	-->		
	<p>Click to begin the quiz.		<input type="submit" name="submit_button" value="Start Quiz"></p>

</body>
</html>	

<?PHP			
//		end script
			exit();
	}}

//		read passwords.txt into array and if no matches are found, records the attempt and displays a message	
$accounts = file("textFiles/userID.txt");
	foreach($accounts as $login){
			if(!preg_match($combo1, $login) && !preg_match($combo2, $login)){
				@fclose($accounts);	
				exit("Invalid username or password. Please go back and try again.");
	}}
?>