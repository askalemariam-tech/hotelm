<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/stylee.css">
    <style>
   body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f2f2f2;
}

header {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 15px 0;
}

header nav a {
    color: #fff;
    margin: 0 12px;
    text-decoration: none;
}

.container {
    max-width: 4000px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
}

.contact-grid {
    display: flex;
    gap: 30px;
}

.contact-form {
    flex: 1;
}   
.contact-info {
    flex: 1;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
}

.contact-form button {
    width: 100%;
    padding: 10px;
    background: #27ae60;
    color: #fff;
    border: none;
    cursor: pointer;
}
.contact-info {
    background: #f7f7f7;
    padding: 20px;
    border-radius: 6px;
}

.contact-info h3 {
    margin-top: 0;
    margin-bottom: 15px;
    color: #333;
    border-bottom: 2px solid #27ae60;
    padding-bottom: 5px;
}

.contact-info a {
    display: flex;
    align-items: center;
    p
    color: #27ae60;
    text-decoration: none;
    margin-bottom: 10px;
}

.map {
    margin-top: 20px;
}

.status {
    color: green;
    margin-bottom: 10px;
}
</style> 
</head>
<body class="contact-page">
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
    <?php
$status = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST["name"]);
    $email   = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name && $email && $message) {
        $status = "Message sent successfully";
    } else {
        $status = "Please fill all fields";
    }
}
?>
<div class="container">

<div class="contact-grid">

<div class="contact-form">
<h3>Send Message</h3>

<?php if ($status) { ?>
<div class="status"><?php echo $status; ?></div>
<?php } ?>

<form method="post">
<input type="text" name="name" placeholder="Full Name">
<input type="email" name="email" placeholder="Email">
<input type="phone" name="phone" placeholder="Phone Number">
<textarea name="message" rows="5" placeholder="Your Message"></textarea>
<button type="submit">Send</button>
</form>
</div>

<div class="contact-info">
<h3>Contact Information</h3>

<a href="tel:+251911234567">Phone: +251 911 234 567</a>
<a href="mailto:info@smarthotel.com">Email: info@smarthotel.com</a>
<a href="https://wa.me/251911234567">WhatsApp Chat</a>

<h3>Follow Us</h3>
<a href="#">Facebook</a>
<a href="#">Instagram</a>
<a href="#">Telegram</a>

<div class="map">
<iframe 
src="https://www.google.com/maps?q=Addis%20Ababa&output=embed"
width="100%" height="200" loading="lazy">
</iframe>
</div>
</div>

</div>

</div>

<footer style="background:#333;color:#fff;text-align:center;padding:10px;">
© 2026 Smart Hotel
</footer>
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