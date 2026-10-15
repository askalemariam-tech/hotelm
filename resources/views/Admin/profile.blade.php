
@extends('Admin.index')

@section('content')
<div class="container" style="max-width:500px;">
    <h3>Admin Profile</h3>

    <table class="table table-bordered mt-3">
        <tr>
            <th>Name</th>
            <td>{{ $admin->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $admin->email }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>Administrator</td>
        </tr>
    </table>

    <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm">Back</a>
</div>
@endsection
