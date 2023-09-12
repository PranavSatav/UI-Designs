<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap">
    <style>
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
@font-face {
    font-family: 'Beni Bold';
    src: url('https://medverse.000webhostapp.com/ui1/beni.ttf') format('truetype');
    /* You can add additional font formats (e.g., woff, woff2) for better browser compatibility */
}

        body {
            background-color: #000;
            margin: 0;
            padding: 0;
        }

 .header {
   
    color: white;
    padding: 1rem;
    text-align: center; /* Center align the text horizontally */
    position: relative;
     z-index:3;
}

.big-heading {
    font-family: 'Beni Bold', sans-serif;
    font-size: 15rem;
    padding-left: 3rem;
    margin: 0;
    padding-bottom: 1rem;
    padding-top: 4rem;
    line-height: 11rem; /* Adjust this value to reduce line spacing */
}


        .top-text {
            display: inline-block;
            padding-left: 3rem;
            font-family: 'Chakra Petch', sans-serif;
            font-size: 1.1rem;
        }

        .container {
            position: fixed;
            top: 25px;
            right: 25px;
            left: 25px;
            bottom: 25px;
            background: #e6e4d5;
           
            border-radius: 20px;
        }

        .upper-text {
            font-weight: 600;
            font-size: 3rem;
            margin: 0px;
            padding-left: 4rem;
            padding-top: 1rem;
            font-family: 'Chakra Petch', sans-serif;
        }
        /* Styles for the container */
.centered-container {
  position: fixed;
  top: 3%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: black;
  width: 1100px; /* Adjust the width as needed */
  height: 110px; /* Adjust the height as needed */
  z-index: 2;

  clip-path: polygon(20% 0%, 80% 0%, 100% 0, 100% 0%, 80% 100%, 20% 100%, 0 0%, 0 0);
}


/* Styles for the button */
/* Styles for the button */
.login-button {
  position: absolute;
  top: 20px;
  right: 20px;
  background-color: white;
  font-size:1rem;
  border: 2px solid black;
  border-radius: 100px; /* Rounded corners */
  font-family: 'Chakra Petch', sans-serif;
  color: black; /* Text color */
  text-decoration: none; /* Remove underline on the text */
  font-weight:800; /* Make the text bold */
  cursor: pointer; /* Show pointer cursor on hover */
  text-align: center; /* Center the text */
  padding: 0.5rem 3rem; /* Adjust padding as needed */
  margin-right:4rem;
}


/* Common styles for both containers */
.containerinline {
  display: inline-block;
}

/* Custom Container 1 */
.custom-container-1 {
  width: 300px;
  height: 300px;
  margin-left: 3rem; /* Adjust margin-right to create space between containers */
  background-image: url('https://gachax.com/anime/wp-content/uploads/sites/29/2023/06/cute-anime-girl-pfp-14-300x300.png');
  background-size: cover;
  border-radius: 20px;
  border: 2px solid #D67BFF;
  
  display: inline-block;
  clip-path: polygon(30% 0, 100% 0, 100% 100%, 0 100%, 0 30%);
  position: relative;
}

.custom-button-1 {
  position: absolute;
  top: 0;
  right: 0;
  width: 25px;
  height: 25px;
  background-color: white;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  font-family: 'Chakra Petch', sans-serif;
  align-items: center;
  margin: 0.5rem;
  cursor: pointer;
}

/* Custom Container 2 */
.custom-container-2 {
  width: 800px;
  height: 250px;
  background-color: #fff; /* Replace with your image file */
  background-size: cover;
  border-radius: 20px;
  margin-left: 3rem;
  display: inline-block;
  border:2px solid #000;
  clip-path: polygon(50% 0%, 60% 15%, 100% 15%, 100% 81%, 100% 100%, 0 100%, 0 78%, 0% 43%, 0 0);
  position: relative;
}

/* Custom Header */
.custom-header {
  position: absolute;
  font-family: 'Chakra Petch', sans-serif;
  top:25px;
  margin:5px;
  left: 50px; /* Adjust the left position as needed */
  font-size: 34px; /* Adjust the font size as needed */
}

/* Custom Text */
.custom-text {
  position: absolute;
  padding:0.7rem;
  top: 60px; /* Adjust the top position as needed */
  left: 20px; /* Adjust the left position as needed */
  font-family: 'Chakra Petch', sans-serif;
  font-size: 20px; /* Adjust the font size as needed */
}

/* Custom Corner Button */
.custom-corner-button {
  position: absolute;
  bottom: 25px; /* Adjust the bottom position as needed */
  right: 30px; /* Adjust the right position as needed */
  background-color: #FBF0B2;
  color: black;
  font-size:2rem;
  border: 2px solid #000;
  font-family: 'Chakra Petch', sans-serif;
  
  
  padding: 3px 80px;
  cursor: pointer;
}


.custom-button-2 {
  position: absolute;
  top: 0;
  left: 0;
  width: 25px;
  height: 25px;
  background-color: black;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  color:white;
  font-family: 'Chakra Petch', sans-serif;
  align-items: center;
  margin: 0.5rem;
  cursor: pointer;
}


/* Add styles for the button's content (e.g., a plus sign) */
.custom-button::before {
  content: ""; /* Add your desired content here */
  font-size: 14px; /* Adjust the font size as needed */
  font-weight: bold;
}
  .custom-button-3 {
  position: absolute;
  top: 0;
  right: 0;
  width: 25px;
  height: 25px;
  background-color:  #e6e4d5;
  
  display: flex;
  justify-content: center;
  color:black;
  font-family: 'Chakra Petch', sans-serif;
  align-items: center;
  margin: 0.5rem;
  cursor: pointer;
}

.side-big {
  background-image: url('https://i.pinimg.com/originals/4d/50/73/4d5073daa371e39e39413ea9d5493cbd.gif');
  background-size: cover;
  width: 500px;
  height: 650px;
  position: fixed;
  
  top: 55%;
  bottom:4rem;
  border:6px solid #F6635C;
  right: 0%;
  transform: translate(-20%, -50%);
  clip-path: polygon(24% 0, 50% 0, 100% 0, 100% 81%, 80% 100%, 0 100%, 0 78%, 0 23%, 13% 10%);
}

.middle {
   background-image: url('https://i.imgur.com/M8WbVSb.png');
  background-size: cover;
  width: 150px;
  height: 150px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}





    </style>
</head>
<body>
<div class="centered-container"></div>

<div class="header">
    <p class="top-text">Guideline</p>
    <p class="top-text">Faq</p>
    <p class="top-text">Contact Us</p>
     <p class="top-text">Discord</p>
      <p class="top-text">Twitter</p>
</div>

<div class="container">
    <p class="upper-text">crypko</p>
    <button class="login-button">Join Us</button>
    <!-- Your website content goes here -->
    
    <p class="big-heading">ANIME CHARACTER <br>GENERATION</p>
   <div class="containerinline">
    <div class="custom-container-1">
      <!-- Custom Container 1 Content -->
      <div class="custom-button-1">1</div>
    </div>

    <div class="custom-container-2">
  <!-- Custom Container 2 Content -->
  <div class="custom-button-2">2</div>
  <h2 class="custom-header">Explore More with US</h2>
  <p class="custom-text">Crypko. A core technology for generating anime memes and characters using our fine tuned AI Model, trained specifially for this. A core technology for generating anime memes and characters. </p>
  <button class="custom-corner-button">< Take Me There ></button>
</div>

  </div>
<div class="side-big"><div class="custom-button-3">3</div>



</div>
  
<div class="middle"></div>
</div>

</body>
</html>
