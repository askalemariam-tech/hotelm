<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART HOTEL</title>
     <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #fff8f0;
            color: #333;
        }
        .navbar a {
    float: right;
    text-align: center;
    display: block;
    font-size: 17px;
    font-family: arial;
    color:  #c04040ff;
    text-decoration: none;
    padding: 14px 16px;
    font-weight: bold;
    transition:  color 0.4s ease-in-out;
}

.navbar a.icon {
    display: none;
}
.navbar a:hover {
    border-bottom: 1px solid rgb(29, 173, 125);
    border-radius: 20px;
    color:  #ff7200;
}
        .navbar h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 2.5rem;
            margin: 0;
            color: #d68f8f;
        }
        .gallery {
            padding: 50px;
            text-align: center;
        }

        .gallery h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 3rem;
            margin-bottom: 40px;
            color: #d68f8f;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            perspective: 1200px;
        }

        .gallery-grid img {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: cover;
            border-radius: 20px;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            transform-style: preserve-3d;
            cursor: pointer;
            margin: 10px 0;
            padding: 5px;
        }
        .gallery-grid img:hover {
            box-shadow: 0 20px 40px rgba(214,143,143,0.5);
            transform: scale(1.05);
            
        }
        .foot {
            text-align: center;
            padding: 20px;
            background-color: #ffe6e6;
            margin-top: 50px;
        }

        .foot h3 {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            color: #d68f8f;
        }@media screen and (max-width: 600px) {
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

    </style>
</head>

<body>

@include('home.header') 

        <?php
echo '<section class="gallery" id="gallery">

       <h2>Our Gallery</h2>
       <div class="gallery-grid">
     
    <img src="css/gallery1.jpg" alt="Gallery 1">
    <img src="css/gallery2.jpg" alt="Gallery 2">
    <img src="css/gallery3.jpg" alt="Gallery 3">
    <img src="css/gallery4.jpg" alt="Gallery 4">
    <img src="css/gallery5.jpg" alt="Gallery 5"
    <img src="css/gallery6.jpg" alt="Gallery 6">
    <img src="css/kkkk.jpg" alt="Gallery 7">
    <img src="css/eee.png" alt="Gallery 8">
    <img src="css/mmmm.jpg" alt="Gallery 9">
    <img src="css/forr.jpg" alt="Gallery 10">
    <img src="css/forw.jpg" alt="Gallery 11">
    <img src="css/fors.jpg" alt="Gallery 12">
    <img src="css/ddd.jpg" alt="Gallery 13">
    <img src="css/ssss.jpg" alt="Gallery 14">
    <img src="css/tttt.jpg" alt="Gallery 15">
    <img src="css/banner1.jpg" alt="Gallery 16">
  <img src="css/banner2.jpg" alt="Gallery 17">
  <img src="css/banner3.jpg" alt="Gallery 18">
  <img src="css/forn.jpg" alt="Gallery 19">
  <img src="css/forqq.jpg" alt="Gallery 20">
  <img src="css/forgg.jpg" alt="Gallery 21">
        </div>
    </section>';
        ?>
    <script>
        const images = document.querySelectorAll('.gallery-grid img');

        images.forEach(img => {
            img.addEventListener('mousemove', (e) => {
                const rX = (e.offsetY - img.offsetHeight / 2) / (img.offsetHeight / 2) * 15;
                const rY = (e.offsetX - img.offsetWidth / 2) / (img.offsetWidth / 2) * 15;
            });

            img.addEventListener('mouseleave', () => {
                img.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
                img.style.boxShadow = 'none';
            });
        });
    </script>

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
@include('home.footer')
</body>
</html>
