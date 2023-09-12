<!DOCTYPE html>
<html>
<head>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900" rel="stylesheet">

<style>

a {
  color: #000;
  
  text-decoration: none;
  
  
  display: inline-block;
  
  position: relative;
}
a:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: #5800FF;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
a:hover:after { 
  width: 100%; 
  left: 0; 
}
@media screen and (max-height: 300px) {
	ul {
		margin-top: 40px;
	}
}

::-webkit-scrollbar {
    display: none;
}
hr {
  background-color: #fff;
 

}

hr.hr-1 {
  border: 0;

  height: 1px;
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0));
}


.timeline {
  list-style: none;
 padding-top:2.0em;
}
.timeline > li {
  margin-bottom: 60px;
}

/* for Desktop */
@media ( min-width : 640px ){
  .timeline > li {
    overflow: hidden;
    margin: 0;
    position: relative;
  }
  .timeline-date {
    width: 110px;
    float: left;
    margin-top: 20px;
  }
   .timeline-date1 {
  
    float: left;
    margin-top: 20px;
  }
  .timeline-content {
    width: 75%;
    float: left;
    border-left: 3px #e5e5d1 solid;
    padding-left: 30px;
  }
  .timeline-content:before {
    content: '';
    width: 12px;
    height: 12px;
    background: #6fc173;
    position: absolute;
    left: 106px;
    top: 24px;
    border-radius: 100%;
  }
}
:root {
  --font-family-base:
        system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
  --font-family-mono:
        ui-monospace, Menlo, Monaco, "Cascadia Mono", "Segoe UI Mono", "Roboto Mono", "Oxygen Mono", "Ubuntu Monospace", "Source Code Pro","Fira Mono", "Droid Sans Mono",  "Courier New", monospace;
  --font-family-cursive:
        Comic Sans, "Comic Sans MS", "Chalkboard", "ChalkboardSE-Regular", "Marker Felt", "Purisa", "URW Chancery L", cursive;
   --font-family-drop-cap: "Didot", Georgia, cursive;
   --text-letter-spacing: -0.02em;
   --headings-letter-spacing: -0.05em;
   --font-size-small: 0.85rem;
   --font-size-base: 1rem;
   --font-size-large: 1.5rem;
   --font-size-x-large: 2rem;
   --font-size-xx-large: 3rem;
   --font-size-xxx-large: 4rem;
   --font-size-xxxx-large: 5rem;
   --color-text: #CACDD6;
   --color-text-dark: #AAA;
   --color-text-light: #FFF;
   --color-background: #110F16;
   --color-primary: #EA3734;
   --color-secondary: #FBA456;
   --color-links: var(--color-secondary);
}

/*
  Josh's Custom CSS Reset
  https://www.joshwcomeau.com/css/custom-css-reset/
*/
*, *::before, *::after {
  box-sizing: border-box;
}
* {
  margin: 0;
}
html, body {
  height: 100%;
 
}
body {
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
 
}
img, picture, video, canvas, svg {
  display: block;
  max-width: 100%;
}
input, button, textarea, select {
  font: inherit;
}
p, h1, h2, h3, h4, h5, h6 {
  overflow-wrap: break-word;
}
#root, #__next {
  isolation: isolate;
}

/* end reset */

html {
  font-size: 100%;
}

@media screen and (min-width: 1024px) {
  html {
    font-size: 112.5%;
  }
}

body {
  
  font-size: var(--font-size-base);
  line-height: 1.75;
  letter-spacing: var(--text-letter-spacing);
  -webkit-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
 
}

h1,h2,h3,h4,h5,h6 {
  color: var(--color-text-light);
  line-height: 1.3;
  letter-spacing: var(--headings-letter-spacing);
  margin-bottom: 0.85em;
  font-family: 'Playfair Display', courier;
}

h1 {
  font-size: var(--font-size-xx-large);
}

@media screen and (min-width: 1024px) {
  h1 {
    font-size: var(--font-size-xxx-large);
  }
}


p {
  margin-bottom: 1.5em;
}




img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}

@-webkit-keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: white;
 
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 100%;
}
.slider::before, .slider::after {
  background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 40s linear infinite;
          animation: scroll 40s linear infinite;
  display: flex;
  width: calc(250px * 14);
}
.slider .slide {
  height: 100px;
  width: 250px;
}
.bold{
   font-weight: bold;
}
.container1 {
  background-color: #9191E9;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100vw;
  height: 100vh;
}

.button {
  text-decoration: none;
  font-size: 0.875rem;
  font-weight: 300;
  text-transform: uppercase;
  display: inline-block;
  border-radius: 1.5rem;
  background-color: #fff;
  color: #9191E9;
  padding: 1rem 2rem;
}

.popup {
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  width: 100vw;
  height: 100vh;
  bottom: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 20;
  visibility: hidden;
  opacity: 0;
  overflow: hiden;
  transition: 0.64s ease-in-out;
}
.popup-inner {
  position: relative;
  bottom: -100vw;
  right: -100vh;
  display: flex;
  align-items: center;
  max-width: 800px;
  max-height: 600px;
  width: 60%;
  height: 80%;
  background-color: #fff;
  transform: rotate(32deg);
  transition: 0.64s ease-in-out;
}
.popup__photo {
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  width: 40%;
  height: 100%;
  overflow: hidden;
}
.popup__photo img {
  width: auto;
  height: 100%;
}
.popup__text {
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 60%;
  height: 100%;
  padding: 4rem;
}
.popup__text h1 {
  font-size: 2rem;
  font-weight: 600;
  margin-bottom: 2rem;
  text-transform: uppercase;
  color: #0A0A0A;
}
.popup__text p {
  font-size: 0.875rem;
  color: #686868;
  line-height: 1.5;
}
.popup:target {
  visibility: visible;
  opacity: 1;
}
.popup:target .popup-inner {
  bottom: 0;
  right: 0;
  transform: rotate(0);
}
.popup__close {
  
  width: 3rem;
  height: 3rem;
  font-size: 0.875rem;
  font-weight: 300;
  border-radius: 100%;
  background-color: #0A0A0A;
  z-index: 4;
  color: #fff;
  line-height: 3rem;
  text-align: center;
  cursor: pointer;
  text-decoration: none;
}
.main-head {
	background: #0D1440;
	box-shadow: 0px 1px 10px -6px rgba(0, 0, 0, .15);
	padding: 1rem;
	margin-bottom: 0;
	margin-top: 5rem;
	color: #fff;
	font-weight: 500;
	text-transform: uppercase;
	border-radius: 4px;
	font-size: 16px;
}

.pricing-table {
	background: #fff;
	box-shadow: 0px 1px 10px -6px rgba(0, 0, 0, .15);
	padding: 2rem;
	border-radius: 4px;
	transition: .3s;
}

.pricing-table:hover {
	box-shadow: 0px 1px 10px -4px rgba(0, 0, 0, .15);
}

.pricing-table .pricing-label {
	border-radius: 2px;
	padding: .25rem .5rem;
	margin-bottom: 1rem;
	display: inline-block;
	font-size: 12px;
	font-weight: 500;
}

.pricing-table h2 {
	color: #3b3b3b;
	font-size: 24px;
	font-weight: 500;
}

.pricing-table h5 {
	color: #B3B3B3;
	font-size: 14px;
	font-weight: 400;
}

.pricing-table .pricing-features {
	margin-top: 2rem;
}

.pricing-table .pricing-features .feature {
	font-size: 14px;
	margin: .5rem 0;
	color: #B3B3B3;
}

.pricing-table .pricing-features .feature span {
	display: inline-block;
	float: right;
	color: #3b3b3b;
	font-weight: 500;
}

.pricing-table 	.price-tag {
	margin-top: 2rem;
	text-align: center;
	font-weight: 500;
}

.pricing-table .price-tag .symbol {
	font-size: 24px;
}

.pricing-table .price-tag .amount {
	letter-spacing: -2px;
	font-size: 64px;
}

