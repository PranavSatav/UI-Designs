<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap-flex.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid Background</title>
    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }

        body {
            font-family: 'Space Grotesk', sans-serif; /* Use the Space Grotesk font for the entire body */
            background-image: url("https://www.itl.cat/pngfile/big/186-1864951_3840-x-black-and-white-mountain-foggy.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%; /* Set the container width to the desired size */
            height: 100vh;
            margin: 0; /* Remove default margin */
            overflow: hidden; /* Hide overflow content to prevent scrolling */
        }

        /* Create a class for the pill element */
        .pill {
            font-weight: 600;
            border: 2px solid #F94C10;
            color: #F94C10;
            border-radius: 20px;
            padding: 5px 50px;
            font-size: 1.25rem;
            backdrop-filter: blur(10px); /* Adjust the blur radius to your preference */
            background-color: rgba(255, 255, 255, 0.5); /* Adjust the opacity to control the blurriness */
        }

        .container-pill {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-grow: 1; /* Allow the container to grow and take up available space */
            margin-top: 50px; /* Adjust as needed to create spacing between the top of the page and the pill */
        }

        .heading {
            text-align: center;
            font-size: 3rem; /* Adjust the font size as needed */
            font-weight: bold;
            color: #000;
            line-height: 1.2; /* Adjust the line height for spacing between lines */
        }

        .bold {
            font-weight: 900;
        }

        .text {
            background: rgb(131, 58, 180);
            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(252, 176, 69, 1) 0%, rgba(253, 29, 29, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 3vw;
            font-family: 'Space Grotesk', sans-serif;
        }

        .text1 {
            background: rgb(131, 58, 180);
            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 3vw;
            font-family: 'Space Grotesk', sans-serif; /* Use the Space Grotesk font for the entire body */
        }

        /* Your existing pricing button styles */
        .pricing-button {
            /* ... Your existing styles ... */
        }

        /* Slider styles */
        .switch {
            position: relative;
            display: flex;
            align-items: center; /* Align items vertically in flex container */
            width: 75px; /* Adjust the width to 75px */
            height: 35px; /* Adjust the height to 75px */
            margin-right: 10px; /* Adjust the spacing between the slider and buttons */
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #1e2321;
            width: 75px; /* Adjust the width to 75px */
            transition: 0.4s;
        }

        .slider-container {
            display: flex;
            align-items: center; /* Center vertically */
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
        }

        input:checked + .slider {
            background-color: #50bfe6;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #50bfe6;
        }

        input:checked + .slider:before {
            transform: translateX(45px); /* Adjust the value to move the slider within 75px width */
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        /* Additional styles for "Monthly" and "Annually" buttons */
        .pricing-button.monthly {
            background-color: #50bfe6; /* Default active button color */
        }

        .pricing-button.annually {
            background-color: #1e2321; /* Default inactive button color */
            color: white; /* Default text color */
        }

        /* Adjust the styles for the active button (Monthly) */
        input:checked + .slider + .pricing-button.monthly {
            background-color: #1e2321;
            color: white;
        }

        /* Adjust the styles for the inactive button (Annually) */
        input:checked + .slider + .pricing-button.annually {
            background-color: #50bfe6;
            color: white;
        }

        /* Text styles for "Monthly Bill" and "Annual Bill" */
        .bill-text {
            font-size: 20px;
            margin-left: 20px;
            margin-right: 40px; 
            margin-top: 0px;
            font-weight: bold;
            color: #000;
        }
        .row {
 margin-top:50px;
}

.card {
  border: 0;
  border-radius: 0px;
  -webkit-box-shadow: 0 3px 0px 0 rgba(0, 0, 0, 0.08);
  box-shadow: 0 3px 0px 0 rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease-in-out;
  padding: 2.25rem 0;
  position: relative;
  will-change: transform;
}
.card:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 5px;
  background-color: #57e2b2;
  transition: 0.5s;
}
.card:hover {
  transform: scale(1.05);
  -webkit-box-shadow: 0 20px 35px 0 rgba(0, 0, 0, 0.08);
  box-shadow: 0 20px 35px 0 rgba(0, 0, 0, 0.08);
}
.card:hover:after {
  width: 100%;
}
.card .card-header {
  background-color: white;
  padding-left: 2rem;
  border-bottom: 0px;
}
.card .card-title {
  margin-bottom: 1rem;
}
.card .card-block {
  padding-top: 0;
}
.card .list-group-item {
  border: 0px;
  padding: 0.25rem;
  color: #000;
  
  font-weight: Bold;
}

.display-2 {
  font-size: 7rem;
  letter-spacing: -0.5rem;
}
.display-2 .currency {
  font-size: 2.75rem;
  position: relative;
  font-weight: 400;
  top: -45px;
  letter-spacing: 0px;
}
.display-2 .period {
  font-size: 1rem;
  color: #b3b3b3;
  letter-spacing: 0px;
}

.btn {
  text-transform: uppercase;
  font-size: 0.75rem;
  font-weight: 500;
  color: #fff;
  border-radius: 0;
  padding: 0.75rem 1.25rem;
  letter-spacing: 1px;
}

.btn-gradient {
  background-color: #000;
  transition: background 0.3s ease-in-out;
}
.btn-gradient:hover {
  color: white;
  background-color: #57e2b2;
}
    </style>
</head>
<body>

<div class="container-pill">
    <p class="pill">Pricing</p>
</div>

<div class="heading">

    <span class="text1">Choose the best plan</span><br>
    <span class="text">for you</span>

</div>

<div class="container-pill">
    <span class="bill-text">Monthly</span>
    <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>
    <span class="bill-text">Annually</span>
</div>
<div class="container">
  <div class="row flex-items-xs-middle flex-items-xs-center">

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header">
          <h3 class="display-2"><span class="currency">$</span>0<span class="period">/month</span></h3>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            Basic Plan
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Easiest way to get started with for everyone.</li>
            
          </ul>
          <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

  

    <!-- Table #1  -->
    <div class="col-xs-12 col-lg-4">
      <div class="card text-xs-center">
        <div class="card-header">
          <h3 class="display-2"><span class="currency">$</span>39<span class="period">/month</span></h3>
        </div>
        <div class="card-block">
          <h4 class="card-title"> 
            Premium Plan
          </h4>
          <ul class="list-group">
            <li class="list-group-item">Easiest way to get started with for everyone.</li>
          </ul>
          <a href="#" class="btn btn-gradient mt-2">Choose Plan</a>
        </div>
      </div>
    </div>

  </div>
</div>
</body>
</html>
