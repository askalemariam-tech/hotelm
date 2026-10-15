
@extends('layouts.app')
@section('content')
<div class="container" style="max-width:500px;">
    <h3>user</h3>

    <table class="table table-bordered mt-3">
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>User</td>
        </tr>
    </table>

    <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm">Back</a>
</div>
@endsection