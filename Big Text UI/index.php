<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Londrina+Outline">
    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }

        body {
            
            height: 100%;
            margin: 0;
            overflow: hidden;
            
            
            padding: 4rem;
            background-color: #204c4c;
            font-family: 'Playfair Display', serif;
            position: relative; /* Add this to position children elements relative to body */
        }

        .header-text {
            color: white;
            font-size: 3rem;
        }

        .middle-text {
    color: white;
    font-size: 20rem;
    position: fixed;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-family: 'Londrina Outline', sans-serif;
    white-space: nowrap;
    transition: font-size 0.3s ease; /* Add a smooth transition to font-size */
}

.middle-text:hover {
    font-size: 21rem; /* Increase font size on hover */
}



        .bottom-text {
            /* Removed the position: fixed; property */
            bottom: 4rem;
            font-family: 'Barlow Semi Condensed', sans-serif;
            color: white;
            position:fixed;
            max-width: 35%;
            font-size: 1.5rem;
        }
        
        .bottom-text-right {
    bottom: 5rem;
    font-family: 'Barlow Semi Condensed', sans-serif;
    color: white;
    position: fixed;
    max-width: 35%;
    padding:20px;
    font-size: 1.5rem;
    right: 10rem; /* Adjust the value to position it as desired from the right edge */
    border: 2px solid white; /* Add a white border with 2px width */
    border-radius: 50px; /* Add a border radius of 10px (adjust as needed) */
}


body::before {
    content: "";
    background-image: url('https://i.imgur.com/fNXdv1y.png');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    position: fixed;
    top: 80%; /* Adjust the top value to bring the image down */
    left: 50%;
    transform: translate(-50%, -50%);
    width: 33%;
    height: 100%;
    z-index: 1;
}


.stars-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.star {
    position: absolute;
    width: 20px; /* Adjust the size of the star as needed */
    height: 20px;
    background: url('https://www.freeiconspng.com/thumbs/white-star-icon/white-star-icon-14.png') no-repeat center center; /* Replace 'star.png' with your star logo image */
    background-size: contain;
    animation: rotate 5s linear infinite;
}

@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}


    </style>
</head>
<body>
    <h1 class="header-text">Artistic.</h1>
    <h1 class="middle-text">Say Hello.</h1>
    <h1 class="bottom-text">“Fear is not evil. It tells you what weakness is. And once you know your weakness, you can become stronger as well as kinder.” — Gildarts Clive (Fairy Tail)</h1>
   <div class="stars-container">
     
    </div>
    <script>
        // Function to generate a random number between min and max
function getRandom(min, max) {
    return Math.random() * (max - min) + min;
}

// Function to create and position stars with top and right padding
function createStars() {
    const starsContainer = document.querySelector('.stars-container');
    const starCount = 6; // Number of stars you want
    const starSize = 40; // Adjust the size of the star as needed
    const spacing = 10; // Adjust the spacing between stars as needed
    const padding = 4 * parseFloat(getComputedStyle(document.documentElement).fontSize); // 4rem in pixels

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.classList.add('star');

        const topPosition = padding + i * (starSize + spacing);
        
        star.style.right = padding + 'px';
        star.style.top = topPosition + 'px';

        starsContainer.appendChild(star);
    }
}

// Call the function to create stars when the page loads
window.addEventListener('load', createStars);



    </script>

    <h1 class="bottom-text-right">Login Here</h1>
</body>
</html>
