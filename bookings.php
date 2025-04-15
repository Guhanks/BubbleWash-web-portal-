<?php
$servername = "localhost";
$dbname = "project";
$username = "root";
$password = "";

// Create a new connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the latest booking ID from the database and increment it
$query = "SELECT MAX(booking_id) AS max_booking_id FROM booking";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$bookingId = $row['max_booking_id'];
if ($bookingId) {
  $bookingId = substr($bookingId, 2); // Remove the 'BK' prefix
  $bookingId = intval($bookingId); // Convert to integer
  $bookingId++; // Increment
  $bookingId = 'BK' . str_pad($bookingId, 3, '0', STR_PAD_LEFT); // Add the 'BK' prefix and zero-padding
} else {
  $bookingId = 'BK001'; // Initial booking ID
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $customerName = $_POST['customer_name'];
  $contact = $_POST['contact'];
   $address = $_POST['cus_address'];
  $serviceType = $_POST['service_type'];
  $clothType = $_POST['cloth_type'];
  $units = $_POST['units'];
  $weightCombination = $_POST['weight_combination'];
  $exactWeight = $_POST['exact_weight'];

 // Validate the exact weight based on the weight combination
 if ($weightCombination == 'less_than_10') {
  if ($exactWeight >= 10) {
    // Invalid input
    echo "Invalid input. Please enter a value less than 10.";
    exit;
  }
} elseif ($weightCombination == 'more_than_10') {
  if ($exactWeight <= 10) {
    // Invalid input
    echo "Invalid input. Please enter a value greater than 10.";
    exit;
  }
}
if (empty($_POST["customer_name"])) {
  $customerName_err = "Username is required";
} else {
  $customerName = test_input($_POST["customer_name"]);
  // Check if username contains only letters and numbers
  if (!preg_match("[a-zA-Z]", $customerName)) {
      $customerName_err = "Only letters and numbers are allowed";
  }
}
// Validate phone number
if (empty($_POST["contact"])) {
  $contact_err = "Phone number is required";
} else {
  $contact = test_input($_POST["contact"]);
  // Check if phone number is valid
  if (!preg_match("/^[0-9]{10}$/", $contact)) {
      $contact_err = "Invalid phone number";
  }
}
// Calculate the price based on service type and cloth type
  $price = 0;
  if (($serviceType == 'dry_clean' || $serviceType == 'steam_iron') && ($clothType == 'shirt' || $clothType == 'tshirt' || $clothType == 'saree' || $clothType == 'chudi' || $clothType == 'suit_pant')) {
    $price = 100; // Price for dry clean and steam iron with cloth types shirt, tshirt, saree, chudi, suit-pant
  } elseif( ($serviceType == 'bag_toy_wash' || $serviceType == 'shoe_wash') && ($clothType == 'nylon' || $clothType == 'woolen' || $clothType == 'jute')) {
    $price = 50; // Price for bag and toy wash with cloth types nylon, woolen, jute
  }
  // Calculate the discount based on weight
  $discount = 0;
  if ($weightCombination == 'less_than_10') {
    $discount = $price * $exactWeight * 0.05; // 5% discount for less than 10 kg
  } elseif ($weightCombination == 'more_than_10') {
    $discount = $price * $exactWeight * 0.2; // 20% discount for more than 10 kg
   }

  // Calculate the total price
  $totalPrice = $price * $exactWeight - $discount;

  $pickupDate = $_POST['pickup_date'];
  $deliveryDate = $_POST['delivery_date'];

  // Prepare the INSERT statement
  $query = "INSERT INTO booking (booking_id, customer_name,contact,cus_address,service_type, cloth_type,units, weight_combination, exact_weight, price, discount, total_price, pickup_date, delivery_date)
            VALUES ('$bookingId', '$customerName', '$contact', '$address', '$serviceType', '$clothType', '$units','$weightCombination', $exactWeight, $price, $discount, $totalPrice, '$pickupDate', '$deliveryDate')";

  // Execute the INSERT statement
      // Execute the INSERT statement
if (mysqli_query($conn, $query)) {
  echo "Record inserted successfully.";
  
  echo "<script>
  // Clear form fields
  document.getElementById('customer_name').value = '';
  document.getElementById('address').value = '';
  document.getElementById('cus_address').value = '';
  document.getElementById('service_type').value = '';
  document.getElementById('cloth_type').value = '';
  document.getElementById('units').value = '';
  document.getElementById('weight_combination').value = '';
  document.getElementById('exact_weight').value = '';
  document.getElementById('pickup_date').value = '';
  document.getElementById('delivery_date').value = '';
  document.getElementById('price').value = '';
  document.getElementById('discount').value = '';
  document.getElementById('total_price').value = '';
  </script>";
  echo '<script>
          setTimeout(function() {
              window.location.href = "redirect2.php";
          }, 3000); // 3000 milliseconds = 3 seconds
      </script>';
  exit;
} else {
  $insertionMessage = "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
}
  // Close the connection
  mysqli_close($conn);
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Booking Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input[type="text"],
    input[type="number"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 14px;
      margin-bottom: 16px;
    }

    input[type="radio"] {
      margin-right: 8px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  <script type="text/javascript">
    function updateClothTypes() {
      var serviceType = document.getElementById("service_type").value;
      var clothTypeSelect = document.getElementById("cloth_type");
      clothTypeSelect.innerHTML = ""; // Clear the existing options

      if (serviceType === "dry_clean" || serviceType === "steam_iron") {
        var clothTypes = ["shirt", "tshirt", "saree", "chudi", "suit_pant"];
      } else if (serviceType === "bag_toy_wash" || serviceType === "shoe_wash") {
        var clothTypes = ["nylon", "woolen", "jute"];
      }

      for (var i = 0; i < clothTypes.length; i++) {
        var option = document.createElement("option");
        option.value = clothTypes[i];
        option.text = clothTypes[i].charAt(0).toUpperCase() + clothTypes[i].slice(1);
        clothTypeSelect.appendChild(option);
      }

      updateCalculatedValues();
    }

    function updateCalculatedValues() {
      var priceInput = document.querySelector("input[name='price']");
      var discountInput = document.querySelector("input[name='discount']");
      var totalPriceInput = document.querySelector("input[name='total_price']");
      var serviceType = document.getElementById("service_type").value;
      var clothType = document.getElementById("cloth_type").value;
      var weightCombination = document.querySelector("input[name='weight_combination']:checked").value;
      var exactWeight = parseFloat(document.querySelector("input[name='exact_weight']").value);

      var price = 0;
      if ((serviceType === 'dry_clean' || serviceType === 'steam_iron') && (clothType === 'shirt' || clothType === 'tshirt' || clothType === 'saree' || clothType === 'chudi' || clothType === 'suit_pant')) {
        price = 10; // Price for dry clean and steam iron with cloth types shirt, tshirt, saree, chudi, suit-pant
      } else if ((serviceType === 'bag_toy_wash' || serviceType === 'shoe_wash') && (clothType === 'nylon' || clothType === 'woolen' || clothType === 'jute')) {
        price = 6; // Price for bag and toy wash with cloth types nylon, woolen, jute
      }

      var discount = 0;
      if (weightCombination === 'less_than_10') {
        discount = price * exactWeight * 0.05; // 5% discount for less than 10 kg
      } else if (weightCombination === 'more_than_10') {
        discount = price * exactWeight * 0.2; // 20% discount for more than 10 kg
      }

      var totalPrice = price * exactWeight - discount;

      priceInput.value = price.toFixed(2);
      discountInput.value = discount.toFixed(2);
      totalPriceInput.value = totalPrice.toFixed(2);
    }
    window.addEventListener("load", function () {
      // Clear form fields
      document.getElementById("customer_name").value = "";
      document.getElementById("contact").value = "";
      document.getElementById("cus_address").value = "";
      document.getElementById("service_type").value = "";
      document.getElementById("cloth_type").value = "";
      document.getElementById("units").value = "";
      document.getElementById("weight_combination").value = "";
      document.getElementById("exact_weight").value = "";
      document.getElementById("pickup_date").value = "";
      document.getElementById("delivery_date").value = "";
      document.getElementById("price").value = "";
      document.getElementById("discount").value = "";
      document.getElementById("total_price").value = "";
    });
    function validateDates() {
  var pickupDate = new Date(document.getElementById("pickup_date").value);
  var deliveryDate = new Date(document.getElementById("delivery_date").value);
  var today = new Date();

  if (pickupDate < today) {
    alert("Pickup date should be greater than today's date.");
    return false;
  }
  if (deliveryDate< today) {
    alert("deliveryDate date should be greater than today's date.");
    return false;
  }
  if (pickupDate >= deliveryDate) {
    alert("Delivery date should be greater than the pickup date.");
    return false;
  }

  return true;
}

  </script>
</head>
<body>
  <h1>Booking Form</h1>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateDates();">
    <label for="customer_name">Customer Name:</label>
    <input type="text" name="customer_name" required><br>
    
    <label for="contact">Contact Number:</label>
    <input type="text" name="contact" required><br>

    <label for="cus_address">PICKUP AND DELIVERY ADDRESS:</label>
    <input type="text" name="cus_address" required><br>

    <label for="service_type">Service Type:</label>
    <select name="service_type" id="service_type" onchange="updateClothTypes()" required>
      <option value="dry_clean">Dry Clean</option>
      <option value="steam_iron">Steam Iron</option>
      <option value="bag_toy_wash">Bag and Toy Wash</option>
      <option value="shoe_wash">Shoe Wash</option>
    </select><br>

    <label for="cloth_type">Cloth Type:</label>
    <select name="cloth_type" id="cloth_type" onchange="updateCalculatedValues()" required></select><br>
    
    <label for="customer_name">No Of Units</label>
    <input type="text" name="units" required><br>

    <label for="weight_combination">Weight Combination:</label>
    <input type="radio" name="weight_combination" value="less_than_10" onchange="updateCalculatedValues()" required> Less than 10 kg
    <input type="radio" name="weight_combination" value="more_than_10" onchange="updateCalculatedValues()" required> More than 10 kg<br>
<div class="exactweight">
    <label for="exact_weight">Exact Weight:</label>
    <input type="number" name="exact_weight" onchange="updateCalculatedValues()" required ><br>
  </div>
    <label for="pickup_date">Pickup Date:</label>
    <input type="date" name="pickup_date" required><br>

    <label for="delivery_date">Delivery Date:</label>
    <input type="date" name="delivery_date" required><br>

    <label for="price">Price:</label>
    <input type="number" name="price" readonly><br>

    <label for="discount">Discount:</label>
    <input type="number" name="discount" readonly><br>

    <label for="total_price">Total Price:</label>
    <input type="number" name="total_price" readonly><br>

    <input type="submit" value="Submit">
  </form>

</body>
</html>
