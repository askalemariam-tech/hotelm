<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function gallery()
    {
        return view('home.gallery');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }

    public function room()
    {
        return view('home.room');
    }
   public function submitContactForm(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'message' => 'required|string',
    ]);

    Contact::create($request->all());

    return redirect()->back()->with('success', 'Message sent successfully!');
} 
}
