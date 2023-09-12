<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
  <!-- Include the Tailwind CSS CDN or link to your locally installed CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <!-- Additional styles or custom CSS can be added here -->
  <style>
  img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}

    html, body {
      height: 100vh;
     font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }
  </style>
  
  <style>
  
/* Define the common styles for both gradients */
.border-gradient-common {
  border-top-left-radius: 20px;
  border-top: 15px solid pink;
  animation: gradientAnimation 5s infinite alternate;
}

/* Define the animation for the first gradient */
@keyframes gradientAnimation {
  0% {
    border-image: linear-gradient(to right, pink, white);
    border-image-slice: 1;
    border-left: 15px solid pink;
  }
  100% {
    border-image: linear-gradient(to right, white, pink);
    border-image-slice: 1;
    border-left: 15px solid white;
  }
}

/* Apply the animation to the first element */
.border-gradient-pink-white {
  border-image: linear-gradient(to right, pink, white);
  border-image-slice: 1;
  border-left: 15px solid pink;
}

/* Define the animation for the second gradient */
@keyframes gradientAnimationInverse {
  0% {
    border-image: linear-gradient(to left, pink, white);
    border-image-slice: 1;
  }
  100% {
    border-image: linear-gradient(to left, white, pink);
    border-image-slice: 1;
  }
}

/* Apply the animation to the second element */
.border-gradient-pink-white-inv {
  border-image: linear-gradient(to left, pink, white);
  border-image-slice: 1;
}

/* Apply the common styles to both elements */
.border-gradient-pink-white,
.border-gradient-pink-white-inv {
  animation: gradientAnimationInverse 5s infinite alternate;
}

/* Pause the animations on hover */
.border-gradient-pink-white:hover,
.border-gradient-pink-white-inv:hover {
  animation-play-state: paused;
}

  
</style>
<style>
  .custom-input {
    /* Remove the existing border styles */
    border: 2px solid #000;
    /* Other styling */
    padding: 0.5rem;
   
    background-color: white;
    color: gray;
   
    transition: box-shadow 0.3s ease-in-out;
  }

  .custom-input:focus {
    /* Apply gradient border as box shadow */
    box-shadow: 0 0 0 3px black, 0 0 0 3px gray;
    outline: none;
  }
</style>
 <style>
    .glass-banner {
      box-shadow: 0px 10px 100px 7px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .glass-banner::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      box-shadow: 0px 10px 100px 7px rgba(0,0,0,0.1);
      height: 100%;
      background-image: url('https://i.pinimg.com/originals/fd/29/7d/fd297dd743eeb5c9e61a6948bd966774.gif');
      background-size: cover;
      background-position: center;
      filter: blur(50px);
      z-index: -1;
    }
    .glass-footer {
      background-color: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(60px);
    }
    
    .glass-footer1 {
      background-color: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(20px);
    }
  </style>
  
<style>
    .custom-text-justify {
        text-justify: distribute;
        word-spacing: 0.1em; /* Adjust this value to control word spacing */
    }
</style>
</head>
<body class="bg-white">
  <header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 mt-6 ml-4 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto">
            <a href="" class="flex items-center">
                <img src="https://i.imgur.com/6Hzrnfd.png"
                     class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"/>
                <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">SecureStream</span>
            </a>
            <div class="flex md:order-2">
                <button id="openModal"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold text-md px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Register
                </button>
            </div>
        </div>
    </nav>
</header>

<!-- Modal -->
<div id="modal" class="fixed inset-0 flex items-center justify-center z-50 hidden glass-footer1 transition-opacity duration-300">
    <div class="absolute inset-0 bg-gray-800 opacity-70 pointer-events-none"></div>
    <div class="bg-white  p-6 rounded-lg shadow-md w-96 relative z-10 md:w-auto m-4"> <!-- Added 'm-4' class for margin -->
        <button id="closeModal"
                class="absolute top-0 right-0 m-2 text-gray-600 hover:text-gray-800 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <h2 class="text-xl font-semibold mb-4">Registration Form</h2>
        <form>
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="mb-2 sm:mb-4 custom-input px-2 py-1 sm:px-4 sm:py-2 w-full" placeholder="Enter your username">
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mb-2 sm:mb-4 custom-input px-2 py-1 sm:px-4 sm:py-2 w-full" placeholder="Enter your password">
            </div> <p class="text-gray-500 text-sm mt-4">By signing up, you agree to our terms and conditions.</p>
            <div class="mt-4">
                <button id="closeModal" class="mt-2 sm:mt-0 w-full  bg-gray-800 text-white p-2 font-semibold hover:bg-gray-900">
                    Sign Up
                </button>
            </div>
        </form>
       
    </div>
</div>



<script>
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const modal = document.getElementById('modal');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>

<div class="flex sm:flex-row h-full">
        <!-- Left Half for Content with Gradient Border -->
        <div class="w-full sm:w-1/2 mt-8 p-4 sm:p-8 overflow-y-auto relative border-gradient-pink-white-inv">
            <div class="p-4">
                <!-- Content for the left half goes here -->
                <div class="glass-banner p-6 mb-8 rounded-full shadow-xl">
                    <div class="flex justify-center sm:justify-start space-x-4"> <!-- Updated flex alignment -->
                        <button class="pl-4 pl-6 pr-6 bg-white text-black p-2 rounded-3xl font-semibold hover:bg-gray-200">GitHub</button>
                        <button class="pl-4 pl-6 pr-6 bg-white text-black p-2 rounded-3xl font-semibold hover:bg-gray-200">About Us</button>
                    </div>
                </div>
                <h2 class="text-2xl sm:text-4xl font-bold mb-2 sm:mb-4">Login to SecureStream</h2>
                <p class="text-gray-500 font-bold text-justify">Get the most out of our specially designed modules for everything.</p>
            </div>
            <div class="mb-6 mx-4">
                <input
                    class="mb-2 sm:mb-4 custom-input px-2 py-1 sm:px-4 sm:py-2 w-full"
                    type="text"
                    placeholder="Enter Username"
                />
                <input
                    class="mb-2 sm:mb-4 custom-input px-2 py-1 sm:px-4 sm:py-2 w-full"
                    type="text"
                    placeholder="Enter Password"
                />
                <div class="flex flex-col sm:flex-row items-center">
                   
<button
    onclick="window.location.href='https://medverse.000webhostapp.com/app/dashboard.php';"
    class="mt-2 sm:mt-0 w-full sm:w-1/4 bg-gray-800 text-white p-2 font-semibold hover:bg-gray-900"
    type="button"
>
    Log In
</button>



                </div>
            </div>
        </div>
        
        <!-- Right Half with Background Image -->
        <div class="hidden sm:block w-1/2 mt-8  bg-left-top relative z-0" style="background-image: url('https://i.redd.it/us5eg5hb2wh91.gif');">
            <div class="absolute inset-0  border-gradient-pink-white"></div>
        </div>
    </div>


   <!-- Footer for the left half -->
    <footer class="glass-footer absolute bottom-0 w-full py-2">
    <p class="text-left text-gray-600 ml-8">© 2023 ❤️.</p>
  </footer>

</body>
</html>