.pricing-table .price-tag .after {
	color: #3b3b3b;
	font-weight: 500;
}

.pricing-table .price-button {
	display: block;
	color: #fff;
	margin-top: 2rem;
	padding: .75rem;
	border-radius: 2px;
	text-align: center;
	font-weight: 500;
	transition: .3s;
}

.pricing-table .price-button:hover {
	text-decoration: none;
}

.purple .pricing-label {
	background: #cad2ff;
	color: #627afe;
}

.purple .price-tag {
	color: #627afe;
}

.purple .price-button {
	background: #627afe;
}

.purple .price-button:hover {
	background: #546dfe;
}

.turquoise .pricing-label {
	background: #b9edee;
	color: #44cdd2;
}

.turquoise .price-tag {
	color: #44cdd2;
}

.turquoise .price-button {
	background: #44cdd2;
}

.turquoise .price-button:hover {
	background: #2dbcc4;
}

.red .pricing-label {
	background: #ffc4c4;
	color: #ff5e5e;
}

.red .price-tag {
	color: #ff5e5e;
}

.red .price-button {
	background: #ff5e5e;
}

.red .price-button:hover {
	background: #f23c3c;
}
.bg-gray {
  background-color: #fbfbfb;
}

.section-title {
  text-align: center;
  margin-bottom: 57px;
}
.section-title .subtitle {
  font-size: 20px;
  font-weight: 600;
  color: #197beb;
  line-height: 26px;
  display: block;
}
.section-title .title {
  font-size: 60px;
  line-height: 60px;
  margin-bottom: 18px;
  font-weight: 700;
}
.section-title p {
  font-size: 16px;
  color: #818181;
  max-width: 720px;
  margin: 0 auto;
}

.video-tutorial {
  padding: 110px 0 0 0;
}
.video-tutorial .demo-wrapper {
  margin-bottom: 40px;
}
.video-tutorial .demo-wrapper .title {
  font-size: 30px;
  line-height: 40px;
  margin-bottom: 30px;
  display: block;
  text-align: center;
}

.price-plan-wrapper {
  padding: 0 0 60px 0;
}

