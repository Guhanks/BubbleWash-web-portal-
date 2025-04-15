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
.banner {
  position: relative;
  height: 500px; 
  background: linear-gradient(to right, rgba(0, 0, 0, 0.150), black), url('./img/bag wash.jpeg'); 
  background-size: cover;
  text-align: center;
  color: whitesmoke;
}
.caption {
  position: absolute;
  bottom: 40%;
  left: 50%;
  transform: translateX(-50%);
  font-size: 70px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
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
  <div class="caption">Bag and Toy Washing</div>
</div>
<h2></h2>
<div class="container fade-in">
  <img src="./img/toy wash.jpeg" alt="Avatar" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Bag and Toy Washing Service:</h1>
  <p class="para">At Bubble Wash Laundry Service, we understand that bags and toys often go through a lot of wear and tear. Whether it's a cherished stuffed animal, a beloved toy, or your favorite handbag, our professional bag and toy washing service is here to help. We ensure that your items receive a thorough clean, removing dirt, stains, and odors, so they can be enjoyed for years to come.</p>
</div>

<div class="container darker fade-in">
  <img src="./img/bag clean.jpg" alt="Avatar" class="right" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Why Choose Our Bag and Toy Washing Service?</h1>
  <p class="para">- Comprehensive Cleaning: Our specialized washing process is designed to deeply clean your bags and toys, removing dirt, stains, and allergens, ensuring they look and feel fresh.<br><br>
  - Gentle Treatment: We understand that bags and toys come in various materials and constructions. Our experts employ gentle techniques and use suitable cleaning agents to preserve their integrity and appearance.<br><br>
  - Odor Elimination: We tackle unpleasant smells head-on. Our cleaning methods effectively remove unwanted odors, leaving your bags and toys fresh and pleasant to use.<br><br>
  - Convenient and Reliable: With our bag and toy washing service, you can trust us to handle the cleaning process while you focus on other priorities.</p>
</div>

<div class="container fade-in">
  <img src="./img/toywash1.jpeg" alt="Avatar" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Our Bag and Toy Washing Process:</h1>
  <p class="para">1. Initial Evaluation: Our trained professionals assess your bags and toys to determine the appropriate cleaning methods and identify any specific cleaning requirements.<br><br>
  2. Pre-Treatment: We carefully inspect and pre-treat stains and spots using suitable cleaning agents to ensure maximum stain removal.<br><br>
  3. Washing and Cleaning: Your bags and toys are washed using gentle techniques and mild detergents to remove dirt and grime. We employ appropriate cleaning methods based on the materials and construction of each item.<br><br>
  4. Stain Removal: Stubborn stains are treated individually using specialized stain removal techniques to achieve the best possible results.<br><br>
  5. Thorough Rinsing: We ensure that all traces of detergent and cleaning agents are thoroughly rinsed out to avoid any residue.<br><br>
  6. Drying: Your items are dried using proper techniques and equipment to maintain their shape and integrity. We take extra care with delicate materials to prevent any damage.<br><br>
  7. Final Inspection: Each bag and toy undergoes a meticulous quality check to ensure they meet our high standards.<br><br>
  8. Packaging: Clean and refreshed, your bags and toys are carefully packaged and made ready for pickup or delivery.</p>
</div>
<button class="book-button fade-in" onclick="window.location.href='bookings.php'">Click here to book service</button>
</body>
<?php include_once "footer.php";
?>
</html>
