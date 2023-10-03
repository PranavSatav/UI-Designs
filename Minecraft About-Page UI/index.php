<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}

    @font-face {
      font-family: 'mcfont';
      src: url('https://medverse.000webhostapp.com/ui8/font.ttf') format('truetype');
    }

    body {
      font-family: 'mcfont', sans-serif;
      margin: 0; /* Remove default margin to fill the entire viewport */
    }

    .color {
      background-color: #f5f6f6;
    }

    .color2 {
      background-color: #484f59;
    }

    /* Center the heading vertically */
    .left-section {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding-left:10rem;
      height: 100vh; /* Make the left section take the full height of the viewport */
    }

   /* New style for the right image */
    .right-image {
      position: fixed;
      top: 0;
      right: 18rem;
      width: 40%; /* Adjust the width as needed */
      height: 100vh; /* Make the image take the full height of the viewport */
      object-fit: contain; /* Ensure the image covers the entire container */
      z-index: 999; /* Set a high z-index to bring the image to the front */
    }
    .minecraft-button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 20px;
      margin:5px;
      text-align: center;
      text-decoration: none;
      user-select: none;
      transition: background-color 0.3s ease;
      cursor: pointer;
      outline: none;
    }
    
    /* Add this to your existing styles */
.new-image {
  width: 100%; /* Cover the entire width of the container */
  height: 100vh; /* Adjust the height as needed */
  object-fit: cover; /* Ensure the image covers the entire container without distortion */
}


    .minecraft-button:hover {
      background-color: #55acee;
    }

    .minecraft-button-blue {
      background-color: #3498db;
      color: #ffffff;
      
    }

    .minecraft-button-green {
      background-color: #27ae60;
      color: #ffffff;
     
    }

    .minecraft-button-red {
      background-color: #e74c3c;
      color: #ffffff;
      
    }
  </style>
</head>
<body>
  <img src="https://1000logos.net/wp-content/uploads/2018/10/Minecraft-Logo.png" alt="Minecraft Logo" class="absolute top-0 left-10 w-58 h-36">

  <div class="color2 flex justify-center items-center h-screen">
    <!-- Left: Content -->
    <div class="w-5/6 left-section color hidden lg:block">
      <div class="left-10">
        <h1 class="text-8xl font-bold">What is <br><span style="color:grey";>Minecraft?</span></h1>
        <p class="text-lg text-black mr-24 mt-4">Minecraft is a sandbox video game that allows players to build and explore virtual <br> worlds made up of blocks.</p>
        <div class="mt-8">
        <button class="minecraft-button minecraft-button-blue">Play Now</button>
  <button class="minecraft-button minecraft-button-green">Download</button>
  <button class="minecraft-button minecraft-button-red">Learn More</button></div>
      </div><!-- Footer -->
  <footer class="color  py-4">
    <p class="text-gray-500">&copy; 2023 <span class="text-black">PranavSatav.</span> All rights reserved.</p>
  </footer>
    </div>

    <!-- Right: Image -->
    <div class="lg:w-1/2">
      <img src="https://i.imgur.com/2GVzBgq.png" alt="Right Image" class="right-image">
      <img src="https://i.imgur.com/QKsuhn9.jpg" alt="New Image" class="new-image">
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Array of image URLs
      var imageUrls = [
        'https://i.imgur.com/QKsuhn9.jpg',
        'https://w0.peakpx.com/wallpaper/449/183/HD-wallpaper-minecraft-nether-universe.jpg',  // Add more image URLs as needed
        'https://www.hdwallpapers.in/download/minecraft_aerial_view_4k_hd-2560x1440.jpg',
      ];

      var currentIndex = 0;
      var newImage = document.querySelector('.new-image');

      // Function to change the image source with a smooth transition
      function changeImage() {
        newImage.style.opacity = '0'; // Set opacity to 0 for smooth transition

        setTimeout(function () {
          // Change the image source
          newImage.src = imageUrls[currentIndex];

          // Increment the index for the next image
          currentIndex = (currentIndex + 1) % imageUrls.length;

          // Set opacity back to 1 after a short delay
          setTimeout(function () {
            newImage.style.opacity = '1';
          }, 0);
        }, 0); // Delay before changing the image
      }

      // Call the function to start the image shuffle
      setInterval(changeImage, 5000); // Change image every 5 seconds (adjust as needed)
    });
  </script>
</body>
</html>