.pricing-table-1 {
  border: 3px solid #e5e3e3;
  border-radius: 10px;
  text-align: center;
  padding: 38px 0 40px;
  transition: 0.3s ease-in;
  margin-bottom: 30px;
}
.pricing-table-1:hover {
  border-color: #197beb;
}
.pricing-table-1 .price-header .title {
  color: #282828;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 25px;
}
.pricing-table-1 .price-header .price {
  font-size: 50px;
  line-height: 60px;
  color: #282828;
  font-weight: 600;
  margin-bottom: 25px;
}
.pricing-table-1 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-1 .price-header .price .month {
  font-size: 22px;
  line-height: 23px;
}
.pricing-table-1 .price-footer {
  margin-top: 40px;
}
.pricing-table-1 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border: 2px solid #197beb;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #282828;
  transition: 0.3s ease-in;
  font-weight: 600;
}
.pricing-table-1 .price-footer .order-btn i {
  font-size: 13px;
  padding-left: 2px;
}
.pricing-table-1 .price-footer .order-btn:hover {
  background-color: #197beb;
  color: #fff;
  border-color: #197beb;
}
.pricing-table-1 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-1 .price-body ul li {
  list-style: none;
  display: block;
  color: #8997a7;
  margin: 27px 0;
}
.pricing-table-1 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-1 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-2 {
  border: 3px solid #e5e3e3;
  border-radius: 10px;
  text-align: center;
  padding: 38px 0 40px;
  transition: 0.3s ease-in;
  margin-bottom: 30px;
}
.pricing-table-2:hover {
  border-color: #197beb;
}
.pricing-table-2 .price-header .title {
  color: #282828;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 25px;
}
.pricing-table-2 .price-header .icon {
  font-size: 60px;
  line-height: 60px;
  margin-bottom: 30px;
  color: #197beb;
}
.pricing-table-2 .price-header .price {
  font-size: 50px;
  line-height: 60px;
  color: #282828;
  font-weight: 600;
  margin-bottom: 25px;
}
.pricing-table-2 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-2 .price-header .price .month {
  font-size: 22px;
  line-height: 23px;
}
.pricing-table-2 .price-footer {
  margin-top: 40px;
}
.pricing-table-2 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border: 2px solid #197beb;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #282828;
  transition: 0.3s ease-in;
  font-weight: 600;
}
.pricing-table-2 .price-footer .order-btn i {
  font-size: 13px;
  padding-left: 2px;
}
.pricing-table-2 .price-footer .order-btn:hover {
  background-color: #197beb;
  color: #fff;
  border-color: #197beb;
}
.pricing-table-2 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-2 .price-body ul li {
  list-style: none;
  display: block;
  color: #8997a7;
  margin: 27px 0;
}
.pricing-table-2 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-2 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-3 {
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  text-align: center;
  padding: 38px 0 40px;
  transition: 0.3s ease-in;
  margin-bottom: 30px;
}
.pricing-table-3:hover {
  border-color: #197beb;
}
.pricing-table-3 .price-header {
  position: relative;
}
.pricing-table-3 .price-header .pbadge {
  position: absolute;
  left: 50%;
  top: -60px;
  width: 80%;
  background-color: #197beb;
  color: #fff;
  padding: 10px 0;
  transform: translateX(-50%);
}
.pricing-table-3 .price-header .pbadge:after {
  position: absolute;
  left: -40px;
  top: 0;
  border-left: 20px solid transparent;
  border-right: 20px solid #0b56ac;
  border-top: 22px solid transparent;
  content: "";
}
.pricing-table-3 .price-header .pbadge:before {
  position: absolute;
  right: -40px;
  top: 0;
  border-left: 20px solid #0b56ac;
  border-right: 20px solid transparent;
  border-top: 22px solid transparent;
  content: "";
}
.pricing-table-3 .price-header .title {
  color: #282828;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 25px;
}
.pricing-table-3 .price-header .icon {
  font-size: 60px;
  line-height: 60px;
  margin-bottom: 30px;
  color: #197beb;
}
.pricing-table-3 .price-header .price {
  font-size: 50px;
  line-height: 60px;
  color: #197beb;
  font-weight: 700;
  margin-bottom: 25px;
}
.pricing-table-3 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-3 .price-header .price .month {
  font-size: 22px;
  line-height: 23px;
}
.pricing-table-3 .price-footer {
  margin-top: 40px;
}
.pricing-table-3 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  background-color: #197beb;
  position: relative;
  overflow: hidden;
}
.pricing-table-3 .price-footer .order-btn:after {
  position: absolute;
  left: 0;
  top: 0;
  width: 50px;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.1);
  transform: skewX(35deg) translateX(-60px);
  transition: 0.5s ease-in;
  content: "";
}
.pricing-table-3 .price-footer .order-btn:before {
  position: absolute;
  right: 0;
  top: 0;
  width: 50px;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.1);
  transform: skewX(35deg) translateX(60px);
  transition: 0.5s ease-in;
  content: "";
}
.pricing-table-3 .price-footer .order-btn:hover:after {
  transform: skewX(35deg) translateX(190px);
}
.pricing-table-3 .price-footer .order-btn:hover:before {
  transform: skewX(35deg) translateX(-190px);
}
.pricing-table-3 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-3 .price-body ul li {
  list-style: none;
  display: block;
  color: #8997a7;
  margin: 27px 0;
}
.pricing-table-3 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-3 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-4 {
  text-align: center;
  padding: 38px 0 40px;
  transition: 0.3s ease-in;
  position: relative;
  border: 1px solid #e5e5e5;
  z-index: 0;
  margin-bottom: 30px;
}
.pricing-table-4:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 6px;
  background-color: #197beb;
  content: "";
  transition: height 0.5s ease-in;
  z-index: -1;
}
.pricing-table-4:hover:after {
  height: 100%;
}
.pricing-table-4:hover .price-header .icon {
  color: #fff;
}
.pricing-table-4:hover .price-header .price {
  color: #fff;
}
.pricing-table-4:hover .price-body ul li {
  color: #e5e3e3;
}
.pricing-table-4:hover .price-footer .order-btn {
  background-color: #fff;
  color: #282828;
}
.pricing-table-4 .price-header .title {
  color: #282828;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 25px;
}
.pricing-table-4 .price-header .icon {
  font-size: 60px;
  line-height: 60px;
  margin-bottom: 30px;
  color: #197beb;
  transition: 0.3s ease-in;
}
.pricing-table-4 .price-header .price {
  font-size: 50px;
  line-height: 60px;
  color: #197beb;
  font-weight: 700;
  margin-bottom: 25px;
  transition: 0.3s ease-in;
}
.pricing-table-4 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-4 .price-header .price .month {
  font-size: 22px;
  line-height: 23px;
}
.pricing-table-4 .price-footer {
  margin-top: 40px;
}
.pricing-table-4 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  background-color: #197beb;
  position: relative;
  overflow: hidden;
}
.pricing-table-4 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-4 .price-body ul li {
  list-style: none;
  display: block;
  color: #8997a7;
  margin: 27px 0;
  transition: 0.3s ease-in;
}
.pricing-table-4 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-4 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-5 {
  text-align: center;
  padding: 38px 0 40px;
  transition: 0.3s ease-in;
  position: relative;
  border: 1px solid #e5e5e5;
  z-index: 0;
  margin-bottom: 30px;
}
.pricing-table-5:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 6px;
  background-color: #197beb;
  content: "";
  transition: height 0.5s ease-in;
  z-index: -1;
}
.pricing-table-5 .price-header .title {
  color: #282828;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 25px;
}
.pricing-table-5 .price-header .icon {
  font-size: 60px;
  line-height: 60px;
  margin-bottom: 30px;
  color: #197beb;
  transition: 0.3s ease-in;
}
.pricing-table-5 .price-header .price {
  font-size: 50px;
  line-height: 60px;
  color: #197beb;
  font-weight: 700;
  margin-bottom: 25px;
  transition: 0.3s ease-in;
}
.pricing-table-5 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-5 .price-header .price .month {
  font-size: 22px;
  line-height: 23px;
}
.pricing-table-5 .price-footer {
  margin-top: 40px;
}
.pricing-table-5 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  background-color: #197beb;
  position: relative;
  overflow: hidden;
}
.pricing-table-5 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-5 .price-body ul li {
  list-style: none;
  display: block;
  color: #8997a7;
  margin: 27px 0;
  transition: 0.3s ease-in;
}
.pricing-table-5 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-5 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-6 {
  text-align: center;
  padding: 38px 0 40px;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  background-color: #4d6de6;
  border-radius: 6px;
  overflow: hidden;
  margin-bottom: 30px;
}
.pricing-table-6.bg-orange {
  background-color: #f06031;
}
.pricing-table-6 .price-header .title {
  color: #fff;
  font-size: 22px;
  text-transform: uppercase;
  font-weight: 400;
  margin-bottom: 35px;
}
.pricing-table-6 .price-header .icon {
  font-size: 60px;
  line-height: 60px;
  margin-bottom: 30px;
  color: #197beb;
  transition: 0.3s ease-in;
}
.pricing-table-6 .price-header .price {
  font-size: 62px;
  line-height: 60px;
  color: #282828;
  font-weight: 800;
  margin-bottom: 25px;
  transition: 0.3s ease-in;
  text-align: left;
  padding-left: 40px;
  position: relative;
  padding: 20px 0 20px 60px;
  z-index: 0;
}
.pricing-table-6 .price-header .price:after {
  position: absolute;
  left: -20%;
  top: 0;
  width: 100%;
  background-color: #fff;
  border-radius: 25px;
  content: "";
  height: 100%;
  transform: skewX(-35deg);
  z-index: -1;
}
.pricing-table-6 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-6 .price-header .price .month {
  font-size: 22px;
  line-height: 23px;
}
.pricing-table-6 .price-footer {
  margin-top: 40px;
}
.pricing-table-6 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #282828;
  transition: 0.5s ease-in;
  font-weight: 600;
  background-color: #fff;
  position: relative;
  overflow: hidden;
}
.pricing-table-6 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(0, 0, 0, 0.35);
  background-color: #333;
  color: #fff;
}
.pricing-table-6 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-6 .price-body ul li {
  list-style: none;
  display: block;
  color: #e5e5e5;
  margin: 27px 0;
  transition: 0.3s ease-in;
}
.pricing-table-6 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-6 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-7 {
  text-align: center;
  padding: 38px 0 40px;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  border-radius: 6px;
  overflow: hidden;
  border: 2px solid #e5e5e5;
  margin-bottom: 30px;
}
.pricing-table-7 .price-header .title {
  color: #282828;
  font-size: 22px;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 35px;
}
.pricing-table-7 .price-header .icon {
  font-size: 60px;
  line-height: 60px;
  margin-bottom: 30px;
  color: #197beb;
  transition: 0.3s ease-in;
}
.pricing-table-7 .price-header .price {
  font-size: 50px;
  line-height: 60px;
  color: #fff;
  font-weight: 400;
  transition: 0.3s ease-in;
  text-align: center;
  position: relative;
  z-index: 0;
  background-color: #197beb;
  height: 170px;
  width: 170px;
  border-radius: 50%;
  margin: 0 auto;
  overflow: hidden;
}
.pricing-table-7 .price-header .price .top {
  padding-top: 40px;
  height: 60px;
}
.pricing-table-7 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-7 .price-header .price .month {
  margin-top: 60px;
  font-size: 16px;
  line-height: 20px;
  display: block;
  background-color: #282828;
  width: 100%;
  height: 50px;
  padding-top: 10px;
}
.pricing-table-7.yellow .price-header .price {
  background-color: #ff9f00;
}
.pricing-table-7.yellow .price-footer .order-btn {
  background-color: #ff9f00;
}
.pricing-table-7.green .price-header .price {
  background-color: #6a9e39;
}
.pricing-table-7.green .price-footer .order-btn {
  background-color: #6a9e39;
}
.pricing-table-7.red-pink .price-header .price {
  background-color: #c3185c;
}
.pricing-table-7.red-pink .price-footer .order-btn {
  background-color: #c3185c;
}
.pricing-table-7 .price-footer {
  margin-top: 40px;
}
.pricing-table-7 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  background-color: #fff;
  position: relative;
  overflow: hidden;
}
.pricing-table-7 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(0, 0, 0, 0.35);
  background-color: #333;
  color: #fff;
}
.pricing-table-7 .price-body ul {
  margin: 0;
  padding: 0;
  margin-top: 30px;
}
.pricing-table-7 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 27px 0;
  transition: 0.3s ease-in;
}
.pricing-table-7 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-7 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-8 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  border-radius: 30px;
  overflow: hidden;
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  margin-bottom: 30px;
}
.pricing-table-8 .price-header .title {
  color: #fff;
  font-size: 36px;
  line-height: 46px;
  text-transform: uppercase;
  font-weight: 600;
  padding: 20px 0;
  margin-bottom: 30px;
  background-color: #202a4d;
}
.pricing-table-8 .price-header .price {
  font-size: 50px;
  line-height: 60px;
  color: #197beb;
  font-weight: 700;
  transition: 0.3s ease-in;
  text-align: center;
  position: relative;
  z-index: 0;
  border-bottom: 2px solid #c5d4db;
  padding-bottom: 25px;
  margin: 0 20px;
}
.pricing-table-8 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-8 .price-header .price .month {
  font-size: 16px;
  line-height: 20px;
}
.pricing-table-8 .price-footer {
  margin-top: 40px;
}
.pricing-table-8 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  background-color: #197beb;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}
.pricing-table-8 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(0, 0, 0, 0.35);
  background-color: #333;
  color: #fff;
}
.pricing-table-8.active .price-header {
  position: relative;
}
.pricing-table-8.active .price-header .popular {
  position: absolute;
  top: 15px;
  right: -55px;
  display: inline-block;
  background-color: #202a4d;
  padding: 10px 30px;
  width: 180px;
  transform: rotate(40deg);
  color: #fff;
  text-transform: uppercase;
  font-size: 12px;
}
.pricing-table-8.active .price-header .title {
  background-color: #197beb;
}
.pricing-table-8 .price-body ul {
  margin: 0;
  padding: 0;
  margin-top: 30px;
}
.pricing-table-8 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 27px 0;
  transition: 0.3s ease-in;
}
.pricing-table-8 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-8 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-9 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  border-radius: 30px;
  overflow: hidden;
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  margin-bottom: 30px;
}
.pricing-table-9.active .price-header {
  position: relative;
}
.pricing-table-9 .icon-area {
  background-color: #202a4d;
  color: #fff;
  font-size: 60px;
  line-height: 60px;
  padding: 30px 0;
  margin-bottom: 45px;
  position: relative;
  transition: 0.3s ease-in;
}
.pricing-table-9 .icon-area:after {
  position: absolute;
  left: 50%;
  bottom: -15px;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-top: 15px solid #202a4d;
  content: "";
  transform: translateX(-50%);
  transition: 0.3s ease-in;
}
.pricing-table-9 .price-header .title {
  color: #282828;
  font-size: 24px;
  line-height: 30px;
  text-transform: uppercase;
  font-weight: 600;
}
.pricing-table-9 .price-header .price {
  font-size: 50px;
  line-height: 60px;
  color: #ed570b;
  font-weight: 700;
  transition: 0.3s ease-in;
  text-align: center;
  position: relative;
}
.pricing-table-9 .price-header .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-9 .price-header .price .month {
  font-size: 16px;
  line-height: 20px;
}
.pricing-table-9 .price-footer {
  margin-top: 40px;
}
.pricing-table-9 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  background-color: #ed570b;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}
.pricing-table-9 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(0, 0, 0, 0.35);
  background-color: #333;
  color: #fff;
}
.pricing-table-9:hover .icon-area {
  background-color: #ed570b;
}
.pricing-table-9:hover .icon-area:after {
  border-top-color: #ed570b;
}
.pricing-table-9 .price-body ul {
  margin: 0;
  padding: 0;
  margin-top: 15px;
}
.pricing-table-9 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 0 30px;
  padding: 15px 0;
  transition: 0.3s ease-in;
  border-bottom: 1px solid #e7eefe;
}
.pricing-table-9 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-9 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-10 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  border-radius: 30px;
  overflow: hidden;
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  margin-bottom: 30px;
}
.pricing-table-10:hover .icon-area {
  background-color: #ed570b;
  color: #fff;
}
.pricing-table-10:hover .icon-area .title {
  color: #fff;
}
.pricing-table-10:hover .price-footer {
  background-color: #ed570b;
}
.pricing-table-10:hover .price-footer .price {
  color: #fff;
}
.pricing-table-10:hover .price-footer .dollar {
  color: #fff;
}
.pricing-table-10:hover .price-footer .month {
  color: #fff;
}
.pricing-table-10:hover .price-footer .order-btn {
  background-color: #fff;
  color: #282828;
}
.pricing-table-10 .icon-area {
  background-color: #efefef;
  color: #ed570b;
  font-size: 60px;
  line-height: 60px;
  padding: 30px 0 20px;
  margin-bottom: 35px;
  position: relative;
  transition: 0.3s ease-in;
}
.pricing-table-10 .icon-area .title {
  color: #282828;
  font-size: 24px;
  line-height: 30px;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 20px;
  transition: 0.3s ease-in;
}
.pricing-table-10 .price-footer {
  margin-top: 40px;
  background-color: #efefef;
  transition: 0.3s ease-in;
}
.pricing-table-10 .price-footer .price {
  font-size: 50px;
  line-height: 60px;
  color: #ed570b;
  font-weight: 700;
  text-align: center;
  position: relative;
  transition: 0.3s ease-in;
  padding: 25px 0;
}
.pricing-table-10 .price-footer .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
  transition: 0.3s ease-in;
}
.pricing-table-10 .price-footer .price .month {
  font-size: 16px;
  line-height: 20px;
  transition: 0.3s ease-in;
}
.pricing-table-10 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  background-color: #ed570b;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}
.pricing-table-10 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(0, 0, 0, 0.35);
  background-color: #333;
  color: #fff;
}
.pricing-table-10.active .price-header {
  position: relative;
}
.pricing-table-10 .price-body ul {
  margin: 0;
  padding: 0;
  margin-top: 15px;
}
.pricing-table-10 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 0 30px;
  padding: 15px 0;
  transition: 0.3s ease-in;
  border-bottom: 1px solid #e7eefe;
}
.pricing-table-10 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-10 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-11 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  overflow: hidden;
  border: 2px solid #e5e3e3;
  margin-bottom: 30px;
}
.pricing-table-11 .price-header {
  position: relative;
  padding: 10px 0 25px;
}
.pricing-table-11 .price-header .subtitle {
  font-size: 14px;
}
.pricing-table-11 .price-header .title {
  color: #282828;
  font-size: 18px;
  line-height: 20px;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 20px;
  transition: 0.3s ease-in;
  margin-bottom: 5px;
}
.pricing-table-11.active .price-header {
  position: relative;
}
.pricing-table-11.active .popular {
  position: absolute;
  right: -20px;
  top: 25px;
  background-color: #197beb;
  padding: 5px 25px;
  color: #fff;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: 1px;
  transform: rotate(90deg);
}
.pricing-table-11.active .popular:after {
  position: absolute;
  right: -8px;
  bottom: 5px;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-top: 15px solid #fff;
  content: "";
  transform: rotate(88deg);
}
.pricing-table-11 .price {
  font-size: 50px;
  line-height: 60px;
  color: #282828;
  font-weight: 400;
  text-align: center;
  position: relative;
  transition: 0.3s ease-in;
  padding: 25px 0 10px;
  border-top: 2px solid #e5e3e3;
  margin: 0 20px;
}
.pricing-table-11 .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
  transition: 0.3s ease-in;
}
.pricing-table-11 .price .month {
  font-size: 20px;
  line-height: 20px;
  transition: 0.3s ease-in;
  font-weight: 400;
}
.pricing-table-11 .price-footer {
  margin-top: 40px;
}
.pricing-table-11 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #282828;
  transition: 0.5s ease-in;
  font-weight: 600;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
  border: 2px solid #197beb;
}
.pricing-table-11 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(0, 0, 0, 0.35);
  background-color: #197beb;
  color: #fff;
}
.pricing-table-11 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-11 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 0 30px;
  padding: 15px 0;
  transition: 0.3s ease-in;
}
.pricing-table-11 .price-body ul li:first-child {
  margin-top: 0;
}
.pricing-table-11 .price-body ul li:last-child {
  margin-bottom: 0;
}

