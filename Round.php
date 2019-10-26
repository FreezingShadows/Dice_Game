<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Dice_Game/css/main.css">
    <title>My Dice Game!</title>
</head>
<body>

    <?php
        include('header.php');
    ?>
    
        <form action="/Dice_Game/includes/dice_roll.php" method="post">
        <p class="pageHeading">Please guess a number between one and six, then roll the dice!</p>
        <p class="pageSubheading">If you guess right, you earn a point! If you guess wrong, your score returns to zero!</p>
        <input class="input" type="text" name="user_guess" placeholder="Enter Guess Here!">
        <br />
        <br />
        <input class="input" type="submit" name="roll_die" value="Roll Die!">
        </form>
        <br />
        <br />
    
    <?php
        if($_SESSION['user_guess'] == "" && $_SESSION['dice_roll'] == ""){
            echo "";
            echo '<body class="neutralBack">';
        } elseif($_SESSION['user_guess'] == $_SESSION['dice_roll']) {
            echo '<p class="pageText">';
            echo "Congratulations! You guessed a " . $_SESSION['user_guess'] . " and the dice rolled a " . $_SESSION['dice_roll']; ?>
            </p>
            <br />
            <?php
            echo '<p class="pageText">';
            echo "You can either submit your score if it is 2 or higher, or try again!";
            echo '</p>';
            echo '<body class="correctBack">';
        } else {
            echo '<p class="pageText">';
            echo "Sorry! You guessed a " . $_SESSION['user_guess'] . " and the dice rolled a " . $_SESSION['dice_roll']; ?>
            <p>
            <br />
            <?php
            echo '<p class="pageText">';
            echo "Please try again!";
            echo '</p>';
            echo '<body class="wrongBack">';
        }
        ?>
        <br />
        <br />
        <?php
        echo '<p class="pageText">';
        echo "Score = " . $_SESSION['score']; ?>
        </p>
        <br />
        <br />
        <?php 
            include('leaderboard_form.php');
        ?>
        <?php

    ?>
    
</body>
</html>
