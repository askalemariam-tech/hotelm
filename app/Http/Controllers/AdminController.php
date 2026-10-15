<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Booking; 
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
           $usertype = Auth()->user()->usertype;
           if ($usertype == 'user'){
            return view('dashboard');
           }
          else if ($usertype == 'admin'){
            return view('Admin.index');
           }
           else {
            return redirect()->back();
           }
      }
}
    public function home()
    {
        $rooms = Room::all();
        return view('home.index', compact('rooms'));
    }
    public function create_room()
    {
        return view('Admin.create_room');
    }
   public function add_room(Request $request)
    {
        $data = new Room;
        $data->room_number=$request->room_number;
       $data->type=$request->type;
         $data->price=$request->price;
         $data->save();
         return redirect()->back();
          // $data->is_available=$request->room_number;
    }
         public function book_room()
    {
        return view('Admin.book_room', [
            'rooms' => Room::where('is_available', true)->get()
        ]);
    }
   public function store(Request $request)
{
    $request->validate([
        'guest_name' => 'required',
        'guest_email' => 'required|email',
        'guest_phone' => 'required',
        'room_id' => 'required',
        'check_in' => 'required|date',
        'check_out' => 'required|date',
    ]);

    Booking::create([
        'guest_name' => $request->guest_name,
        'guest_email' => $request->guest_email,
        'guest_phone' => $request->guest_phone,
        'room_id' => $request->room_id,
        'check_in' => $request->check_in,
        'check_out' => $request->check_out,
        'user_id' => auth()->id(), // required for your table
    ]);

    Room::where('id', $request->room_id)
        ->update(['is_available' => false]);

    return redirect()->back();
}

    public function view_room()
    {
        $rooms = Room::all();
        return view('Admin.view_room', compact('rooms'));
    }
    public function delete_room($id)
    {
        $room = Room::find($id);
        if ($room) {
            $room->delete();
        }
        return redirect()->back();
    }
    public function update_room($id)
    {

        $room = Room::find($id);
        return view('Admin.update_room', compact('room'));
        return redirect()->back();
    }
    public function edit_room(Request $request, $id)
    {
        $room = Room::find($id);
        if ($room) {
            $room->room_number = $request->input('room_number');
            $room->type = $request->input('type');
            $room->price = $request->input('price');
            $room->save();
        }
        return redirect()->back();
    }

public function profile()
{
    $admin = Auth::user();
    return view('Admin.profile', compact('admin'));
}

    public function blog()
    {
        return view('home.blog'); // optional if using controller method
    }

    public function contact()
    {
        return view('home.contact'); // optional if using controller method
    }
    public function about()
    {
        return view('home.about'); // optional if using controller method
    }
    public function room()
    {
        return view('home.room'); // optional if using controller method    

    }
    public function viewContacts()
{
    $contacts = Contact::orderBy('created_at', 'desc')->get();
    return view('Admin.contacts', compact('contacts'));
}
public function users()
{
    $users = User::where('usertype', 'user')->get();
    return view('Admin.users', compact('users'));
}
}