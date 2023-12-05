xth ssc - ssc/xth std/sslc
branch - science

Important!
Mandatory details which should be there in your resume
 
Name -
Email ID -
Contact details -
Location -
A table which conatains your 10th, 12th/Diploma & Graduation Details (Year of passing, percentage, college/school name, university)





#	Start Month	End Month	Institute/Location	Degree	Country	 
1	Aug 2020	May 2023	Maharashtra Institute of Technology, Pune	BTech	India	 
2	Jun 2017	Jan 2020	JSPM Polytechnic Hadapsar Pune	Diploma - Engineering	India	 
3	Jun 2015	Jun 2016	Sadhana English Medium School Pune	SSC/XTH STD/SSLC	India<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400&display=swap">
    <style>
        body {
            font-family: 'Bebas Neue', sans-serif;
            margin: 0;
            overflow: hidden;
            position: relative;
        }

        img.background-image {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translateX(-50%) translateY(-50%);
        }

        nav {
            position: relative;
            z-index: 1;
        }

        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .big-png1 {
            position: fixed;
            bottom: 0;
            left: 50vh;
            -webkit-filter: drop-shadow(15px 0px 0px #000);
            filter: drop-shadow(10px 0px 0px #000);
            max-width: 30%;
            z-index: 2;
        }

        .big-png1:hover {
            -webkit-filter: drop-shadow(15px 0px 0px #000);
            filter: drop-shadow(-10px 0px 0px #000);
        }
        .big-png {
            position: fixed;
            bottom: 0;
            left: 40vh;
            -webkit-filter: drop-shadow(15px 0px 0px #000);
            filter: drop-shadow(10px 0px 0px #000);
            max-width: 20%;
            z-index: 2;
        }

        .big-png:hover {
            -webkit-filter: drop-shadow(15px 0px 0px #000);
            filter: drop-shadow(-10px 0px 0px #000);
        }

        .black-box {
            position: fixed;
            width: 800px;
            height: 150px;
            font-size: 3vh;
            bottom: 0px;
            right: 0px;
            padding: 1vh;
            background-color: black;
            color: white;
            padding: 15px;
            z-index: 2;
        }

        /* Updated styles for the new inline black boxes */
        .inline-black-box {
            position: fixed;
            width: 780px;
            margin: 20px;
            background-color: black;
            color: white;
            margin-top: 150px;
            padding: 15px;
            text-align: left;
            right: 0px; /* Adjust the right position as needed */
        }

        .inline-box-text {
            font-size: 14px;
        }

        /* New style for the replacement image */
        .new-image {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translateX(-50%) translateY(-50%);
            display: none; /* Initially hide the new image */
        }
    </style>
    <title>Navbar Example</title>
</head>

<body class="bg-black">

    <img src="https://i.ibb.co/RDNypRM/do-you-think-lucia-will-look-like-this-v0-hgp238zhqm7b1-1-1.png" alt="Big PNG"
    class="big-png" id="originalImage">

<img src="https://i.imgur.com/5u8n0Gn.pngg" alt="New Image"
    class="big-png1" id="newImage">

    <img src="https://rockstarintel.com/gta-6-trailer-screenshots/grand-theft-auto-vi-trailer-1-0-3-screenshot-1/" alt="Background Image"
        class="background-image">

    <nav class="bg-black text-2xl p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="https://i.imgur.com/pOux9St.png" alt="Logo" class="h-28 w-30 mr-2">
            </div>

            <div class="hidden mt-2 md:flex flex-grow justify-center">
                <a href="#" class="text-white mx-6 hover:underline">Home</a>
                <a href="#" class="text-white mx-6 hover:underline">About</a>
                <a href="#" class="text-white mx-6 hover:underline">Services</a>
                <a href="#" class="text-white mx-6 hover:underline">Contact</a>
                <a href="#" class="text-white mx-6 hover:underline">Map</a>
                <!-- Button to swap images -->
    <button id="imageSwapBtn" class="text-white mx-6 hover:underline">Swap Image</button>
            </div>
        </div>
    </nav>

    

    <!-- Existing black box -->
    <div class="black-box">
        <p>Lucia is a protagonist in GTA 6 and was prominently featured in the reveal trailer. Lucia is an ex-convict
            who engages in holdups and likely other crimes, narrates over the trailer, supposedly talking to the possible
            male protagonist.</p>
    </div>

    <!-- New inline black boxes with video -->
    <div class="inline-black-box">
        <!-- Video embed with autoplay and no controls -->
        <video width="100%" height="100%" autoplay muted loop>
            <source src="https://archive.org/download/bg_20231205/bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <script>
        // JavaScript to handle image swapping
        document.getElementById('imageSwapBtn').addEventListener('click', function () {
            // Toggle the visibility of the images
            var originalImage = document.getElementById('originalImage');
            var newImage = document.getElementById('newImage');

            if (originalImage.style.display === 'none') {
                originalImage.style.display = 'block';
                newImage.style.display = 'none';
            } else {
                originalImage.style.display = 'none';
                newImage.style.display = 'block';
            }
        });
    </script>
</body>

</html>
