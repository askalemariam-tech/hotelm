<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   
      <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
        }
        .dropdown-menu a {
            color: #000;
        }
        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
        .min-vh-100 {
            min-height: 100vh;
        }
        .overflow-auto {
            overflow: auto;
        }
        .col-2 {
            width: 16.666667%;
        }
        .col-10 {
            width: 83.333333%;
        } 
        </style>
</head>
<body>

<nav class="navbar navbar-light bg-light px-3 shadow-sm">
  <span class="navbar-brand mb-0 h1">Smart Hotel</span>

  <div class="dropdown ms-auto">
      <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          {{ Auth::user()->name ?? 'admin' }}
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
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
            <a href="{{ route('create_room') }}" class="text-white d-block mb-2">Add Rooms</a>
            <a href="{{ route('book_room') }}" class="text-white d-block mb-2">Book Room</a>
            <a href="{{ route('view_room') }}" class="text-white d-block mb-2">View Rooms</a>
            <a href="{{ route('users') }}" class="text-white d-block mb-2">View Users</a>
            <a href="{{ route('contacts') }}" class="text-white d-block mb-2">View Contacts</a>
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