.pricing-table-12 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  margin-bottom: 30px;
}
.pricing-table-12 .price-header {
  padding: 20px 0 35px;
  background-color: #31455b;
  margin-bottom: 30px;
  background-image: url("data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QOJaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzE0MiA3OS4xNjA5MjQsIDIwMTcvMDcvMTMtMDE6MDY6MzkgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MUZGMTQwOTBDNjk0RTQxMTg4RkU4RDBEMTgxRkEzRTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTQ4RDE4QzdEODgzMTFFODlERjBGMzA0NEY4QkM0NjkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTQ4RDE4QzZEODgzMTFFODlERjBGMzA0NEY4QkM0NjkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Zjg3N2RlZWUtNjY3NC05MjQ4LTlkZjAtMjAwZDVlZWYzYjAyIiBzdFJlZjpkb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6OGRhOTlmMmYtYzE5Yi0zYTRiLTkwZWYtNzJjM2NmNTkyYmFhIi8+IDwvcmRmOkRl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");
  position: relative;
  z-index: 0;
}
.pricing-table-12 .price-header:after {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(25, 123, 235, 0.2);
  content: "";
  z-index: -1;
}
.pricing-table-12 .price-header .subtitle {
  font-size: 14px;
  color: #e5e3e3;
}
.pricing-table-12 .price-header .title {
  color: #fff;
  font-size: 21px;
  line-height: 26px;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 20px;
  transition: 0.3s ease-in;
  margin-bottom: 5px;
}
.pricing-table-12 .icon-area {
  font-size: 60px;
  line-height: 60px;
  color: #197beb;
  margin-bottom: 10px;
  display: block;
}
.pricing-table-12 .price {
  font-size: 50px;
  line-height: 60px;
  color: #282828;
  font-weight: 800;
  text-align: center;
  position: relative;
  transition: 0.3s ease-in;
  padding: 15px 0 10px;
  margin: 0 20px;
}
.pricing-table-12 .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
  transition: 0.3s ease-in;
}
.pricing-table-12 .price .month {
  font-size: 20px;
  line-height: 20px;
  transition: 0.3s ease-in;
  font-weight: 800;
}
.pricing-table-12 .price-footer {
  margin-top: 40px;
}
.pricing-table-12 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #282828;
  transition: 0.5s ease-in;
  font-weight: 600;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
  border: 2px solid #197beb;
}
.pricing-table-12 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(0, 0, 0, 0.35);
  background-color: #197beb;
  color: #fff;
}
.pricing-table-12 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-12 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 0 30px;
  padding: 15px 0;
  transition: 0.3s ease-in;
  border-bottom: 1px solid #e7eefe;
}
.pricing-table-12 .price-body ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
.pricing-table-12 .price-body ul li:first-child {
  margin-top: 0;
}

