<?php

    session_start();

    if($_POST['roll_die']){
        
        $_SESSION['loss'] = 0;

        
        if($_SESSION['score'] == "") {
            $_SESSION['score'] = 0;
        }
        
        $_SESSION['user_guess'] = $_POST['user_guess'];

        $_SESSION['dice_roll'] = mt_rand(1,6);

        if($_SESSION['user_guess'] == $_SESSION['dice_roll']){
            $_SESSION['score'] = $_SESSION['score'] + 1;
        } else {
            $_SESSION['score'] = $_SESSION['loss'];
        }
    }

    header('Location: /Dice_Game/round.php');
        
    ?>
