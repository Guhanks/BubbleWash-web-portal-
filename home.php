<?php
session_start();
// Logout functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {
    // Destroy session and redirect to login page
    session_destroy();
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://kit.fontawesome.com/f3c771a62d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>     
    <style>
        :root 
{
    --primary:#e52165;
    --secondary: black;
}
        /* Navbar styles */
        .navbar {
            display: flex;
            align-items: center;
            background-color:black;
            padding: 10px;
        }
        .navbar-brand {
            margin-right: auto;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        #img1 {
            height: 100px;
            margin-right: 10px;
            width:120px;
            margin-left:5px;
        }
        #img2 {
            height: 80px;
            margin-right: 10px;
            width:300px;
            margin-left:5px;
        }
        .navbar-nav {
            display: flex;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }  nav {
      display: flex;
      align-items: center;
      background-color: black;
      padding: 10px;
      justify-content: flex-end; 
    }
    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    nav li {
      display: inline-block;
      position: relative;
    }
    nav li a {
      display: block;
      padding: 10px;
      text-decoration: none;
      color: #fff;
    }
    nav .submenu li {
      display: block;
      transition: background-color 0.3s ease;
    }
    nav .submenu li a {
      color: #fff;
      display: block;
      padding: 5px 0;
      transition: color 0.3s ease;
    }
    nav .submenu li:hover {
      background-color: rgba(0, 0, 0, 0.9);
    }

    nav .submenu li:hover a {
      color: #ff0000;
    }
    nav .has-submenu.clicked .submenu {
      display: block;
      opacity: 1;
    }
/* Submenu style */
nav .submenu {
  display: none;
  position: absolute;
  top: calc(100% + 10px); 
  left: 0; 
  background-color: rgba(0, 0, 0, 0.7);
  width: 200px;
  padding: 10px;
  opacity: 0;
  transition: opacity 0.3s ease;
  z-index: 2; 
}

/* Header styles */
.header {
  position: relative;
  width: 100%;
  height: 700px;
  overflow: hidden;
  z-index: 1; 
}

.slideshow-container {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 0; 
}

.slide {
  display: none;
  width: 100%;
  height: 100%;
}

.slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
    h4
        {
    color:white;
    margin-right:30px;
    }
       #logout
    {
    border:none;
    padding:5px;
    background-color:red;
    margin-bottom:5px;
    float:right;
     }   
        .textarea
       {    
        color:azure;
        position:absolute;
        font-size: larger;
         top: 40%;
         left:60%;
        justify-content:space-between;
        padding:30px;
        background-color: rgba(0, 0, 0, 0.408);
        }
        .textarea h1
        {
         margin: 1.2rem 0;
         justify-content:space-between;
        }
        .button
         {
        padding:20px;
        background-color:red;
        color:azure;
         }
        .center {
        text-align: center;
         }
.flex-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 50px;
    margin-bottom:50px;
}
.grid-items {
    width: 200px;
    height: 200px;
    background: radial-gradient(circle at center, black , grey);
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transform: scale(1); 
    transition: transform 0.3s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.grid-items:hover {
    transform: scale(1.05);
}
.grid-item h3 {
    font-size: 18px;
    color: #fff;
    text-align: center;
    margin: 0;
    padding: 10px;
    margin-left:0;
}
.grid-item:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at center, lightgreen,darkgreen);
    opacity:0;
    transition: opacity 0.3s ease-in-out;
}
h3{color:white;}
.grid-item:hover:before {
    opacity: 1;
}
        /* Grid styles */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            margin-top:30px;
            margin-bottom:30px;
        }

        .grid-item1 {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            margin-top:30px;
            margin-bottom:30px;
        }

        .grid-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 24px;
            text-align: center;
            opacity: 0;
            font-weight:bold;
            transition: opacity 0.3s ease-in-out;
        }

        .grid-item1:hover .grid-text {
            opacity: 1;
        }

        .grid-item1:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .grid-item1:hover:before {
            opacity: 1;
        }

       .grid-container img
       {
        height:300px;
        width:500px;
       }
       
    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 100px;
      margin-bottom: -350px;
      margin-top: 100px;

    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      position: relative;
      padding:40px;
      padding-top: 90px;
      color: #999;
      box-shadow: 0 15px 50px rgba(0,0,0,0.2);
      filter: blur(4px);
      background:#d1ebff;
      border-radius: 20px;
    }
    .swiper-slide-active{
      filter: blur(0px);
      background:#fff;
    }
    .swiper-slide .quote{
      position:absolute;
      top: 20px;
      right: 30px;
      opacity: 0.2;
    }
    .swiper-slide .details .imgBx{
      position: relative;
      width:60px;
      height:60px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 10px;
    }
    .swiper-slide .details .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .swiper-slide .details h3{
      font-size: 20px;
      font-weight:400;
      letter-spacing:1px;
      color: #2196f3;
    }
    .swiper-slide .details h3 span{
      font-size:12px;
      color: #666;
    }
    .swiper-slide img {
      display: block;
      width: 60%;
    }
