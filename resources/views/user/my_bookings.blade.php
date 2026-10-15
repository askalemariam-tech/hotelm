<!DOCTYPE html>
<html>
    <head><style>
/* Table container */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    font-family: Arial, sans-serif;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Table headers */
table th {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    text-align: left;
}

/* Table cells */
table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

/* Alternate row colors */
table tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Hover effect */
table tr:hover {
    background-color: #f1f1f1;
}

/* Headline */
h2 {
    font-family: 'Arial', sans-serif;
    color: #333;
    margin-top: 20px;
}

/* Back button */
.btn {
    display: inline-block;
    padding: 8px 16px;
    margin-top: 15px;
    background-color: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #5a6268;
}
</style>

</head>
<body>
<h2>My Bookings</h2>

<table border="1">
    <tr>
        <th>Room</th>
        <th>Check-in</th>
        <th>Check-out</th>
        <th>Status</th>
    </tr>

    @foreach($bookings as $booking)
    <tr>
        <td>{{ $booking->room->room_number }}</td>
        <td>{{ $booking->check_in }}</td>
        <td>{{ $booking->check_out }}</td>
        <td>{{ $booking->status }}</td>
    </tr>
    @endforeach
</table>
<a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm">Back</a>
</body>
</html>