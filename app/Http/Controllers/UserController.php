<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Booking;

class UserController extends Controller
{
    //
 public function dashboard()
{
    $user = auth()->user();
    return view('user.dashboard', compact('user'));
}

 public function profile()
{
    $user = Auth::user();
    return view('user.profile', compact('user'));
}
  public function myBookings() {
    // Get bookings for the currently logged-in user
   $bookings = Booking::where('user_id', auth()->id())->with('room')->get();
    $bookings = Booking::where('user_id', auth()->id())
                       ->with('room') // eager load room relationship
                       ->get();

    return view('user.my_bookings', compact('bookings'));
}
public function my_booking() {
    return view('user.my_bookings');
}
}