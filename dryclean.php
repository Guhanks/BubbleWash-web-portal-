<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap');

/* Global styles */
body {
  margin: 0 auto;
  max-width: 100%;
  padding: 0 20px;
  font-family: 'Poppins', sans-serif;
}

/* Banner styles */
.banner {
  position: relative;
  height: 500px; /* Adjust the height as needed */
  background: linear-gradient(to right, rgba(0, 0, 0, 0.150), black), url('./img/dryclean.jpg'); 
  background-size: cover;
  text-align: center;
  color: whitesmoke;
}

/* Styling for the caption */
.caption {
  position: absolute;
  bottom: 40%;
  left: 50%;
  transform: translateX(-50%);
  font-size: 70px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

/* Container styles */
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 600px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease-in-out;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right: 0;
}

/* Paragraph styles */
.para {
  margin-bottom: 10px;
  position: relative;
  padding: 20px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
  color: black;
  font-size: 18px;
  font-family: 'Poppins', sans-serif;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

/* Hover and animation styles */
.container:hover,
.container img:hover,
.para:hover {
  transform: translateY(-5px);
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.fade-in {
  animation: fadeIn 1s ease-in-out;
}

.slide-up {
  animation: slideUp 1s ease-in-out;
}

@keyframes slideUp {
  from {
    transform: translateY(50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Button styles */
.book-button {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.book-button:hover {
  background-color: #555;
}

.container.fade-in {
  background-color: #f0f0f0;
  color: black;
}

.container.darker.fade-in {
  background-color: #000;
  color:white;
}
.container.darker p {
  color:white;
}

</style>
</head>
<body>
<div class="banner">
  <div class="caption">Dry Clean</div>
</div>

<h2></h2>

<div class="container fade-in">
  <img src="./img/drycleaning.jpg" alt="Avatar" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Dry Clean Service:</h1>
  <p class="para">At Bubble Wash Laundry Service, we recognize the importance of providing specialized care for your garments. Our dedicated dry clean service ensures that your delicate fabrics, intricate designs, and elegant attire receive the utmost attention and preservation.</p>
</div>

<div class="container darker fade-in">
  <img src="./img/dryclean1.jpeg" alt="Avatar" class="right" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Why Choose Dry Cleaning service?</h1>
  <p class="para">- Exceptional Cleaning: Our advanced dry cleaning equipment and environmentally friendly solvents effectively eliminate dirt, stains, and odors, leaving your garments fresh and rejuvenated.<br><br>
  - Gentle Approach: We employ gentle techniques to safeguard the color, texture, and structure of your garments, ensuring they retain their original beauty and longevity.<br><br>
  - Expert Stain Removal: Our experienced professionals possess the expertise to treat a wide range of stains, including oil, grease, wine, and ink. Rest assured that your garments are in capable hands.<br><br>
  - Convenient and Efficient: We prioritize your convenience with our prompt service. Simply drop off your items, and we'll take care of the rest.</p>
</div>

<div class="container fade-in">
  <img src="./img/drycleaning2.jpg" alt="Avatar" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Our Dry Cleaning Process:</h1>
  <p class="para">1. Comprehensive Inspection: Our experts meticulously examine each garment for stains, fabric type, and any necessary repairs.<br><br>
  2. Pre-Treatment: Stubborn stains undergo pre-treatment using specialized solutions to optimize their removal during the cleaning process.<br><br>
  3. Dry Cleaning: Garments are placed in our state-of-the-art dry cleaning machines, where they undergo a thorough cleaning using gentle solvents that dissolve dirt and stains.<br><br>
  4. Spot Treatment: Any remaining stains receive meticulous attention to ensure the best possible results.<br><br>
  5. Hand Finishing: After cleaning, garments are carefully inspected and hand-finished to remove wrinkles and restore their crisp appearance.<br><br>
  6. Quality Check: Each item undergoes a final quality check to ensure it meets our stringent standards before being meticulously packaged and made available for pickup or delivery.</p>
</div>
<button class="book-button fade-in" onclick="window.location.href='bookings.php'">Click here to book service</button>
</body>
<?php include_once "footer.php";
?>
</html>
