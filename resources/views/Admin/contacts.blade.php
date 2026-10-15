 <!-- or your admin master layout -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Contact Messages</title>
    <style>/* Admin Contacts Table */
h2 {
    color: #070f1b; /* Dark gray header */
    margin-bottom: 20px;
    font-weight: 600;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: #1a1818;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 30px;
}

table thead {
    background: #111827; /* Dark header */
    color: #0a0e13;
}

table th, table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
}

table tbody tr:nth-child(even) {
    background: #f9fafb; /* Light gray stripe */
}

table tbody tr:hover {
    background: #f3f4f6; /* Hover highlight */
}

.alert-success {
    background-color: #d1fae5;
    border: 1px solid #10b981;
    color: #065f46;
    padding: 10px 15px;
    margin-bottom: 20px;
    border-radius: 6px;
}

    </style>
</head>
<body>
  @extends('Admin.index')  
 
@section('content')
<h2>Contact Messages</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table border="1" cellpadding="10" cellspacing="0">
    <th>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Sent At</th>
        </tr>
    </th>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->message }}</td>
            <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
</body>
</html>