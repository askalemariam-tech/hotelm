<!DOCTYPE html>
<html>
<head>
    <title>Book Room</title>
    <style>
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        font-family: Arial, sans-serif;
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px;
    }

    /* Buttons */
    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #0056b3;
    }
    .btn_secondary {
        background-color: #6c757d;
    }

    /* Spacing */
    .form-buttons {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        flex-wrap: wrap;
    }

    @media (max-width: 640px) {
        .container {
            padding: 20px;
            margin: 20px;
        }

        .form-buttons {
            flex-direction: column;
        }
    }
    </style>
</head>
<body>
   
<div class="container">
    <h2>Book Room</h2>

    <form method="POST" action="{{ url('store') }}">
        @csrf

        <label>Guest Name</label>
        <input type="text" name="guest_name" required>

        <label>Guest Email</label>
        <input type="email" name="guest_email" required>

        <label>Guest Phone</label>
        <input type="text" name="guest_phone" required>

        <label>Select Room</label>
        <select name="room_id" required>
            @foreach($rooms as $room)
                <option value="{{ $room->id }}">
                    Room {{ $room->room_number }} - {{ $room->type }} - ${{ $room->price }}
                </option>
            @endforeach
        </select>

        <label>Check-in Date</label>
        <input type="date" name="check_in" required>

        <label>Check-out Date</label>
        <input type="date" name="check_out" required>

        <div class="form-buttons">
            <button type="submit" class="btn">Book Room</button>
            <a href="{{ url()->previous() }}" class="btn btn_secondary">Back</a>
        </div>
    </form>
</div>

</body>
</html>

