<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[AdminController::class, 'home']);

Route::get('/home', [AdminController::class, 'index'])->name('home');


Route::post('/add_room',[AdminController::class, 'add_room']);

Route::get('/create_room',[AdminController::class, 'create_room']);

Route::post('/store',[AdminController::class, 'store']);

Route::get('/book_room',[AdminController::class, 'book_room']);

Route::get('/view_room',[AdminController::class, 'view_room']);

Route::get('/delete_room/{id}',[AdminController::class, 'delete_room']);

Route::get('/update_room/{id}',[AdminController::class, 'update_room']);
Route::post('/edit_room/{id}',[AdminController::class, 'edit_room']);
// Home page
Route::get('/home', [AdminController::class, 'index'])->name('home');

// Rooms routes
Route::get('/create_room', [AdminController::class, 'create_room'])->name('create_room');
Route::post('/add_room', [AdminController::class, 'add_room'])->name('add_room');
Route::post('/store', [AdminController::class, 'store'])->name('store_room');
Route::get('/view_room', [AdminController::class, 'view_room'])->name('view_room');
Route::post('/book_room', [AdminController::class, 'book_room'])->name('book_room');
Route::get('/delete_room/{id}', [AdminController::class, 'delete_room'])->name('delete_room');
Route::get('/update_room/{id}', [AdminController::class, 'update_room'])->name('update_room');
Route::post('/edit_room/{id}', [AdminController::class, 'edit_room'])->name('edit_room');


Route::get('/admin/profile', [AdminController::class, 'profile'])
    ->middleware('auth')
    ->name('admin.profile');  // <-- semicolon here

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/room', [HomeController::class, 'room'])->name('room');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::post('/contact/submit', [HomeController::class, 'submitContactForm'])->name('contact.submit');
Route::post('/blog/submit', [HomeController::class, 'submitBlogForm'])->name('blog.submit');
Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

Route::get('/user/profile', [UserController::class, 'profile'])
    ->middleware('auth')
    ->name('user.profile'); 



Route::get('/my_bookings', [UserController::class, 'myBookings'])->name('user.my_bookings');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/contacts', [AdminController::class, 'viewContacts'])->name('contacts');
});
Route::post('/contact/submit', [HomeController::class, 'submitContactForm'])->name('contact.submit');


use App\Http\Controllers\ContactController;

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/admin/users', [AdminController::class, 'users'])
    ->name('users');