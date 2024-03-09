<?php
include_once('database.php');
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $fname = $_SESSION['fname'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link rel="stylesheet" href='./files/style.css'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        
    </head>
    <body>

        </div>
        
        <header class="header">
            
            <a href="#" class="logo">PORTFOLIO <span>🌷</span></a>
           
            <nav class="navbar" id="myLinks">
                <a href="home1.html" style="--i:1" class="active" >Home</a>
                <a href="about1.html" style="--i:2">About</a>
                <a href="educational1.html" style="--i:4">Education</a>
                <a href="feedback1.html" style="--i:5">Feedback</a>
                <?php if (!isset($_SESSION['username'])): ?>
          <a href="login.php" style="--i:5">Login</a>
        <?php else: ?>
          <a href="action/logout.php" style="--i:5"><?= $fname ?></a>
        <?php endif ?>
            </nav>
            <audio id="myAudio" autoplay>
                <source src="fav_song.mp3" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
        
            <!-- Play/Pause Button (icon) -->
            <button id="playPauseButton" onclick="togglePlayPause()" class="playIcon"> Sound</button>
        
            <script>
                var audio = document.getElementById("myAudio");
                var playPauseButton = document.getElementById("playPauseButton");
        
                function togglePlayPause() {
                    if (audio.paused) {
                        audio.play();
                        playPauseButton.classList.remove("playIcon");
                        playPauseButton.classList.add("pauseIcon");
                    } else {
                        audio.pause();
                        playPauseButton.classList.remove("pauseIcon");
                        playPauseButton.classList.add("playIcon");
                    }
                }
            </script>
        </header>

        <section id="education">
            <div id="portfolio" class="services">
                <div class="main-text" id="serv">
                    <h2>Educational <span> Timeline</span></h2>
                    <div class="serv-container">
                        <div class="row">
                            <img src="./img/rhexane.png">
                            <div class="layer">
                                <h5>Rhexane Academy</h5>
                                <p>I studied there for almost 11 years since 2009-2020, from kindergarten to a grade 10 high school student.</p>
                            </div>
                        </div>

                        <div class="row">
                            <img src="./img/vincent.png">
                            <div class="layer">
                                <h5>St. Vincent De Paul Maligaya</h5>
                                <p>I transferred around 2020, and studied senior high there.</p>  
                            </div>
                        </div>
                        <div class="row">
                            <img src="./img/nu.png">
                            <div class="layer">
                                <h5>National University</h5>
                                <p>I'm a 2nd year college student and currently enrolled at NU Fairview, taking the course BSIT-MI.</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>  
</html>