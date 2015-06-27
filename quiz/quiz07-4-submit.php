<?PHP
/*
COMP1950: 	Course Site Redesign
File:		quiz07-4-submit.php
Date:		June 30th, 2015
Group:		Bill Kwok
			Cindy Wang
			Dennis Deveras
			Neil MacDonald*		*/

//	cookie checks to see if user has not logged in. If not, redirect sign appears, otherwise quiz appears
if(!isset($_COOKIE["student"])){
	exit("You must first <a href=\"quiz07-1-login.html\">log in</a> before attempting the quiz.");
} 

// 	set variables for answers
if(isset($_POST["q7-1"])){
	$a1 = trim($_POST["q7-1"])."\n";
}	
if(isset($_POST["q7-2"])){
	$a2 = trim($_POST["q7-2"])."\n";
}
if(isset($_POST["q7-3"])){
	$a3 = trim($_POST["q7-3"])."\n";
}
if(isset($_POST["q7-4"])){
	$a4 = trim($_POST["q7-4"])."\n";
}
if(isset($_POST["q7-5"])){
	$a5 = trim($_POST["q7-5"])."\n";	
}
$q1 = "1. Name one type of HTTP Server. (1 point)"."\n";
$q2 = "2. What do the letters in the acronym WAMP stand for? (1 point)"."\n";
$q3 = "3. One use of SSIs is to display the current date. Briefly describe one other case where a developer might use SSIs. (6 points)"."\n";
$q4 = "4. Server behaviour can be customized using a file called .htaccess. (1 point)"."\n";
$q5 = "5. Which of the following is an example of SSI code. (1 point)"."\n";

//	checks $_COOKIE["quiztime"]. if it is over 5 minutes, then displays message and exits, otherwise write answers to text file 
if((time() - $_COOKIE["quiztime"]) > 300 ){
	exit("You did not complete the quiz within the given time.");
	}else{
		$answers = fopen("./textFiles/answers.txt", "a");
			fwrite($answers, $_COOKIE["student"]);
			fwrite($answers, $_COOKIE["st_number"]);
			fwrite($answers, $q1);
			fwrite($answers, $a1);
			fwrite($answers, $q2);
			fwrite($answers, $a2);
			fwrite($answers, $q3);
			fwrite($answers, $a3);
			fwrite($answers, $q4);
			fwrite($answers, $a4);
			fwrite($answers, $q5);
			fwrite($answers, $a5);
			fclose($answers);
			exit("Your quiz has been submitted.");
	}
?>