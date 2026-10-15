@extends('Admin.index')

@section('content')

<style>
.table_design {
    width: 100%;
    border-collapse: collapse;
    background: #ffffff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

.table_design th {
    background-color: #111827;
    color: #f9fafb;
    padding: 12px;
    border: 1px solid #e5e7eb;
    text-align: center;
}

.table_design td {
    padding: 12px;
    border: 1px solid #e5e7eb;
    text-align: center;
}

.table_design tr:nth-child(even) {
    background-color: #f9fafb;
}

.table_design tr:hover {
    background-color: #f3f4f6;
}

.btn-danger {
    background-color: #dc2626;
    color: #ffffff;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
}

.btn-danger:hover {
    background-color: #b91c1c;
}

.btn-warning {
    background-color: #f59e0b;
    color: #ffffff;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
}

.btn-warning:hover {
    background-color: #d97706;
}
</style>

<h2 style="margin-bottom:20px;">Rooms List</h2>

<table class="table_design">
    <thead>
        <tr>
            <th>Room Number</th>
            <th>Type</th>
            <th>Price</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
        <tr>
            <td>{{ $room->room_number }}</td>
            <td>{{ $room->type }}</td>
            <td>{{ $room->price }}</td>
            <td>
                <a onclick="return confirm('Are you sure you want to delete this room?');"
                   class="btn-danger"
                   href="{{ url('delete_room/'.$room->id) }}">
                   Delete
                </a>
            </td>
            <td>
                <a class="btn-warning"
                   href="{{ url('update_room/'.$room->id) }}">
                   Update
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
