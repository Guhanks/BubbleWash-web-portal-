<style>
/*------------------------------ footer -----------------------*/
:root 
{
    --primary:#e52165;
    --secondary: black;
}
footer {
  margin-top:200px;
  background-color:black;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height:250px;
  margin-bottom:-100px
}

.footer-left img {
  height: 50px;
  width: 50px;
}

.footer-left p {
  margin: 0;
  font-weight: bold;
  color:azure;
}

.footer-center ul {
  list-style-type: none;0
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.footer-center ul li {
  margin-bottom: 2px;
}

.footer-center ul li a {
  text-decoration: none;
  color:azure;
}
.footer-center ul li a::after{ 
    /* to give effect to hyperlinks like underline effect  */ 
    /* pseudo class */
         content:'';
        display: block; 
        background-color:var(--primary);
        height: 2px;
        transform:scaleX(0);
        transition:transform 300ms;
    }
    .footer-center ul li a:hover::after /* to give effect to hyperlinks like underline effect  */
    {
        transform:scaleX(1);
        margin-bottom:6px;
    
    }
.footer-right {
  display: flex;
  align-items: flex-start;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	padding: 8;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color:white;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}
</style>
<html>
  <head>
  <script src="https://kit.fontawesome.com/f3c771a62d.js" crossorigin="anonymous"></script>
</head>
    <body>
<footer>
  <div class="footer-left">
    <img src="./img/logo.png" alt="Company Logo">
    <p>BUBBLE WASH LAUNDRY SERVICES</p><br>
    <p>Address: 123 Main Street, City</p>
      <p>Email: info@example.com</p>
      <p>Contact No: +1 123-456-7890</p>
  </div>
  
  <div class="footer-center">
    <h3 style="color:white;" >AVAILABLE LINKS</h3>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="">Services</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
  <div class="footer-center">
    <h3 style="color:white;">OUR SERVICES</h3>
    <ul>
      <li><a href="dryclean.php">Dry Clean</a></li>
      <li><a href="steam iron.php">Steam Iron</a></li>
      <li><a href="bagtoy.php">Bag & Toy Wash</a></li>
      <li><a href="shoe wash">Shoe Wash</a></li>
    </ul>
  </div>
  
  <div class="footer-col">
  	 			<h4 style="color:white">follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/facebook/"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://www.linkedin.com/signup"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  </div>
</footer>
</body>
</html>