<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-light bg-light px-3 shadow-sm">
  <span class="navbar-brand mb-0 h1">Smart Hotel</span>
  <div class="dropdown ms-auto">
      <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          {{ Auth::user()->name ?? 'user' }}
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
          <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item" style="background:none; border:none; padding:0; cursor:pointer;">
                      Logout
                  </button>
              </form>
          </li>
      </ul>
  </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-2 bg-dark text-white p-3 min-vh-100 overflow-auto">
            <h5 class="text-center">Menu</h5>
            <hr>

           {{--<a href="{{ route('users.index') }}" class="btn btn-primary mb-2 w-100">Users</a>--}}
            <a href="{{ route('book_room') }}" class="text-white d-block mb-2">Book Room</a>
              <a href="{{ route('user.my_bookings') }}" class="text-white d-block mb-2">My Bookings</a>
        </div>

        <!-- Main Content -->
        <div class="col-10 p-4">
            @yield('content')
          
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
