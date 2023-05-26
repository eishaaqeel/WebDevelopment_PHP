<?php
$title = "WEBD2201 - Lab 8";
$file = "lab8.php";
$description = "This is the lab 8 page for my WEBD2201 Website. This is a Math Quiz Game, and I used PHP to create it.";
$date = "April 18, 2022";
$banner = "Lab 8 - Math Quiz Game";
include ("./header.php");
?>

<!-- Description paragraph -->
<p class="double">
    This is a math quiz that will ask you to solve addition, subtraction, or multiplication questions.
    After each question, you will get a message telling you whether or not you were correct, and it will add to your
    score which is out of five. After each five questions, you will be asked if you would like another five questions.
</p>

<?php
session_start();

// Initialize score and question count
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    $_SESSION['count'] = 0;
}

// Main game logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $userAnswer = $_POST['answer'];

        // user answer must be numeric
        if (!is_numeric($userAnswer)) {
            echo '<p>Please enter a numeric answer.</p>';
            generateNewQuestion();
            exit;
        }

		// Retrieve the current answer from the session
        $correctAnswer = $_SESSION['current_answer'];

		//display weather or not the users answer was correct
        if (checkAnswer($userAnswer, $correctAnswer)) {
            echo '<p>Your previous answer was Correct!</p>';
            $_SESSION['score']++;
        } 
		else {
            echo '<p>Your previous answer was Incorrect! The correct answer was ' . $correctAnswer . '.</p>';
        }

        generateNewQuestion();

    } 
	elseif (isset($_POST['restart'])) {
        // Reset score and count
        $_SESSION['score'] = 0;
        $_SESSION['count'] = 0;

        generateNewQuestion();
    }
} 
else {
    generateNewQuestion();
}
?>

<?php
    include ("./footer.php");
?>