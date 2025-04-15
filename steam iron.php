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
  background: linear-gradient(to right, rgba(0, 0, 0, 0.150), black), url('./img/steamiron.jpg');
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
  padding: 30px;
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
  <div class="caption">Steam Iron</div>
</div>

<h2></h2>

<div class="container fade-in">
  <img src="./img/steam ironing.jpg" alt="Avatar" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">steam iron Service:</h1>
  <p class="para">At Bubble Wash Laundry Service, we recognize the importance of providing specialized care for your garments. Our dedicated steam engine service ensures that your delicate fabrics, intricate designs, and elegant attire receive the utmost attention and preservation.</p>
</div>

<div class="container darker fade-in">
  <img src="./img/steam iron.jpg" alt="Avatar" class="right" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Why Choose Steam Iron service?</h1>
  <p class="para">-Perfectly Pressed Clothes: Our skilled team of experts uses advanced steam ironing techniques to give your clothes a polished and crisp appearance.
     We take extra precautions to avoid any damage or discoloration, ensuring your clothes retain their quality. <br><br>   
-Gentle on Fabrics: We understand that different fabrics require different care. Our steam ironing process is gentle on all types of fabrics, from delicate silk to sturdy cotton.<br><br>
-Efficient and Time-Saving: Our steam iron service is designed to save you time and effort. You can drop off your garments at our location, and we'll take care of the steam ironing process with utmost care and precision.<br><br></p>
</div>

<div class="container fade-in">
  <img src="./img/steamironing.jpg" alt="Avatar" style="width:100%;">
  <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Our Steam Iron Process:</h1>
  <p class="para">
 - Inspection and Preparation: When you bring your garments for our steam iron service, our experts carefully inspect each item to identify any special requirements or areas that need attention. This step helps in loosening the fibers and preparing the fabric for the steam ironing process.<br><br>
-Steam Ironing: We use advanced steam ironing equipment and techniques to gently remove wrinkles and creases from your garments.<br><br>
-Final Touches: After the steam ironing is complete, our experts inspect each garment to ensure it meets our quality standards. Any remaining wrinkles or imperfections are carefully addressed before moving to the next step.<br><br>
-Packaging and Delivery: Once the steam ironing process is finished, your garments are neatly folded or hung to maintain their freshly pressed appearance.<br><br>
  </p>
</div>

<button class="book-button fade-in" onclick="window.location.href='bookings.php'">Click here to book service</button>
</body>
<?php include_once "footer.php";
?>
</html>