.pricing-table-13 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  margin-bottom: 30px;
}
.pricing-table-13 .price-header {
  padding: 30px 0 65px;
  background-color: #efefef;
  position: relative;
  z-index: 0;
}
.pricing-table-13 .price-header .title {
  color: #282828;
  font-size: 21px;
  line-height: 26px;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 20px;
  transition: 0.3s ease-in;
  margin-bottom: 5px;
}
.pricing-table-13 .price-header .icon {
  font-size: 60px;
  line-height: 60px;
  color: #ed570b;
  display: block;
}
.pricing-table-13 .price {
  font-size: 40px;
  color: #fff;
  font-weight: 700;
  text-align: center;
  position: relative;
  transition: 0.3s ease-in;
  background-color: #ed570b;
  width: 90px;
  height: 90px;
  border-radius: 50%;
  line-height: 90px;
  left: 50%;
  margin-top: -45px;
  transform: translateX(-50%);
  margin-bottom: 15px;
}
.pricing-table-13 .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
  transition: 0.3s ease-in;
}
.pricing-table-13 .price .month {
  font-size: 20px;
  line-height: 20px;
  transition: 0.3s ease-in;
  font-weight: 800;
}
.pricing-table-13 .price-footer {
  margin-top: 40px;
}
.pricing-table-13 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
  background-color: #ed570b;
}
.pricing-table-13 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(237, 87, 11, 0.7);
}
.pricing-table-13 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-13 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 0 30px;
  padding: 15px 0;
  transition: 0.3s ease-in;
  border-bottom: 1px solid #e7eefe;
}
.pricing-table-13 .price-body ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
.pricing-table-13 .price-body ul li:first-child {
  margin-top: 0;
}

.pricing-table-14 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  overflow: hidden;
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  margin-bottom: 30px;
}
.pricing-table-14 .price-header {
  position: relative;
  padding: 30px 0 25px;
  background-color: #efefef;
  transition: 0.3s ease-in;
}
.pricing-table-14 .price-header .permonth {
  position: absolute;
  left: 50%;
  bottom: -20px;
  background-color: #fff;
  padding: 10px 35px;
  border-radius: 25px;
  transform: translateX(-50%);
  box-shadow: 0 0 11px 0 rgba(0, 0, 0, 0.1);
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 400;
  color: #383838;
}
.pricing-table-14 .price-header .title {
  color: #282828;
  font-size: 21px;
  line-height: 26px;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 20px;
  transition: 0.3s ease-in;
  margin-bottom: 15px;
}
.pricing-table-14:hover .price-header {
  background-color: #3367d6;
}
.pricing-table-14:hover .price-header .title {
  color: #fff;
}
.pricing-table-14:hover .price {
  color: #fff;
}
.pricing-table-14 .price {
  font-size: 50px;
  color: #282828;
  font-weight: 800;
  text-align: center;
  position: relative;
  transition: 0.3s ease-in;
  margin-bottom: 15px;
}
.pricing-table-14 .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-14 .price-footer {
  margin-top: 40px;
}
.pricing-table-14 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
  background-color: #3367d6;
}
.pricing-table-14 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(51, 103, 214, 0.7);
}
.pricing-table-14 .price-body ul {
  margin: 0;
  padding: 0;
  margin-top: 40px;
}
.pricing-table-14 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 0 30px;
  padding: 15px 0;
  transition: 0.3s ease-in;
  border-bottom: 1px solid #e7eefe;
}
.pricing-table-14 .price-body ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
.pricing-table-14 .price-body ul li:first-child {
  margin-top: 0;
}

.pricing-table-15 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  overflow: hidden;
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  border-radius: 10px;
  border: 2px solid transparent;
  margin-bottom: 30px;
}
.pricing-table-15:hover {
  border-color: #3367d6;
}
.pricing-table-15 .price-header {
  position: relative;
  transition: 0.3s ease-in;
}
.pricing-table-15 .price-header .icon {
  background-color: #3367d6;
  color: #fff;
  width: 50%;
  margin: 0 auto;
  height: 80px;
  font-size: 50px;
  line-height: 80px;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
}
.pricing-table-15 .price-header .title {
  color: #282828;
  font-size: 21px;
  line-height: 26px;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 20px;
  transition: 0.3s ease-in;
  margin-bottom: 5px;
}
.pricing-table-15 .price-header .subtitle {
  margin-bottom: 5px;
  display: block;
  font-size: 14px;
}
.pricing-table-15 .price {
  font-size: 50px;
  color: #282828;
  font-weight: 700;
  text-align: center;
  position: relative;
  transition: 0.3s ease-in;
}
.pricing-table-15 .price .month {
  font-size: 16px;
  font-weight: 600;
}
.pricing-table-15 .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-15 .price-footer {
  margin-top: 40px;
}
.pricing-table-15 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
  background-color: #3367d6;
}
.pricing-table-15 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(51, 103, 214, 0.7);
}
.pricing-table-15 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-15 .price-body ul li {
  list-style: none;
  display: block;
  color: #282828;
  margin: 0 30px;
  padding: 15px 0;
  transition: 0.3s ease-in;
  border-bottom: 1px solid #e7eefe;
}
.pricing-table-15 .price-body ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
.pricing-table-15 .price-body ul li:first-child {
  margin-top: 0;
}

