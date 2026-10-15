@extends( 'layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <h2>SMART HOTEL</h2>
    <p>Welcome to the Smart Hotel Admin Panel.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card p-3 shadow-sm">
                <h4>Total Rooms</h4>
                <p>120</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3 shadow-sm">
                <h4>Booked Rooms</h4>
                <p>45</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3 shadow-sm">
                <h4>Total Users</h4>
                <p>200</p>
            </div>
        </div>
    </div>
@endsection
