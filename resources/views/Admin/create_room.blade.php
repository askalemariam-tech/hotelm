
@extends('Admin.index')

@section('content')

<style>
.container {
    max-width: 500px;
    margin: 30px auto;
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
input[type="number"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 14px;
}

.btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}

.btn-secondary {
    background-color: #6c757d;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

.form-buttons {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    flex-wrap: wrap;
}
</style>

<div class="container">
    <h2>Add Room</h2>

    <form action="{{ url('add_room') }}" method="post">
        @csrf

        <label>Room Number</label>
        <input type="text" name="room_number" required>

        <label>Room Type</label>
        <input type="text" name="type" required>

        <label>Price</label>
        <input type="number" name="price" step="0.01" required>

        <div class="form-buttons">
            <button type="submit" class="btn">Save Room</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>

@endsection
