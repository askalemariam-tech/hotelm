<html>
    <head>
<title>Add Room</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container">
    <h2>Update Room</h2>



    <form action="{{url('edit_room', $room->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <label>Room Number</label>
                <input type="text" name="room_number" value="{{ $room->room_number }}" >
        <br><br>
        <label>Room Type</label>
       <tr>
        <input type="text" name="type" value="{{ $room->type }}"    ><br><br>
        <label>Price</label>
        <input type="number" name="price" step="0.01" value="{{ $room->price }}" ><br><br>
        <button type="submit" class="btn btn-primary">update room</button>
    </form>

    <a href="">Back to Rooms</a>
</div>

</body>
</html>