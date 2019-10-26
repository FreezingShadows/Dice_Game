DROP DATABASE IF EXISTS dice_game_leaderboard;
CREATE DATABASE dice_game_leaderboard;


USE `dice_game_leaderboard`;

CREATE TABLE Leaderboard (
	leaderboard_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	display_name VARCHAR(8),
	score INT

);
