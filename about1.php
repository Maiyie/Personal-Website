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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        
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

        <section>
            <div class="about" id="About">
                <div class="about-img">
                  <img src="./img/2.jpg" class="abt-res">
               </div>
                <div class="me" id="me">
                   <br><br><br> 
                   <br><br><br> 
                   <h2>About <span>Me</span></h2><br>
                    <p>I'm Jhomida Pinay-an, Mai for short. Taking a Bachelor of Science in Information Technology MI  at NU Fairview. Beyond coding and designing, I also have an interests in cooking and arts since i was a kid. As a committed student, my journey is fueled by a strong passion for technology.I am genuinely excited about the dynamic field of Information Technology and the prospect of contributing to innovative solutions. Where each challenge presents an opportunity for growth and discovery. 
                    </p> <br>
                    <div class="container1">
                        <h1 class="heading1">Technical Skills</h1>
                        <div class="Technical-bars">
    
                            <div class="bar"><i class='bx bxl-html5' style="color: #c9332e;"></i>
                                <div class="info">
                                    <span>HTML <span class="addhtml"></span></span>
                                </div>
                                <div class="progress-line html">
                                    <span></span>
                                </div>
                            </div>
    
                            <div class="bar"><i class='bx bxl-css3' style="color: #147bbc;"></i>
                                <div class="info">
                                    <span>CSS <span class="addcss"></span></span>
                                </div>
                                <div class="progress-line css">
                                    <span></span>
                                </div>
                            </div>
    
                            <div class="bar"><i class='bx bxl-python' style="color: #b0bc1e;"></i>
                                <div class="info">
                                    <span>Python <span class="addpy"></span></span>
                                </div>
                                <div class="progress-line python">
                                    <span></span>
                                </div>
                            </div>
    
                            <div class="bar"><i class='bx bxl-java' style="color: #c95d2e;"></i>
                                <div class="info">
                                    <span>Java <span class="addjava"></span></span>
                                </div>
                                <div class="progress-line java">
                                    <span></span>
                                </div>
                            </div>
                            <span class="bxl--javascript"></span>
                            <div class="bar"><i class= 'bx bxl-javascript' style="color: #da0b0b;"></i>
                                <div class="info">
                                    <span>Javascript<span class="addjs"></span></span>
                                </div>
                                <div class="progress-line javascript">
                                    <span></span>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
                
            </section>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="files/script.js"></script>
    </body>  
</html>