.pricing-table-16 {
  text-align: center;
  transition: 0.3s ease-in;
  position: relative;
  z-index: 0;
  overflow: hidden;
  box-shadow: 0 0 7px 0 rgba(77, 109, 230, 0.35);
  border-radius: 10px;
  border: 2px solid transparent;
  margin-bottom: 30px;
}
.pricing-table-16:hover {
  border-color: #3367d6;
}
.pricing-table-16 .price-header {
  position: relative;
  transition: 0.3s ease-in;
}
.pricing-table-16 .price-header .title {
  color: #282828;
  font-size: 21px;
  line-height: 26px;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 20px;
  transition: 0.3s ease-in;
  margin-bottom: 5px;
  padding: 10px 0 0;
}
.pricing-table-16 .price-header .subtitle {
  margin-bottom: 5px;
  display: block;
  font-size: 14px;
}
.pricing-table-16 .price {
  font-size: 50px;
  color: #fff;
  font-weight: 700;
  text-align: center;
  position: relative;
  transition: 0.3s ease-in;
  height: 130px;
  width: 150px;
  background-color: #3367d6;
  margin: 30px auto 15px auto;
  line-height: 130px;
  border-radius: 10px;
  z-index: 0;
}
.pricing-table-16 .price .month {
  font-size: 16px;
  font-weight: 600;
}
.pricing-table-16 .price .dollar {
  font-size: 33px;
  line-height: 33px;
  position: relative;
  top: -12px;
}
.pricing-table-16 .price-footer {
  margin-top: 40px;
}
.pricing-table-16 .price-footer .order-btn {
  display: inline-block;
  width: 165px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 25px;
  color: #fff;
  transition: 0.5s ease-in;
  font-weight: 600;
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
  background-color: #3367d6;
}
.pricing-table-16 .price-footer .order-btn:hover {
  box-shadow: 0 0 21px 0 rgba(51, 103, 214, 0.7);
}
.pricing-table-16 .price-body ul {
  margin: 0;
  padding: 0;
}
.pricing-table-16 .price-body ul li {
  list-style: none;
  display: block;
  color: #8997a7;
  margin: 0 30px;
  padding: 15px 0;
  transition: 0.3s ease-in;
}
.pricing-table-16 .price-body ul li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
.pricing-table-16 .price-body ul li:first-child {
  margin-top: 0;
}
.tab-slider--nav {
  width: 100%;
  float: left;
  margin-bottom: 20px;
  padding-top:1.5em;
}