.login{display:none;}
.contact-details p {
  margin: 0;
}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const submenuItems = document.querySelectorAll('.has-submenu');

      submenuItems.forEach(item => {
        item.addEventListener('click', () => {
          item.classList.toggle('clicked');
        });
      });
    });
    const loginElement = document.querySelector('.login');
      const loggedin = true; 
      if (loggedin) {
        loginElement.style.display = 'block';
      }
    
  </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="navbar-brand">
            <img src="./img/logo.png" alt="Logo" id="img1">
        <img src="./img/logoname.png" id="img2">
        </a>
        <h4 class="login">Welcome, <?php echo $_SESSION["username"]; ?></h4>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" name="logout" id="logout" value="Logout">
        <ul class="navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li class="has-submenu">
          <a href="#">Service</a>
          <ul class="submenu">
            <li><a href="dryclean.php">Dry Wash</a></li>
            <li><a href="steam iron.php">Steam Iron</a></li>
            <li><a href="shoe wash.php">Shoe Washing</a></li>
            <li><a href="bagtoywash.php">Toy & bag wash</a></li>
          </ul>
        </li>
            </li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <!-- Header -->
    <div class="header">
        <div class="slideshow-container">
            <div class="slide">
                <img src="./img/slide-1.png" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="./img/slide-2.jpg" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="./img/slide-3.jpg" alt="Slide 3">
            </div>
        </div>
        <div class="textarea">
                    <p> WELCOME TO</p> 
                        <h1> BUBBLE  WASH  LAUNDRY </h1>
                        <p>Click on below button to create an account</p><br>
                    <a class="button" href="login.php">Sign In Here</a><br>
                </div>
    </div>
    <h2 class="center">WHY US</h2>
        <div class="flex-grid">
        <div class="grid-items">
            <i class="fa-sharp fa-solid fa-indian-rupee-sign "style="color: #ffffff; font-size: 40px; height:100px; width:150px;margin-left:40px;"></i>
            <h3> VALUE FOR MONEY</h3></div>
            <div class="grid-items">
            <i class="fa-sharp fa-solid fa-shirt" style="color: #f5f7f9; font-size: 40px; height:100px; width:150px;margin-left:40px;"></i>
            <h3> GENTLE CARE</h3></div>
            <div class="grid-items">
            <i class="fa-sharp fa-solid fa-truck " style="color: #ffffff; font-size: 40px; height:100px; width:150px;margin-left:40px;"></i>
            <h3> FREE PICKUP AND DELIVERY</h3></div>
            <div class="grid-items">
            <i class="fa-solid fa-clock" style="color: #fafafa; font-size: 40px; height:100px; width:150px;margin-left:40px;"></i>
            <h3>24X7 SERVICE</h3>
            </div>
        </div>
<h2 class="center">OUR SERVICES</h2>
</div>
<div class="grid-container">
    <div class="grid-item1" onclick="redirectToPage('dryclean.php')">
        <img src="./img/dryclean.jpg" alt="Image 1">
        <div class="grid-text">dryclean</div>
    </div>
    <div class="grid-item1" onclick="redirectToPage('steam iron.php')">
        <img src="./img/steam iron.jpg" alt="Image 2">
        <div class="grid-text">steam iron</div>
    </div>
    <div class="grid-item1" onclick="redirectToPage('bagtoywash.php')">
        <img src="./img/bag wash.jpeg" alt="Image 2">
        <div class="grid-text">Bag and Toy wash</div>
    </div>
    <div class="grid-item1" onclick="redirectToPage('shoewash.php')">
        <img src="./img/shoe.jpg" alt="Image 3">
        <div class="grid-text">shoe washing</div>
    </div>
  
</div>

<script>
    function redirectToPage(url) {
        window.location.href = url;
    }
</script>
    <h1 style="color:black; text-align:center;">WHAT OUR CUSTOMERS SAYS</h1>
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="height:350px;">
        <img src="quote.png" class="quote" style="width:15%;">
        <div class="details">
          <div class="imgBx">
          <img src="" />
          </div>
          <h3>Peter Parker<br><span></span></h3>
        </div>
        <div class="content">
          <p>"Bubble Wash Laundry Services exceeded my expectations with their exceptional service and attention to detail. Highly recommended!"</p>
        </div>
      </div>

      <div class="swiper-slide" style="height:350px;">
        <img src="quote.png" class="quote" style="width:15%;">
        <div class="details">
          <div class="imgBx">
          <img src="./img/customer-2.jpg" />
          </div>
          <h3>Nirupam<br><span></span></h3>
        </div>
        <div class="content">
          <p>"The professionalism and reliability of Bubble Wash Laundry Services are impressive. They consistently deliver outstanding results. I wouldn't trust my laundry with anyone else!"</p>
        </div>
      </div>
      <div class="swiper-slide" style="height:350px;">
        <img src="quote.png" class="quote" style="width:15%;">
        <div class="details">
          <div class="imgBx">
          <img src="./img/naveen.png" />
          </div>
          <h3>Naveen<br><span></span></h3>
        </div>
        <div class="content">
          <p>"I am extremely satisfied with Bubble Wash Laundry Services. Their efficiency and quality of work are unmatched. Will definitely be a returning customer!"</p>
        </div>
      </div>
    <div class="swiper-pagination"></div>
  </div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Slideshow
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var slides = document.getElementsByClassName("slide");
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000);
        }
    </script>
     <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 10,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    loop:true,
  });
</script>
</script>
<?php include_once "footer.php";
?>
</body>
</html>