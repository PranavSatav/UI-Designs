<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Kumar+One+Outline&family=Londrina+Outline&display=swap" rel="stylesheet">

    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }

        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Gabarito', sans-serif;
            
        }

        video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            transition: opacity 1s ease-in-out; /* Added transition property for smooth fade in/out */
            opacity: 1;
        }

        video.fade-out {
            opacity: 0;
        }

        .centered-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-size: 4em;
            mix-blend-mode: difference; /* Invert text color */
        }

        .bottom-text {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            font-size: 1em;
        }

        .top-left-text {
            position: absolute;
            top: 0;
            left:2rem;
            padding: 10px;
            color: white;
            font-size: 1.5em;
        }
        .big{
            font-size:1.1em;
            font-family: 'Black Ops One', cursive;
        }
        .link{
            font-size:1em;
            color: white;
        }
        .mute-toggle {
            position: absolute;
            bottom: 20px;
            right: 30px;
            background-color: white;
            color: black;
            border: 1px solid #fff;
            border-radius: 0px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .change-video{
            position: absolute;
            bottom: 10px;
            left: 30px;
            background-color: black;
            color: white;
            font-size: 1.5em;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            border-radius: 0px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .vertical-text {
            writing-mode: vertical-rl; /* Vertical text from right to left */
            transform: rotate(180deg); /* For some browsers, like Firefox, additional rotation is needed */
            white-space: nowrap; /* Prevent text from wrapping */
            color:white;
            position: absolute;
            top: 35%;
            margin-left:2.5em;
            mix-blend-mode: difference; /* Invert text color */
        }
        .font{
            font-family: 'Gabarito', sans-serif;
            font-size: 1em;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
    </style>
</head>
<body>
    <video autoplay loop muted id="bgVideo">
        <source src="3.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="centered-text" id="brandText">
        <h1>CHANEL</h1>
    </div>

    <div class="bottom-text">
        <p>UI Made with Love by PranavSatav  - <a class="link" href="">GitHub</a></p>
    </div>

    <div class="top-left-text">
        <p>VOGUE <span class="big">X</span> ITALIA</p>
    </div>

    <button class="mute-toggle font" onclick="toggleMute()">music</button>
    <p class="change-video font" onclick="changeVideo()">Change Background</p>
    <div class="vertical-text">
        Chanel / Prada / DIOR / LOUIS VUITTON / TIFFANY / YSL
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var brands = ["CHANEL", "PRADA", "LOUIS VUITTON", "1311", "DIOR", "YSL", "GUCCI"];
            var currentIndex = 0;
            var brandText = document.getElementById('brandText').getElementsByTagName('h1')[0];

            function changeBrand() {
                brandText.innerHTML = brands[currentIndex];
                currentIndex = (currentIndex + 1) % brands.length;
            }

            setInterval(changeBrand, 2000);
        });

        document.addEventListener('DOMContentLoaded', function () {
            var video = document.getElementById('bgVideo');
            var muteToggle = document.querySelector('.mute-toggle');
            var changeVideoButton = document.querySelector('.change-video');
            var originalVideoSrc = "3.mp4";
            var newVideoSrc = "https://www.prada.com/content/dam/pradanux/home_page/2023/09/Collection_FW23/hero/loop_DT.mp4/_jcr_content/renditions/cq5dam.video.pradanux-large.1920.1080.mp4";
            var currentVideo = 'original';

            function toggleMute() {
                video.muted = !video.muted;
                muteToggle.innerHTML = video.muted ? 'Unmute' : 'Mute';
            }

            function changeVideo() {
                // Add the class to initiate fade-out transition
                video.classList.add('fade-out');

                // Wait for the fade-out transition to complete, then change the video source and initiate fade-in transition
                setTimeout(function () {
                    if (currentVideo === 'original') {
                        video.src = newVideoSrc;
                        currentVideo = 'new';
                    } else {
                        video.src = originalVideoSrc;
                        currentVideo = 'original';
                    }
                    video.load();
                    video.play();

                    // Remove the fade-out class to initiate fade-in transition
                    video.classList.remove('fade-out');
                }, 1000); // Adjust the duration to match the transition duration in CSS
            }

            muteToggle.addEventListener('click', toggleMute);
            changeVideoButton.addEventListener('click', changeVideo);

            setInterval(changeBrand, 2000);
        });
    </script>
</body>
</html>
