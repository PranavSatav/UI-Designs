<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap">
    <style>
        body, html {
            height: 100vh;
            margin: 0;
            overflow: hidden;
            font-family: 'Gabarito', sans-serif;
        }

        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }

        /* Add these CSS for the fade-in and fade-out animations */
        .fade-in {
            animation: fadeIn 1.5s ease-out;
        }

        .fade-out {
            animation: fadeOut 1.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }

        /* New styles for mobile responsiveness */
        @media screen and (max-width: 640px) {
            /* Hide header text and navigation on mobile */
            header {
                display: none;
            }

            /* Hide the GIF on mobile */
            .bottom-0.left-32 img {
                display: none;
            }

            /* Hide the email on mobile */
            .bottom-0.right-16 {
                display: none;
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const lostText = document.getElementById("lostText");
            const texts = ["in forest", "confused", "bewildered", "misplaced"]; // Add more texts as needed
            let index = 0;

            function changeLostText() {
                lostText.classList.add('fade-out'); // Add fade-out class for the fade-out effect

                lostText.addEventListener('animationend', function onAnimationEnd() {
                    lostText.textContent = `Looks like you got ${texts[index]}`;
                    lostText.classList.remove('fade-out'); // Remove fade-out class
                    lostText.classList.add('fade-in'); // Add fade-in class for the fade-in effect

                    lostText.removeEventListener('animationend', onAnimationEnd);
                });

                setTimeout(() => {
                    lostText.classList.remove('fade-in'); // Remove fade-in class after the animation
                    index = (index + 1) % texts.length;
                }, 3000);
            }

            setInterval(changeLostText, 5000); // Change text every 3 seconds
        });
    </script>
</head>

<body style="background-color: #ee5050;" class="text-white relative">

    <header style="background-color: #ee5050;" class="p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-4xl font-bold">AYOSUPP.</div>
            <nav>
                <ul class="flex font-bold uppercase space-x-12">
                    <li><a href="#" class="hover:text-black">What We Do</a></li>
                    <li><a href="#" class="hover:text-black">People</a></li>
                    <li><a href="#" class="hover:text-black">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="flex items-center justify-center h-1/2">
        <div class="text-center mt-64">
            <h1 id="lostText" class="text-8xl font-bold">Looks like you got lost</h1>
            <p class="mt-4 text-lg">404 error occurred.</p>
        </div>
    </div>

    <!-- Centered Bottom Text -->
    <div class="absolute bottom-0 w-full text-center py-4">
        <p class="text-lg">+91 1234567890</p>
        <p class="text-lg mt-2">Maharashtra, Hadapsar, Pune, 411028</p>
        <p class="text-xs mt-4">For company's more information and legal bits, see our legal page</p>
    </div>

    <!-- Right Corner Bottom Text -->
    <div class="absolute bottom-0 right-16 py-4 px-8">
        <div>
  <img src="https://www.pngmart.com/files/22/Black-And-White-Instagram-Logo-PNG-File.png" width="30px" class="inline mr-2">
  <img src="https://static-00.iconduck.com/assets.00/github-icon-2048x1988-jzvzcf2t.png" width="30px" class="inline">
</div>

        <p class="text-lg mt-4">hello@pranav.com</p>
    </div>

    <!-- Left Corner Bottom Image -->
    <div class="absolute bottom-0 left-32">
        <img src="https://i.pinimg.com/originals/4a/06/ef/4a06efb5a2f39feaa2f81b9f3d179a94.gif" alt="Big Image" style="height: 550px;">
    </div>

</body>

</html>
