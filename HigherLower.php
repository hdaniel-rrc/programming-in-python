<?php

    /*******w******** 
        
        Name: Hannah Daniel
        Date: November 02, 2024
        Description: Cookies & sessions.

    ****************/

    // This is a branch test.
    
    session_start();
    
    define("RANDOM_NUMBER_MAXIMUM", 100);
    define("RANDOM_NUMBER_MINIMUM", 1);
    
    $user_submitted_a_guess = isset($_POST['guess']);
    $user_requested_a_reset = isset($_POST['reset']);
    
    // Implement the guessing game logic here.
    //
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Number Guessing Game</title>
</head>
<body>
    <h1>Guessing Game</h1>
    
    <form method="post">
        <label for="user_guess">Your Guess</label>
        <input id="user_guess" name="user_guess" autofocus>
        <input type="submit" name="guess" value="Guess">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>