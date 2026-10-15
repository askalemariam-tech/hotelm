<?php
$hotelName = "Smart Hotel";

$description = "Smart Hotel is a modern hospitality destination designed to deliver comfort, elegance, and exceptional service. We combine contemporary design with smart solutions to ensure every guest enjoys a seamless and memorable stay.";

$mission = "To provide outstanding hospitality through personalized service, modern facilities, and a strong commitment to guest satisfaction.";

$vision = "To become a leading smart hotel, recognized for innovation, comfort, and excellence in service at both local and regional levels.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | <?php echo $hotelName; ?></title>
    <link rel="stylesheet" href="css/stylee.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background:
            linear-gradient(to top, rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
            url("css/galleryy.avif");
           background-position: center;
           background-size: cover;
            background-repeat: no-repeat;
          min-height: 100vh;
            margin: 0;
            padding: 0;
          
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
        }
        h1, h2 {
            color: #2c2c2c;
        }
        p {
            line-height: 1.7;
            color: #555555;
        }
    </style>
</head>
<body>
   <div class="navbar" id="myNavbar">
                  <h2 >SMART HOTEL</h2> 
                  <h3> ስማርት ሆቴል </h3>
 
                    <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick= "myFunction()">&#9776;</a>
                     <a href="contact.php">CONTACT US</a>
                     <a href="gallery.php">GALLERY</a>
                    <a href="room.php">OUR ROOM</a>
                    <a href="about.php">ABOUT</a>
                    <a href="index.php">HOME</a>
            </div>  

<div class="container">
    <h1>About <?php echo $hotelName; ?></h1>

    <p><?php echo $description; ?></p>

    <h2>Our Mission</h2>
    <p><?php echo $mission; ?></p>

    <h2>Our Vision</h2>
    <p><?php echo $vision; ?></p>
</div>
<script>
        function myFunction() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>

</body>
</html>
