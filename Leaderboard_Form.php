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
    <title>Submit to Leaderboard</title>
</head>
<body>

    <button id="openModal" class="input">Submit a Score of 2 or Higher to the Leaderboard</button>

    <div id="myModal" class="modal">
            <div class="modalContent">
                <span id="closeButton">&times;</span>
                    <?php
                        if($_SESSION['score'] < 2){
                            echo '<h1 class="pageHeading">Sorry, you cannot post to the leaderboard yet!</h1>';
                            ?>
                            <br />
                            <?php
                            echo '<h3 class="pageText">Please try again when you have a score of 2 or higher...</h3>';
                        } else {
                            ?>
                            <h1 class="pageHeading">Congrats! Please fill out the form below to register your score!</h1>
                            <form action="/Dice_Game/includes/leaderboard_submit.php" method="post">
                            <input class="input" type="text" name="display_name" placeholder="Please enter a display name!">
                            <p class="pageText">Note: Display names may only be 1-8 Characters Long!</p>
                            <br />
                            <br />
                            <input class="input" type="submit" name="enter_score" value="Submit Score">
                            </form>
                            <?php
                        }

                    ?>
            </div>
    </div>

    <script>
    
        // Creating Modal Variables using getElementById
        var modal = document.getElementById('myModal');

        var modalButton = document.getElementById('openModal');

        var closeButton = document.getElementById('closeButton');

        // Event listeners to open and close the modal
        modalButton.addEventListener('click', openMyModal);

        closeButton.addEventListener('click', closeMyModal);

        // Functions for opening and closing the modal
        function openMyModal() {
            modal.style.display = 'block';
        }   

        function closeMyModal() {
            modal.style.display = 'none';
        }
    
    </script>


</body>
</html>
