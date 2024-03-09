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
    <link rel="shortcut icon" type="image/png" href="ic.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="files/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
</head>
<body>


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


    <section class="home" id="Home">
        <div class="home-content">
            <h3>Hello, I am</h3>
            <h1>Jhomida Pinay-an</h1>
            <h4 style="--i:6">BSIT student from NU Fairview and I'm<br> passionate in <span class="text"></span></h4>

            <div class="home-sci">
                <a href="https://www.facebook.com/maiiimaiii13/" style="--i:7" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/maiiiyiee/" style="--i:8" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="mailto:your.jhomidapinayan@gmail.com" style="--i:9" target="_blank"><i class='bx bxl-gmail'></i></a>
                <a href="https://github.com/Maiyie" style="--i:10" target="_blank"><i class='bx bxl-github'></i></a>
            </div>
        </div>
    </section>

    <script src="./files/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