.tab-slider--tabs {
  display: block;
  float: left;
  margin: 0;
  padding: 0;
  list-style: none;
  position: relative;
  border-radius: 5px;
  overflow: hidden;
  background: #fff;
 
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tab-slider--tabs:after {
  content: "";
  width: 50%;
  background: #B2A4FF;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transition: all 250ms ease-in-out;
  border-radius: 5px;
}
.tab-slider--tabs.slide:after {
  left: 50%;
}

.tab-slider--trigger {
  font-size: 22px;
  line-height: 1;
  font-weight: bold;
  color: #B2A4FF: uppercase;
  text-align: center;
  padding: 11px 20px;
  position: relative;
  z-index: 2;
  cursor: pointer;
  display: inline-block;
  transition: color 250ms ease-in-out;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tab-slider--trigger.active {
  color: #fff;
}

.tab-slider--body {
  margin-bottom: 20px;
}
</style>
</head>
<body>


  
  
  
  
  
   <!-- Navbar -->
    <nav class="relative container mx-auto p-6 px-1">
      <!-- Flex container -->
      <div class="flex items-center justify-between">
        <!-- Logo -->
        
          <img src="https://i.imgur.com/WU4UQy9.png" width="300px" alt="" />
        
        <!-- Menu Items -->
        <div class="hidden bold space-x-6 md:flex">
          <a href="#" class="hover:text-darkGrayishBlue">About</a>
          <a href="#" class="hover:text-darkGrayishBlue">Agenda</a>
          <a href="#" class="hover:text-darkGrayishBlue">Sponsor</a>
          <a href="#" class="hover:text-darkGrayishBlue">Mentor</a>
         
        </div>
        <!-- Button -->
         <button class="inline-flex px-6 py-3 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700 focus:ring focus:outline-none">Set Tickets</button>

        <!-- Hamburger Icon -->
        <button
          id="menu-btn"
          class="block hamburger md:hidden focus:outline-none"
        >
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>


      
    </nav>
  
 


<!--<section class="hero bg-indigo-800 body-font">  
  <div class="container px-8 pt-48 pb-24 mx-auto lg:px-4">
    <div class="flex flex-col w-full mb-12 text-left lg:text-center">
      
    
     
    </div>
    <div class="flex lg:justify-center">
     
     
     
     </div>
    </div>
</section> -->
<div class="  w-full flex flex-row justify-center items-center">
    <!-- <img src="https://www.pngall.com/wp-content/uploads/10/Iceberg-Underwater-No-Background.png" width="512px"/>
      --> <h2 class="mb-4 text-center mt-10 text-8xl text-gray-900 font-bold md:text-8xl">Build for the Medverse</h2>
       </div>
       
       
       <img src="https://i.imgur.com/bppcA4Q.jpg" width="100%"/>
    <div class="py-5 bg-white">
   <div class="flex flex-col text-center mt-10	 w-full mb-10">
      <h2 class="text-1xl text-indigo-500 tracking-widest font-medium title-font mb-1">Our Partners..</h2>
      <h1 class="text-3xl text-gray-700 font-bold md:text-4xl"><b>work with some of the best 💡️</b></h1>
      
      

    </div>

  <div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
	</div>
</div>
 <!--<hr class="hr-1"> -->
 
 
 
 
 
 
 
 
 </div>
  <div class="py-16 bg-gray-50">
    <div  class="container m-auto px-6 space-y-8 text-gray-500 md:px-12 lg:px-20">
        <div class="justify-center text-center gap-6 md:text-left md:flex lg:items-center  lg:gap-16">
            <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                <h1 class="text-4xl text-gray-700 font-bold md:text-6xl">To Solve Big Problems <span class="text-blue-500">in HealthCare, Blockchain.</span></h1>
               
                <div class="flex flex-row-reverse flex-wrap justify-center gap-4 md:gap-6 md:justify-end">
                   
                    <a style="text-decoration: none;" href="#popup"> <button type="button" style="text-decoration: none;" title="more about" class="w-full order-first py-3 px-6 text-center  bg-gray-100 transition hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-200 sm:w-max">
                        <span style="text-decoration: none;" class="block text-gray-600 font-semibold">
                       See Problem Statements 🌿
                        </span>
                    </button></a> 
                </div>
            </div>
            
            
 
  <div class="popup" id="popup">
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
  <div class="flex justify-center md:justify-end -mt-16">
    <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://img.freepik.com/premium-vector/tablet-capsule-medicine-icon-illustration-healthcare-medical-icon-concept-isolated_138676-882.jpg?w=2000">
  </div>
  <div>
    <h2 class="text-gray-800 text-3xl font-semibold">"Counterfeit Medicines</h2>
    <p class="mt-2 text-gray-600">- Causes 70% Deaths Worldwide!<br/>- Drug Resistance</p>
  </div>
  <div class="flex justify-end mt-4">
    <a href="#!" class="text-xl font-medium text-indigo-500">Company'</a>
  </div>
</div>

&nbsp;&nbsp;
 <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
  <div class="flex justify-center md:justify-end -mt-16">
    <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://img.freepik.com/premium-vector/person-asks-question-wants-get-answer_124715-525.jpg">
  </div>
  <div>
    <h2 class="text-gray-800 text-3xl font-semibold">Problem Statement #2</h2>
    <p class="mt-2 text-gray-600">This is demo text, this is demo text, this is demo text, this is demo text, this is demo text, this is demo text, this is demo text</p>
  </div>
  <div class="flex justify-end mt-4">
    <a class="popup__close" href="#!">X</a>
  </div>
</div>
  </div>

            
               
                <div class="col-span-3 row-span-3">
                    <img src="https://blockchaintechs.io/wp-content/uploads/elementor/thumbs/Blockchain-in-Healthcare@2x-pn7fa206bpkqck7lqq33c07ow9wlx7hutyw45m60tc.png" class="w-full h-full object-cover object-top rounded-xl" width="640" height="427" alt="shoes" loading="lazy">
              
            </div>
        </div>
    </div>
</div>
  <section class="hero bg-indigo-800 body-font">  
  <div class="container  px-8 pb-24 mx-auto lg:px-4">
    <div class="flex flex-col w-full mb-12 text-left lg:text-center">
      
     <!-- <img src="https://cdn-icons-png.flaticon.com/512/701/701799.png" width="512px"/> -->
      
    </div>
    <div class="flex lg:justify-center">
     
     <h1 class="text-4xl text-white font-bold md:text-6xl">What's on the Agenda? </h1>
     
     </div>
   
     	<div class="tab-slider--nav">
		<ul class="tab-slider--tabs">
			<li class="tab-slider--trigger active" rel="tab1">Day-1</li>
			<li class="tab-slider--trigger" rel="tab2">Day-2</li>
		</ul>
	</div>
	<div class="tab-slider--container">
		<div id="tab1" class="tab-slider--body">
			<h2>Here is your Day-1 Agenda!</h2>
		
<br/>
 <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-2/3">
        <div class="flex rounded-lg h-full dark:bg-gray-900 pl-6 pr-6 pb-6 flex-col">
         
          <div class="flex-grow">
           	<ul class="timeline">
  <li>
    <p style="color:white; font-weight:bold;" class="timeline-date">7:00 AM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance
<br/>- Approve prior meeting’s minutes / Check availibility of members..
<br/>- Team status updates with counting of members..
<br/>- Etc.</h2>
      
    </div>
  </li>
  <li>
    <p style="color:white; font-weight:bold;" class="timeline-date">9:30 AM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance
<br/>- Approve prior meeting’s minutes / Check availibility of members..
<br/>- Team status updates with counting of members..
<br/>- Etc.</h2>
      
    </div>
  </li>
  <li>
     <p style="color:white; font-weight:bold;" class="timeline-date">4:30 PM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance
<br/>- Approve prior meeting’s minutes / Check availibility of members..
<br/>- Team status updates with counting of members..
<br/>- Etc.</h2>
     
    </div>
  </li>
</ul>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full dark:bg-gray-900 p-8 flex-col">
        
    <p style=" color:#FF8FB1; font-weight:bold;" class="timeline-date1">9:00 PM <br/>(Day 1's Special)</p><br/>
    
      <h2>

<br/>- Take attendance
<br/>- Approve prior meeting’s minutes
<br/>- Team status updates
<br/>- Etc.</h2>
      
      <button class=" mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Set Reminder</button>
  
        </div>
      </div>
     
    </div>

		</div>
		<div id="tab2" class="tab-slider--body">
			<h2>Here is your Day-2 Agenda!</h2>
		<br/>
 <div class="flex flex-wrap -m-4">
      <div class="p-4 md:w-2/3">
        <div class="flex rounded-lg h-full dark:bg-gray-900 pl-6 pr-6 pb-6 flex-col">
         
          <div class="flex-grow">
           	<ul class="timeline">
  <li>
    <p style="color:white; font-weight:bold;" class="timeline-date">7:30 AM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance of Day 2
<br/>- Approve all the meeting’s minutes / Check availibility of members..
<br/>- Team status updates with counting of members..
<br/>- Etc. Etc.</h2>
      
    </div>
  </li>
  <li>
    <p style="color:white; font-weight:bold;" class="timeline-date">11:30 AM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance of Day 2
<br/>- Approve all the meeting’s minutes / Check availibility of members..
<br/>- Team status updates with counting of members..
<br/>- Etc. Etc.</h2>
      
    </div>
  </li>
  <li>
     <p style="color:white; font-weight:bold;" class="timeline-date">2:45 PM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance of Day 2
<br/>- Approve all the meeting’s minutes / Check availibility of members..
<br/>- Team status updates with counting of members..
<br/>- Etc. Etc.</h2>
     
    </div>
  </li>
</ul>
          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="flex rounded-lg h-full dark:bg-gray-900 p-8 flex-col">
        
    <p style=" color:#FF8FB1; font-weight:bold;" class="timeline-date1">8:00 PM <br/>(Day 2's Special)</p><br/>
    
      <h2>

<br/>- Take attendance
<br/>- Approve prior meeting’s minutes
<br/>- Team status updates
<br/>- Etc.</h2>
      
      <button class=" mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Set Reminder</button>
  
        </div>
      </div>
     
    </div>
		</div>

</div>
     <script>
     $("document").ready(function(){
  $(".tab-slider--body").hide();
  $(".tab-slider--body:first").show();
});

$(".tab-slider--nav li").click(function() {
  $(".tab-slider--body").hide();
  var activeTab = $(this).attr("rel");
  $("#"+activeTab).fadeIn();
	if($(this).attr("rel") == "tab2"){
		$('.tab-slider--tabs').addClass('slide');
	}else{
		$('.tab-slider--tabs').removeClass('slide');
	}
  $(".tab-slider--nav li").removeClass("active");
  $(this).addClass("active");
});

     </script>
     
     <!-- <div class="py-16 ">
    <div  class="container m-auto px-6 space-y-8 text-gray-500 md:px-12 lg:px-20">
        <div class="justify-center text-center gap-6 md:text-left md:flex lg:items-center  lg:gap-16">
            <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
               asd
               
                <div class="flex flex-row-reverse flex-wrap justify-center gap-4 md:gap-6 md:justify-end">
                   
                    
                </div>
            </div>
            
            
            
            
            
            
            <div class="col-span-3 row-span-3">
                     <ul class="timeline">
  <li>
    <p style="color:white; font-weight:bold;" class="timeline-date">7:00 AM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance
<br/>- Approve prior meeting’s minutes
<br/>- Team status updates
<br/>- Etc.</h2>
      
    </div>
  </li>
  <li>
    <p style="color:white; font-weight:bold;" class="timeline-date">9:30 AM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance
<br/>- Approve prior meeting’s minutes
<br/>- Team status updates
<br/>- Etc.</h2>
      
    </div>
  </li>
  <li>
     <p style="color:white; font-weight:bold;" class="timeline-date">4:30 PM</p>
    <div class="timeline-content">
      <h2>

<br/>- Take attendance
<br/>- Approve prior meeting’s minutes
<br/>- Team status updates
<br/>- Etc.</h2>
     
    </div>
  </li>
</ul>
              
            </div>
            
            
            
            
            </div></div></div> -->
     
     

     
     
    
    </div>
</section>

<div class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-8 mx-auto">
                <div class="xl:items-center xl:-mx-8 xl:flex">
                    <div class="flex flex-col items-center xl:items-start xl:mx-8">
                        <h1 class="text-3xl  text-white font-bold md:text-5xl">Want to Sponsor </h1>
                        <img src="https://i.imgur.com/ljySuLM.png"/>
                        <div class="mt-4">
                            <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                        </div>

                          <p class="mt-4 font-medium text-gray-500 dark:text-gray-300">
                            You can get all access by selecting your sponsor plan!
                        </p>

                       
                    </div>

                    <div class="flex-1 xl:mx-8">
                        <div class="mt-8 space-y-8 md:-mx-4 md:flex md:items-center md:justify-center md:space-y-0 xl:mt-0">
                            <div class="max-w-sm mx-auto border rounded-lg md:mx-4 dark:border-gray-700">
                                <div class="p-6">
                                    <h1 class="text-xl font-medium text-gray-700 capitalize lg:text-3xl dark:text-white">Basic Plan</h1>

                                    

                                    <h2 class="mt-4 text-2xl font-medium text-gray-700 sm:text-4xl dark:text-gray-300">₹10 <span class="text-base font-medium">/ Month</span></h2>

                                   

                                    <button class="w-full px-4 py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Select Plan
                                    </button>
                                </div>

                                <hr class="border-gray-200 dark:border-gray-700">

                                <div class="p-6">
                                    <h1 class="text-lg font-medium text-gray-700 capitalize lg:text-xl dark:text-white">What’s included:</h1>

                                    <div class="mt-8 space-y-4">
                                 

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="max-w-sm mx-auto border rounded-lg md:mx-4 dark:border-gray-700">
                                <div class="p-6">
                                    <h1 class="text-xl font-medium text-gray-700 capitalize lg:text-3xl dark:text-white">Premium Plan</h1>

                                    

                                    <h2 class="mt-4 text-2xl font-medium text-gray-700 sm:text-4xl dark:text-gray-300">₹20 <span class="text-base font-medium">/ lifetime</span></h2>

                                   

                                    <button class="w-full px-4 py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Select Plan
                                    </button>
                                </div>

                                <hr class="border-gray-200 dark:border-gray-700">

                                <div class="p-6">
                                    <h1 class="text-lg font-medium text-gray-700 capitalize lg:text-xl dark:text-white">What’s included:</h1>

                                    <div class="mt-8 space-y-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            <div class="max-w-sm mx-auto border rounded-lg md:mx-4 dark:border-gray-700">
                                <div class="p-6">
                                    <h1 class="text-xl font-medium text-gray-700 capitalize lg:text-3xl dark:text-white">Platinum Plan</h1>

                                    

                                    <h2 class="mt-4 text-2xl font-medium text-gray-700 sm:text-4xl dark:text-gray-300">₹30 <span class="text-base font-medium">/ lifetime</span></h2>

                                   

                                    <button class="w-full px-4 py-2 mt-6 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Select Plan
                                    </button>
                                </div>

                                <hr class="border-gray-200 dark:border-gray-700">

                                <div class="p-6">
                                    <h1 class="text-lg font-medium text-gray-700 capitalize lg:text-xl dark:text-white">What’s included:</h1>

                                    <div class="mt-8 space-y-4">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>

                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="mx-4 text-gray-700 dark:text-gray-300">Free Demo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12 xl:px-32">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-center text-4xl text-gray-900 font-bold md:text-5xl">Get Mentored by the finest minds</h2>
            <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Join our personal growth accelerator online program and get access to over 100+ hours of incredible trainings from world-class experts.</p>
            
            <br/>
            <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Apply for Program</button>
        </div>
        
       <!-- <div class="grid gap-12 items-center md:grid-cols-3">
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" 
                    src="https://cdn.dribbble.com/users/1382518/screenshots/6515787/genericloader_alchemy_gen.gif" alt="woman" loading="lazy" width="640" height="805">
                <div>
                    <h4 class="text-black text-2xl">Komal</h4>
                    <span class="block text-sm text-gray-500">CEO</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80" 
                    src="https://img.wallpapersafari.com/tablet/2048/2732/65/52/hqi7a2.jpg" alt="man" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-black text-2xl">Vega</h4>
                    <span class="block text-sm text-gray-500">CEO</span>
                </div>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" 
                    src="https://cdn.dribbble.com/users/1382518/screenshots/6515787/genericloader_alchemy_gen.gif" alt="woman" loading="lazy" width="1000" height="667">
                <div>
                    <h4 class="text-black text-2xl">Claudias</h4>
                    <span class="block text-sm text-gray-500">CEO</span>
                </div>
            </div>
        </div> -->
        
        
        
        <!-- ====== Team Section Start -->
<section class="">
   <div class="container">
 
      <div class="flex flex-wrap justify-center -mx-4">
         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="max-w-[370px] w-full mx-auto mb-10">
               <div class="relative rounded-lg overflow-hidden">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/team/team-01/image-01.jpg"
                     alt="image"
                     class="w-full"
                     />
                  <div class="absolute w-full bottom-5 left-0 text-center">
                     <div
                        class="
                        bg-white
                        relative
                        rounded-lg
                        overflow-hidden
                        mx-5
                        py-5
                        px-3
                        "
                        >
                        <h3 class="text-base font-semibold text-black">
                           Komal
                        </h3>
                        <p class="text-sm text-body-color">Web Developer</p>
                        <div>
                           <span class="absolute left-0 bottom-0">
                              <svg
                                 width="61"
                                 height="30"
                                 viewBox="0 0 61 30"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="16"
                                    cy="45"
                                    r="45"
                                    fill="#13C296"
                                    fill-opacity="0.11"
                                    />
                              </svg>
                           </span>
                           <span class="absolute top-0 right-0">
                              <svg
                                 width="20"
                                 height="25"
                                 viewBox="0 0 20 25"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="0.706257"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 1.58989)"
                                    fill="#3056D3"
                                    />
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="max-w-[370px] w-full mx-auto mb-10">
               <div class="relative rounded-lg overflow-hidden">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/team/team-01/image-02.jpg"
                     alt="image"
                     class="w-full"
                     />
                  <div class="absolute w-full bottom-5 left-0 text-center">
                     <div
                        class="
                        bg-white
                        relative
                        rounded-lg
                        overflow-hidden
                        mx-5
                        py-5
                        px-3
                        "
                        >
                        <h3 class="text-base font-semibold text-black">
                          Pranav
                        </h3>
                        <p class="text-sm text-body-color">App Developer</p>
                        <div>
                           <span class="absolute left-0 bottom-0">
                              <svg
                                 width="61"
                                 height="30"
                                 viewBox="0 0 61 30"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="16"
                                    cy="45"
                                    r="45"
                                    fill="#13C296"
                                    fill-opacity="0.11"
                                    />
                              </svg>
                           </span>
                           <span class="absolute top-0 right-0">
                              <svg
                                 width="20"
                                 height="25"
                                 viewBox="0 0 20 25"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="0.706257"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 1.58989)"
                                    fill="#3056D3"
                                    />
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="max-w-[370px] w-full mx-auto mb-10">
               <div class="relative rounded-lg overflow-hidden">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/team/team-01/image-03.jpg"
                     alt="image"
                     class="w-full"
                     />
                  <div class="absolute w-full bottom-5 left-0 text-center">
                     <div
                        class="
                        bg-white
                        relative
                        rounded-lg
                        overflow-hidden
                        mx-5
                        py-5
                        px-3
                        "
                        >
                        <h3 class="text-base font-semibold text-black">
                           Vega
                        </h3>
                        <p class="text-sm text-body-color">UI/UX Designer</p>
                        <div>
                           <span class="absolute left-0 bottom-0">
                              <svg
                                 width="61"
                                 height="30"
                                 viewBox="0 0 61 30"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="16"
                                    cy="45"
                                    r="45"
                                    fill="#13C296"
                                    fill-opacity="0.11"
                                    />
                              </svg>
                           </span>
                           <span class="absolute top-0 right-0">
                              <svg
                                 width="20"
                                 height="25"
                                 viewBox="0 0 20 25"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="0.706257"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 1.58989)"
                                    fill="#3056D3"
                                    />
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="w-full md:w-1/2 xl:w-1/4 px-4">
            <div class="max-w-[370px] w-full mx-auto mb-10">
               <div class="relative rounded-lg overflow-hidden">
                  <img
                     src="https://cdn.tailgrids.com/1.0/assets/images/team/team-01/image-04.jpg"
                     alt="image"
                     class="w-full"
                     />
                  <div class="absolute w-full bottom-5 left-0 text-center">
                     <div
                        class="
                        bg-white
                        relative
                        rounded-lg
                        overflow-hidden
                        mx-5
                        py-5
                        px-3
                        "
                        >
                        <h3 class="text-base font-semibold text-black">
                           Claudius
                        </h3>
                        <p class="text-sm text-body-color">Sales Manager</p>
                        <div>
                           <span class="absolute left-0 bottom-0">
                              <svg
                                 width="61"
                                 height="30"
                                 viewBox="0 0 61 30"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="16"
                                    cy="45"
                                    r="45"
                                    fill="#13C296"
                                    fill-opacity="0.11"
                                    />
                              </svg>
                           </span>
                           <span class="absolute top-0 right-0">
                              <svg
                                 width="20"
                                 height="25"
                                 viewBox="0 0 20 25"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="0.706257"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="24.3533"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 24.3533)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="18.6624"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 18.6624)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="12.9717"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 12.9717)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="7.28077"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 7.28077)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="0.706257"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 0.706257 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="6.39669"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 6.39669 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="12.0881"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 12.0881 1.58989)"
                                    fill="#3056D3"
                                    />
                                 <circle
                                    cx="17.7785"
                                    cy="1.58989"
                                    r="0.646687"
                                    transform="rotate(-90 17.7785 1.58989)"
                                    fill="#3056D3"
                                    />
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Team Section End -->
    </div>
</div>


</body>
</html>