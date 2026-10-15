<header class="header">
<div class="logo">
        <img src="{{ asset('css/logo2.png') }}" alt="Hotel Logo" />
    </div>  
    <div class="navbar" id="myNavbar">
        <h2>SMART HOTEL</h2>
        <h3>ስማርት ሆቴል</h3>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

        <a href="{{ route('register') }}" class="btn btn-primary">REGISTER</a>
        <a href="{{ route('login') }}" class="btn btn-success">LOGIN</a>

        <a href="{{ route('contact') }}">CONTACT US</a>
        <a href="{{ route('blog') }}">BLOG</a>
        <a href="{{ route('gallery') }}">GALLERY</a>
        <a href="{{ route('room') }}">OUR ROOM</a>
        <a href="{{ route('about') }}">ABOUT</a>
        <a href="{{ route('index') }}">HOME</a>
    </div>
</header>

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

<style>
.navbar {
    overflow: hidden;
    background-color:white;
}

.navbar a {
    float: right;
    display: block;
    color:black;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 16px;
}

.navbar h2 {
    color: #501414;
    text-align: left;
    font-size: 32px;
    margin: 0;
}

.navbar h3 {
    text-align: left;
    color: #093f2d;
    margin: 0;
}

.navbar a:hover {
    background-color: #ddd;
    color: #000;
}

.navbar .icon {
    display: none;
}

@media screen and (max-width: 600px) {
    .navbar a:not(:first-child) {
        display: none;
    }
    .navbar a.icon {
        float: right;
        display: block;
    }
}

@media screen and (max-width: 600px) {
    .navbar.responsive {
        position: relative;
    }
    .navbar.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
}
.header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    background-color: white;
}
.logo img{
    height: 80px;
    width: 120px;
}

</style>
