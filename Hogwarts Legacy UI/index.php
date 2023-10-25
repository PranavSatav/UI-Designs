<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Background Video Website</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;400;700&display=swap">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .footer {
    position: fixed;
    bottom: 20px; /* Adjust this value to change the distance from the bottom */
    left: 50%;
    transform: translateX(-50%);
    color: white; /* Adjust the color as needed */
    font-size: 14px; /* Adjust the font size as needed */
  }
  </style>
</head>

<body>
  <div id="video-overlay"></div>
  <video id="video-background" autoplay muted loop>
    <source src="https://medverse.000webhostapp.com/ui9/3.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div id="content">
    <p id="top-left-text">
      <span style="margin-right: 50px;">LOGIN</span>
      <span style="margin-right: 50px;">ABOUT US</span>
      <span>FAQ</span>
    </p>

    <p id="top-right-text">
      <span style="margin-right: 30px;">NEWS</span>
      <span class="custom-border">PURCHASE</span>
    </p>

    <img src="https://i0.wp.com/short-story.global/wp-content/uploads/2023/02/Hogwarts-logo.png?fit=1324%2C424&ssl=1"
      alt="Logo Image">
  </div>

  <div class="relative font-inter antialiased">
    <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
      <div class="text-center">
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
          <canvas data-particle-animation></canvas>
        </div>
      </div>
    </div>
    <div class="black-box left">
      <p>Explore Open World</p>
      <img src="https://cdn-hogwartslegacy.warnerbrosgames.com/static/rule-a.png">
    </div>
    <div class="black-box1 right">
      <p>Harry Potter Fan Club</p>
      <img src="https://cdn-hogwartslegacy.warnerbrosgames.com/static/rule-a.png">
    </div>
    
    <div class="black-box2 right">
      <p>World Adventure</p>
      <img src="https://cdn-hogwartslegacy.warnerbrosgames.com/static/rule-a.png">
    </div>
    
    
    <div class="black-box3 right">
      <p>Forge Relationships</p>
      <img src="https://cdn-hogwartslegacy.warnerbrosgames.com/static/rule-a.png">
    </div>
    <img id="bottomImage"
      src="https://i.imgur.com/nfXq1Tt.png" alt="Bottom Image">
    <script src="particles.js"></script>
    <p class="footer">UI Designed & Developed by PranavSatav 🪄</p>
  </div>
</body>

</html>
