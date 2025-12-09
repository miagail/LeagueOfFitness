# League of Fitness – Phase 1 Source Code

This project is a fitness gamification website that allows users to register and log in. This phase includes:
- Database connection
- Registration process (insert new users)
- Login authentication
- Basic session handling with homepage redirect

## How to Run
1. Install XAMPP
2. Move `league_of_fitness` folder into `C:\xampp\htdocs`
3. Start Apache and MySQL from XAMPP
4. Go to http://localhost/phpmyadmin
 
—-------------------------------------------------------------------------------------------------------

# League of Fitness - Phase 2 Source Code
League of Fitness is a fitness gamification web application where users earn EXP, unlock skins, complete challenges, join squads, and track workouts. The project combines fitness tracking with a Mobile Legends–style interface to make progress feel fun and interactive.

## Description
- The goal of League of Fitness is to turn everyday exercise into a rewarding, game-like experience. This project includes a full UI, authentication system, XP logic, automatic skin unlocking, squad system, and weekly leaderboards.
- Users can:
  Register and log in
  Log workouts and gain EXP
  Level up and unlock skins
  Complete achievements
  Join or create squads
  Compete in leaderboards
  Track personal progress with a profile system

## Getting Started
## Dependencies
- Before running the project, make sure you have:
   Windows 10 or newer
   XAMPP installed (Apache + MySQL + PHP)
   PHP 8.0 or higher
   phpMyAdmin (included with XAMPP)
   A modern web browser (Chrome, Firefox, or Edge)

## Installing
1. Move the Project Folder
  Place the folder named league_of_fitness into: C:\xampp\htdocs\
2. Start Your Local Server
  Open XAMPP
  Start Apache
  Start MySQL
3. Create the Database
  Open your browser
  Go to: http://localhost/phpmyadmin
  Create a new database named: league_of_fitness
  Import your SQL file containing all tables (users, squads, skins, workouts, achievements, etc.)
4. Verify Database Connection
  Open the file: includes/db_connect.php
  Make sure the following settings match your local environment:
    Host: localhost
    User: root
    No password
    Database name: league_of_fitness

## Executing the Program
- How to Launch the Website
   Go to: http://localhost/league_of_fitness/index.php

- Key Pages:
   Feature	|	File
   Homepage	|	index.php
   Login		|	login.php
   Register	|	register.php
   Dashboard	|	dashboard.php
   Profile		|	profile.php
   Log Workout	|	add_workout.php
   Challenges	|	challenges.php
   Achievements	|	achievements.php
   Skins		|	view_skins.php
   Leaderboards	|	view_stats.php
   Squads	|	squad_page.php

## Help
- Common Problems and Fixes
   Problem: Database connection error
   Solution: Check the database name and credentials in the connection file.
   
   Problem: Images or styles not loading
   Solution: Confirm the assets folder exists in the correct directory and paths are correct.
   
   Problem: Background image not displaying
   Solution: Ensure the image file is inside assets/images and the CSS path matches the file’s location.
   
   Problem: Sessions not working
   Solution: Make sure session_start() is at the top of every protected page.

## Authors
Mia Demape
Lead Developer – League of Fitness

## Version History
- 1.0 - Final Release
  Complete UI with MLBB-inspired theme
  Achievements and skin unlocking
  Squads and leaderboard system
  XP and level-up logic
  Full background images and polish
- 0.5 - Phase II
  Added EXP system and daily missions
- 0.3 - Phase II
  Added squad creation and joining
- 0.2 - Phase II 
  Added authentication and profile editing
- 0.1 - Phase I
  Initial project structure and setup

## Acknowledgments
- Inspired by Mobile Legends interface and game structure
- Uses PHP, MySQL, Bootstrap, and custom CSS
