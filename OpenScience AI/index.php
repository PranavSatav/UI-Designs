<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
   <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Kumar+One+Outline&display=swap" rel="stylesheet">
   
    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
        
        html, body {
            font-family: 'Chakra Petch', sans-serif;
        }
        .container {
            display: flex;
            align-items: center;
        }

        /* Style for the big number */
        .big-number {
            font-size: 10rem;
            font-weight: bold;
            font-family: 'Oswald', sans-serif;
            background-color: rgba(255, 255, 255, 0.1); /* White background with alpha transparency */
            margin-right: 20px;
            
            backdrop-filter: blur(40px); /* Add Gaussian blur */
            padding:20px;
        }
         .big-number1 {
            font-size: 5rem;
            font-weight: bold;
            
            font-family: 'Oswald', sans-serif;
            background-color: rgba(255, 255, 255, 0.1); /* White background with alpha transparency */
            margin-right: 20px;
            
            backdrop-filter: blur(40px); /* Add Gaussian blur */
            padding:40px;
        }

        /* Style for the heading */
        .heading {
            font-size: 4rem;
            margin-left:3rem;
            border-bottom:2px solid #fff;
            font-weight: bold;
        }

        /* Style for the paragraph */
        .paragraph {
            font-size: 1.25rem;
           
                background-color: rgba(255, 255, 255, 0.1); /* White background with alpha transparency */
    backdrop-filter: blur(50px); /* Add Gaussian blur */
            text-align: justify;
            text-justify: inter-word;
             word-wrap: break-word;
            border-bottom:2px solid #fff;
            border-top-left-radius:30px;
            border-right:2px solid #fff;
            padding:20px;
            
            
            max-width:70%;
        }
        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            margin-left:15rem;
            background-color: rgba(255, 255, 255, 0.1); /* White background with alpha transparency */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            z-index: 50;
            backdrop-filter: blur(50px); /* Add Gaussian blur */
        }

        .logo {
            color: white;
            font-size: 24px;
        }

 

.login-button {
            border: 3px solid white;
            color: white;
            padding: 10px 30px; /* Reduced padding */
            background-color: transparent;
            border-radius: 999px;
            display: flex; /* Make it a flex container */
            align-items: center; /* Center the arrow vertically */
            
            justify-content: space-between; /* Add space between text and arrow */
        }
        
          .marquee-container {
    width: 500px; /* Adjust the width as needed */
    overflow: hidden;
    white-space: nowrap;
    font-family: 'Chakra Petch', sans-serif;
    margin-top:20px;
    padding:5px;

margin-left:5rem;
    background-color: rgba(255, 255, 255, 0.1); /* White background with alpha transparency */
    backdrop-filter: blur(50px); /* Add Gaussian blur */
    border-left: 10px solid white; /* White border */
    border-right: 10px solid white; /* White border */
  }

  .marquee-content {
    display: inline-block;
    padding:5px;
    
    
    animation: marquee 10s linear infinite;
  }

  @keyframes marquee {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
  }
     /* Style for the container */
        #corner {
            position: fixed;
            bottom: 0;
            right: 0;
            height:80%;
            max-width:500px;
            border-left:2px solid #fff;
             text-align: justify;
             font-size: 18px;
            text-justify: inter-word;
             word-wrap: break-word;
            border-top:2px solid #fff;
            background-color: rgba(255, 255, 255, 0.1); /* White background with alpha transparency */
    backdrop-filter: blur(50px); /* Add Gaussian blur */
            padding:2rem;
        }

        /* Style for the heading within the container */
        #corner h1 {
            margin: 0;
           
            font-size: 28px;
            color: #fff;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Background</title>
    
</head>
<body class="bg-black">
    <!-- Header -->
    <div class="header">
        <div class="logo">
            OpenScience.AI
        </div>
    
        <div class="login-button">
            Login ➜
        </div>
    </div>

    <div class="fixed top-0 left-0 w-full h-full z-10">
        <video autoplay loop muted playsinline class="w-full h-full object-cover">
            <source src="https://medverse.000webhostapp.com/ui2/1.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="relative z-20 text-white p-8">
       <div class="container p-10 mt-28">
        <!-- Part 1: Big Number -->
        <div class="big-number">01</div>
        
        <!-- Part 2: Heading and Paragraph -->
        <div>
            <div class="heading">Who Are We ➜</div>
            <p class="paragraph">Open science is the movement to make scientific research (including publications, data, physical samples, and software) and its dissemination accessible to all levels of society, amateur or professional. Open science is transparent and accessible knowledge that is shared and developed through collaborative networks.</p>
            <div class="marquee-container">
    <div class="marquee-content">
      This is a sample marquee with a white border. You can customize the text and style as needed.
    </div>
  </div>
  
       

            
        </div>
    
    </div>
    <div class="container p-10 ">
        <!-- Part 1: Big Number -->
        <div class="big-number1">02</div>
        
        <!-- Part 2: Heading and Paragraph -->
        <div>
            <div class="heading">OpenScience Projects ➜</div>
            <p class="paragraph">Open science is the movement to make scientific research (including publications, data, physical samples, and software) and its dissemination.
                    <div class="mt-2 border-lg">
           Show me more information ➜
        </div>
            </p>
            
  
       

            
        </div>
    
    </div>
        
        <div id="corner">
        <!-- Heading within the container -->
        <h1>About Us</h1>
        <!-- Add your content here -->
        
        
        <img class="rounded-2xl" src="https://i.imgur.com/4QKkuVq.gif">
        <p class="m-2">Open science can be seen as a continuation of, rather than a revolution in, practices begun in the 17th century with the advent of the academic journal, when the societal demand for access to scientific knowledge reached a point at which it became necessary for groups of scientists to share resources with each other.</p>
        <div class="login-button mt-6">
           See out projects ➜
        </div>
    </div>
    </div>
</body>
</html>
