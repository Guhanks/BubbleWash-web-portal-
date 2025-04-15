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
.para{
  
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
.banner {
  position: relative;
  height: 500px; 
  background: linear-gradient(to right, rgba(0, 0, 0, 0.150), black), url('./img/bubble wash.jpg'); /* Replace with your banner image */
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
.container::after {
  content: "";
  clear: both;
  display: table;
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        #img2
        {
          height:300px;
          width:400px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<div class="banner">
  <div class="caption">About Us</div>
</div>

    <div class="container">
        <h1>Welcome to Bubble Wash Laundry Service!</h1>
        
        <p div class="para">
            At Bubble Wash Laundry Service, we are dedicated to providing top-notch laundry services to our valued customers. We understand that your time is precious, and laundry can be a time-consuming chore. That's why we are here to take care of all your laundry needs, so you can focus on the things that matter most to you.
        </p> 
        <p div class="para">
            Our team of experienced professionals ensures that your clothes are treated with the utmost care and attention. We use state-of-the-art equipment and high-quality detergents to deliver exceptional results. Whether it's dry cleaning, steam ironing, shoe wash, or toy bag wash, we've got you covered.        
Bubble Wash Laundry Service is a leading provider of professional laundry services. With years of experience and a commitment to customer satisfaction, we have built a strong reputation in the industry.
We understand the importance of clean and fresh laundry. That's why we go above and beyond to ensure that your clothes are treated with the utmost care and attention. Our team of skilled professionals uses state-of-the-art equipment and high-quality detergents to deliver exceptional results.
<br><br>At Bubble Wash Laundry Service, we take pride in our attention to detail and strive for excellence in every aspect of our service. From the moment you drop off your laundry to the time you pick it up, we guarantee a seamless and hassle-free experience.
</p>
<h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Satisfied Customers</h1>
<p div class="para">At Bubble Wash Laundry Service, customer satisfaction is our top priority. We take great pride in the positive feedback we receive from our valued customers.
  Here's what some of our satisfied customers have to say about our services:
   <br> <br>"Bubble Wash Laundry Service has been a game-changer for me. The quality of their cleaning is outstanding, and their attention to detail is impressive. I highly recommend them!" - Sarah
    <br><br>"I've tried several laundry services in the past, but none compare to Bubble Wash. They always deliver on time and exceed my expectations. Their customer service is exceptional!" - John
   <br><br> "Bubble Wash Laundry Service has made my life so much easier. I no longer have to worry about doing laundry on my own. Their service is reliable, efficient, and the results are impeccable." - Emily
  <br><br>"We are grateful to our customers for their trust and support. It is their satisfaction that drives us to continually improve and provide the best laundry service in town.</p>       
  <h1>Services and Rates</h1>
  <img src="./img/bubblewash.jpg" alt="Avatar" style="width:100%;">
        <table>
            <thead>
                <tr>
                    <th>Service Type</th>
                    <th>Cloth Type</th>
                    <th>Rate Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="6">Dry Clean</td>
                    <td>Shirt</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>Chudi</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>Saree</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>Pant</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>T-Shirt</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>Suit</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td rowspan="6">Steam Iron</td>
                    <td>Shirt</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>Chudi</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>Saree</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>Pant</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>T-Shirt</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td>Suit</td>
                    <td>Rs.10</td>
                </tr>
                <tr>
                    <td rowspan="3">Shoe Wash</td>
                    <td>Nylon</td>
                    <td>Rs.15</td>
                </tr>
                <tr>
                    <td>Wool</td>
                    <td>Rs.15</td>
                </tr>
                <tr>
                    <td>Jute</td>
                    <td>Rs.15</td>
                </tr>
                <tr>
                    <td rowspan="3">Toy Bag Wash</td>
                    <td>Nylon</td>
                    <td>Rs.15</td>
                </tr>
                <tr>
                    <td>Wool</td>
                    <td>Rs.15</td>
                </tr>
                <tr>
                    <td>Jute</td>
                    <td>Rs.15</td>
                </tr>
            </tbody>
        </table>        
        <p div class="para">
            Please note that these prices are subject to change and may vary depending on the specific requirements of your garments. For any additional information or inquiries, feel free to contact our friendly customer service team.
           <br> Experience the convenience and quality of Bubble Wash Laundry Service. 
           <br>Trust us with your laundry needs, and we'll ensure your clothes come back fresh, clean, and ready to wear!
        </p>
    </div>
</body>
<?php include_once "footer.php";
?>
</html>
