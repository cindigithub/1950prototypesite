<?PHP
/*
COMP1950: 	Course Site Redesign
File:		quiz07-3-test.html
Date:		June 30th, 2015
Group:		Bill Kwok
			Cindy Wang
			Dennis Deveras
			Neil MacDonald*			*/

//	cookie checks to see if user has not logged in. If not, redirect sign appears, otherwise quiz appears
if(!isset($_COOKIE["student"])){
	exit("You must first <a href=\"quiz07-1-login.html\">log in</a> before attempting the quiz.");
} 

//	set cookie for quiztime
if(!isset($_COOKIE["quiztime"])){
	setcookie("quiztime", time(), time() + (600), "/" );	
} 
?>

<html>
<head>
<title>Quiz 7: Write</title>
<meta charset="utf-8">

<!-- links to stylesheets min & max width  -->
		<link rel="stylesheet" type="text/css" href="styles/styles_L.css" media="only screen and (min-width: 701px)" media="screen" />
		<link rel="stylesheet" type="text/css" href="styles/styles_M.css" media="only screen and (max-width:700px)" media="screen" />
	
	<!-- 	Print style sheet	-->
			<link rel="stylesheet" type="text/css" href="styles/print.css" media="print" />
					
	<!--	Alternate style sheet	-->		
			<link rel="alternate stylesheet" title="Overhead Style" href="styles/style_overhead.css" media="screen" />

</head>

<body>
<!--	titles and instructions	-->
<h1>COMP 1950 Intermediate Web Development and Design</h1>
<h2>Quiz #7</h2>
<p>This quiz is to be done individually and is closed book.</p>

<!--	form for the display of questions and space for answers		-->
<form action="quiz07-4-submit.php" method="post">

<!--	question #1	-->
<p>1. Name one type of HTTP Server. (1 point)</p>
<p><input type="text" name="q7-1"></p>
<br>
<!--	question #2	-->
<p>2. What do the letters in the acronym <strong>WAMP</strong> stand for? (1 point)</p>
<p><input type="text" name="q7-2"></p>
<br>
<!--	question #3	-->
<p>3. One use of SSIs is to display the current date. Briefly describe 
<strong>one other case</strong> where a developer might use SSIs. (6 points)</p>
<p><input type="text" name="q7-3" maxlength="500" style="width: 500px"></p>
<p>max length: 500 characters</p>
<br>
<!--	question #4	-->
<p>4. Server behaviour can be customized using a file called .htaccess. (1 point)</p>
<p><input type="checkbox" name="q7-4" value="true"> true</p>
<p><input type="checkbox" name="q7-4" value="false"> false</p>
<br>
<!--	question #5	-->
<p>5. Which of the following is an example of SSI code. (1 point)</p>
<p><input type="checkbox" name="q7-5" value="a"> /*#echo var="DOCUMENT_NAME"*/</p>
<p><input type="checkbox" name="q7-5" value="b"> <|--#echo var="DOCUMENT_NAME"--></p>
<p><input type="checkbox" name="q7-5" value="c"> {#echo var="DOCUMENT_NAME"}</p>
<p><input type="checkbox" name="q7-5" value="d"> <ssi>#echo var="DOCUMENT_NAME"</ssi></p>
<br>
<!--	submit button	-->
<input type="submit" name="submit_button" value="Submit Quiz">
</form>

</body>

</html>