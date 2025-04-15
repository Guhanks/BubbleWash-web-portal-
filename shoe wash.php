<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap');
body {
  margin: 0 auto;
  max-width: 100%;
  padding: 0 20px;
  font-family: 'Poppins', sans-serif;
}

/* Banner styles */
.banner {
  position: relative;
  height: 500px; 
  background: linear-gradient(to right, rgba(0, 0, 0, 0.150), black), url('./img/shoewash.jpg'); 
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
  background-color:

 #333;
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
  <div class="caption">Shoe Washing</div>
</div>

<h2></h2>

<div class="container fade-in">
  <img src="./img/shoe.jpg" alt="Avatar" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Shoe Washing Service:</h1>
  <p class="para">At Bubble Wash Laundry Service, we understand the importance of maintaining the cleanliness and condition of your beloved shoes. Our professional shoe washing service is designed to give your footwear a thorough clean, removing dirt, stains, and odors, so they look and feel fresh once again.</p>
</div>

<div class="container darker fade-in">
  <img src="./img/shoe wash-2.jpg" alt="Avatar" class="right" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Why Choose Our Shoe Washing Service?</h1>
  <p class="para">- Deep Cleaning: Our specialized shoe washing process goes beyond surface cleaning. We tackle dirt, grime, and stains to restore your shoes' original appearance.<br><br>
  - Expert Care: Our trained professionals understand the intricacies of different shoe materials and designs. We handle each pair with care, ensuring that they receive the appropriate cleaning techniques.<br><br>
  - Odor Elimination: Say goodbye to unpleasant odors! Our cleaning methods effectively remove unwanted smells, leaving your shoes fresh and ready to wear.<br><br>
  - Convenience: With our shoe washing service, you can save time and effort. Simply drop off your shoes, and we'll take care of the rest.</p>
</div>

<div class="container fade-in">
  <img src="./img/shoe wash-3.webp" alt="Avatar" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Our Shoe Washing Process:</h1>
  <p class="para">1. Initial Assessment: Our experts examine your shoes to identify any specific cleaning requirements or areas that need extra attention.<br><br>
  2. Surface Preparation: We remove loose dirt and debris from your shoes using specialized brushes and gentle cleaning solutions.<br><br>
  3. Deep Cleaning: Your shoes are immersed in our specially formulated cleaning solutions that target stains, dirt, and odors. We use appropriate techniques to ensure the best possible results while protecting the shoe material.<br><br>
  4. Stain Treatment: Stubborn stains are treated with suitable stain removal methods, taking into account the shoe's material and the nature of the stain.<br><br>
  5. Drying and Deodorizing: After cleaning, your shoes are carefully dried using proper techniques to maintain their shape and prevent damage. We also deodorize

 them to eliminate any lingering odors.<br><br>
  6. Finishing Touches: We polish and restore the shine of leather shoes, ensuring they look their best. For other materials, we employ appropriate finishing techniques to enhance their appearance.<br><br>
  7. Quality Check: Each pair of shoes undergoes a meticulous quality check to ensure they meet our high standards.<br><br>
  8. Packaging: Your clean and refreshed shoes are neatly packaged and made ready for pickup or delivery.</p>
</div>
<button class="book-button fade-in" onclick="window.location.href='bookings.php'">Click here to book service</button>
</body>
<?php include_once "footer.php";
?>
</html>