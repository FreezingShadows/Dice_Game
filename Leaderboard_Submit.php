<?php

    session_start();

    require('dbh.php');

    if($_POST['enter_score']){
        $query = $conn->prepare("INSERT INTO Leaderboard (display_name, score) VALUES (?, ?)");

        $displayName = $_POST['display_name'];
        $score = $_SESSION['score'];

        $query->bind_param("si", $displayName, $score);
        $query->execute();

        $query->close();
        $conn->close();

        session_unset();
        session_destroy();
    }

    header('Location: /Dice_Game/leaderboard.php');

?>
