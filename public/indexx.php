<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Hotel </title>
    <link rel="stylesheet" href="css/stylee.css">

</head>
<body class="main-layout">
    
            <div class="navbar" id="myNavbar">
                  <h2 >SMART HOTEL</h2> 
                  <h3> ስማርት ሆቴል </h3>
 
                    <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick= "myFunction()">&#9776;</a>
                    <a class="btn btn-primary" href="contact.php">REGISTER</a>
                    <a class="btn btn-success" href="contact.php">LOGIN</a>
                    <a href="contact.php">CONTACT US</a>
                      <a href="blog.php">Blog</a>
                     <a href="gallery.php">GALLERY</a>
                    <a href="room.php">OUR ROOM</a>
                    <a href="about.php">ABOUT</a>
                    <a href="index.php">HOME</a>
            </div> 
          <div class="container">
    <h2>Book Room</h2>

    <form method="POST" action="{{url('store')}}">
        @csrf

        <label>Guest Name</label>
        <input type="text" name="guest_name" required><br><br>

        <label>Select Room</label>
        <select name="room_id" required>
          
            @foreach($rooms as $room)
                <option value="{{ $room->id }}">
                    Room {{ $room->room_number }} - {{ $room->type }} - ${{ $room->price }}
                </option>
            @endforeach
            
        </select><br><br>

        <label>Check-in Date</label>
        <input type="date" name="check_in" required><br><br>

        <label>Check-out Date</label>
        <input type="date" name="check_out" required><br><br>

        <button type="submit">Book Room</button>
    </form>

    <a href="/rooms">Back to Rooms</a>
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