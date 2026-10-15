@extends('Admin.index')

@section('content')
<h2 style="text-align:center;">Registered Users</h2>

<table class="users-table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach
</table>

<style>
.users-table{
    width: 80%;
    margin: auto;
    border-collapse: collapse;
}
.users-table th,
.users-table td{
    border: 1px solid #000;
    padding: 10px;
    text-align: center;
}
.users-table th{
    background: #f2f2f2;
}
</style>
@endsection
