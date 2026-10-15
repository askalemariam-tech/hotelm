<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Rooms</title>
    <style>
        body {
            background-color:rgba(0,0,0,0.8);
        }
        .navbar h2 {
    color: #f3b7b7;
    text-align: center;
        
    font-family: 'Great Vibes', cursive;
     font-size: 3rem;
    padding-top: 10px;
    font-weight: 900;
    line-height: 50px;
    margin: 0;}
    .navbar h3 {
    margin: 0;
     font-family: 'Great Vibes', cursive;
    color: rgb(174, 240, 218);
    font-weight: 400;
    letter-spacing: 1.2px;
    }
.navbar {
    overflow: hidden;
    
    padding: 10px;
}
.navbar a {
    float: right;
    text-align: center;
    display: block;
    font-size: 17px;
    font-family: arial;
    color: #fff;
    text-decoration: none;
    padding: 14px 16px;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

.navbar a.icon {
    display: none;
}
.navbar a:hover {
    border-bottom: 1px solid rgb(29, 173, 125);
    border-radius: 20px;
    color:  #ff7200;
}
@media screen and (max-width: 600px) {
    .navbar a:not(:first-child) {display: none;}
    .navbar a.icon {
      float: right;
      display: block;
    }
  }
@media screen and (max-width: 600px) {
    .navbar.responsive {
        position: relative;
    }
    .navbar.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .navbar.responsive a {
      float: none;
      display: block;
      text-align: center;
    }
    }
            .container {
                max-width: 1200px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
            }
            h2 {
                text-align: center;
                margin-bottom: 30px;
            }
            .room-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }
            .room-card {
                border: 1px solid #ddd;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                text-align: center;
            }
            .room-card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
            .room-card h3 {
                margin: 15px 0 10px 0;
            }
            .room-card .price {
                color: #28a745;
                font-weight: bold;
                margin-bottom: 15px;
                
  }
   .container:hover {
        background-color: #f0f0f0;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: all 0.3s ease-in-out;
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
<section class="container">
    <h2>Our Rooms</h2>

    <div class="room-grid">
        <?php
        $rooms = [
            [
                "title" => "Deluxe Suite",
                "price" => "$200 / night",
                "img"   => "css/ddd.jpg"
            ],
            [
                "title" => "Family Room",
                "price" => "$150 / night",
                "img"   => "css/forgg.jpg"
            ],
            [
                "title" => "double Room",
                "price" => "$90 / night",
                "img"   => "css/forn.jpg"
            ],
            [
                "title" => "Executive Suite",
                "price" => "$250 / night",
                "img"   => "css/kkkk.jpg"
            ],
            [
                "title" => "Presidential Suite",
                "price" => "$500 / night",
                "img"   => "css/forn.jpg"
            ],
            [
                "title" => "Honeymoon Suite",
                "price" => "$300 / night",
                "img"   => "css/forgg.jpg"
            ],
            [
                "title" => "Budget Room",
                "price" => "$70 / night",
                "img"   => "css/ddd.jpg"
            ],
            [
                "title" => "Luxury Villa",
                "price" => "$400 / night",
                "img"   => "css/kkkk.jpg"
            ],
            [
                "title" => "Business Class Room",
                "price" => "$180 / night",
                "img"   => "css/forn.jpg"
            ],
            [
                "title" => "Ocean View Room",
                "price" => "$220 / night",
                "img"   => "css/forgg.jpg"
            ],
            [
                "title" => "single Room",
                "price" => "$210 / night",
                "img"   => "css/ddd.jpg"
            ],
            [
                "title" => "Studio Apartment",
                "price" => "$160 / night",
                "img"   => "css/room1.jpg"
            ],
            [
                "title" => "Cottage",
                "price" => "$130 / night",
                "img"   => "css/room2.jpg"
            ],
            [
                "title" => "Cabin",
                "price" => "$120 / night",
                "img"   => "css/room3.jpg"
            ],
            [
                "title" => "Penthouse Suite",
                "price" => "$600 / night",
                "img"   => "css/room4.jpg"
            ],
            [
                "title" => "Garden View Room",
                "price" => "$140 / night",
                "img"   => "css/room5.jpg"
            ]
        ];
        
        foreach ($rooms as $room) {
            echo "
            <div class='room-card'>
                <img src='{$room['img']}' alt='{$room['title']}'>
                <h3>{$room['title']}</h3>
                <p class='price'>Price: {$room['price']}</p>
            </div>
            ";
        }
        ?>
    </div>
</section>

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
