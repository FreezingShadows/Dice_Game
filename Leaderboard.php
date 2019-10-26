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
    <title>Leaderboard</title>
</head>
<body class="neutralBack">

    <?php
        include('header.php');
    ?>

    <h1 class="pageHeading">Top 20 Highest Scores!</h1>

    <br />
    <br />

   <table>
        <tr>
            <th>Display Name</th>
            <th>Score</th>
        </tr>


   <?php
        
        require('includes/dbh.php');
        
        $query = "SELECT display_name, score FROM Leaderboard ORDER BY score DESC LIMIT 20";
        $result = $conn->query($query);

        $count = 0;
        
        if($result->num_rows > 0) {
        
            while($row = $result->fetch_assoc()){
                echo '<tr><td>';
                echo $row['display_name'];
                echo '</td><td>';
                echo $row['score'];
                echo '</td></tr>';
            
            }

        
        } else {
        
            echo 'Database Query Failed <br />';
            echo mysqli_error($conn);
        
        }
        
        $conn->close();
   ?>

   </table>

</body>
</html>
