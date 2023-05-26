<!--
	Author: Eisha Aqeel
	Description: This page contains my custom functions used throughout this website.
-->
<?php
//A function named displayCopyrightInfo() function that takes no arguments but echo'es the © (&copy;) copyright symbol, 
//the year and my name. This function is to determine the year from the opentech server's OS using the date('Y'); function 
//that will grab the current year from the opentech server.
function displayCopyrightInfo(){
    echo "&copy; Eisha Aqeel ".date('Y');
}

//A function named db_connect() which takes no arguments that contains a pg_connect() call that will 
//create a connection to your database and returns the connection resource to where it is called.
function db_connect(){
	//***replace the x 's below with your own information***************
	$connection = pg_connect("host=x dbname=x user=x password=x" );
    return $connection;
}

/*
	Lab 8 - Math game functions: 
*/
// Generate a random math question
function generateQuestion()
{
	//randomly select an operator
    $operators = ['+', '-', '*'];
    $operator = $operators[array_rand($operators)];
	//randomly select 2 numbers from 1 to 9
    $number1 = rand(1, 9);
    $number2 = rand(1, 9);

	//create question string
    $question = $number1 . " " . $operator . " " . $number2;
	//use the eval() function to evaluate the question as a mathematical expression
    $answer = eval("return $question;");

    return [$question, $answer];
}

// Check if the submitted answer is correct
function checkAnswer($userAnswer, $correctAnswer)
{
    return $userAnswer == $correctAnswer;
}

// Generate new question and update score and count
function generateNewQuestion()
{
	// Increment the count of questions generated
    $_SESSION['count']++;

	// Check if the count is within the desired range (5 questions)
    if ($_SESSION['count'] <= 5) {
		// Generate a question and obtain the question and answer
        list($question, $answer) = generateQuestion();
		// Store the current answer in session
        $_SESSION['current_answer'] = $answer;

        echo '<form method="post" action="">';
        echo '<p>' . $question . ' = <input type="text" name="answer" autofocus></p>';
        echo '<input type="submit" name="submit" value="Submit">';
        echo '</form>';
    } 
	//else if the count exceeds 5,
	else {
		//Display the user's final score
        echo '<h2>Your score: ' . $_SESSION['score'] . '/5</h2>';
        echo '<p>Do you want to play again?</p>';
        echo '<form method="post" action="">';
        echo '<input type="submit" name="restart" value="Play Again">';
        echo '</form>';

        // Reset score and count
        $_SESSION['score'] = 0;
        $_SESSION['count'] = 0;
    }
}

//Lab 10 define constants
define('MINIMUM_ID_LENGTH',5);
define('MAXIMUM_ID_LENGTH',20);
define('MINIMUM_PASSWORD_LENGTH',6);
define('MAXIMUM_PASSWORD_LENGTH',15);
define('MAX_FIRST_NAME_LENGTH',20);
define('MAX_LAST_NAME_LENGTH',30);
define('MAXIMUM_EMAIL_LENGTH',255);

?>