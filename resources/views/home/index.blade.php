<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Hotel</title>

    <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            height: 90vh;
            background: linear-gradient(
                rgba(43, 40, 40, 0.55),
                rgba(0,0,0,0.55)
            ),
            url("{{ asset('image/hero3.png') }}") center/cover no-repeat;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-content {
            max-width: 700px;
            padding: 40px;
        }
        .hero-content p{
            color: #ddd;
        }

        .hero h2 {
            font-size: 54px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            color: #ccc;
            font-family:'italic';
}

        .hero .btn {
            background-color: #28a745;
            color: #fff;
            padding: 15px 35px;
            border-radius: 30px;
            font-size: 18px;
            text-decoration: none;
            transition: 0.3s;
        }

        .hero .btn:hover {
            background-color: #218838;
        }

        .features {
            padding: 70px 20px;
            text-align: center;
            b background: linear-gradient(
                rgba(43, 40, 40, 0.55),
                rgba(0,0,0,0.55)
            ),
            url("{{ asset('image/hero.png') }}") center/cover no-repeat;

        }
        .features h3 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .feature-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-8px);
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>

<body class="main-layout">

@include('home.header')

<section class="hero">
    <div class="hero-content">
        <h2>Welcome to Smart Hotel</h2>
        <p>Luxury rooms, delicious food, and professional service made for your comfort</p>
      
    </div>
</section>

<section class="features">
    <h3>Why Choose Us</h3>
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="feature-box">
                    <h4>Luxury Rooms</h4>
                    <p>Modern rooms with free WiFi, TV, and daily cleaning.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="feature-box">
                    <h4>24 Hour Service</h4>
                    <p>Friendly staff available anytime for your needs.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="feature-box">
                    <h4>Comfort & Style</h4>
                    <p>Elegant rooms designed for maximum comfort and relaxation.</p>
                </div>
            </div>

        </div>
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

@include('home.footer')

</body>
</html>
