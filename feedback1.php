<?php
include_once('database.php');
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $fname = $_SESSION['fname'];
} else {
  $username = '';
  $fname = '';
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

        <section class="contacts" id="Contact">
            <div class="contact-text">
                <h2>Send<span>Message</span></h2>
                <div class="contact-form">
                    <form method="post" action="send_email.php" class="contact-form">
                        <div class="form-group">
                            <label for="email">Your Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Feedback:</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <?php if (isset($_SESSION['messageemail'])): ?>
              <div class="alert alert-success <?= $_SESSION['success'] == 'danger' ? 'bg-danger text-light' : null ?>" role="alert">
                <?php echo $_SESSION['messageemail']; ?>
              </div>
              <?php unset($_SESSION['messageemail']); ?>
            <?php endif
            ?>
            <?php if (!isset($_SESSION['username'])): ?>
              <div class="alert alert-success bg-danger text-light" role="alert">
                You need to sign in or register to send a message
              </div>

            <?php endif
            ?>
                        <button type="submit">Submit</button>
                        <div class="contact-list">
                            <ul>
                                <li><i class='bx bxs-send'></i>jhomidapinayan@gmail.com</li>
                                <li><i class="bx bxs-phone-call"></i>09859432459</li>
                            </ul>
                        </div>
                        <li>If you haven't registered yet, please <a href="reg.php">register</a>.</li>
                    <li>If you already have an account, please <a href="logi.php">login</a>.</li>
                    </form>
                </div>
           
        </section>
        
        
        
        <a href="#Home" class="top"><i class='bx bx-up-arrow-alt' ></i></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="./files/script.js"></script>
    </body>  
</html>

