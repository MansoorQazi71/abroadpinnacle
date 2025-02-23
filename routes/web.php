<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

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

Route::get('/', function () {
    return view('index');
});
Route::post('/send-contact-email', function (Request $request) {
    $request->validate([
        'name'    => 'required|max:255',
        'email'   => 'required|email',
        'subject' => 'required|max:255',
    ]);

    $data = [
        'name'    => $request->input('name'),
        'email'   => $request->input('email'),
        'subject' => $request->input('subject'),
    ];

    Mail::to('abroadpinnacle3@gmail.com')->send(new ContactFormMail($data));


    return redirect()->back()->with(['message' => 'Email sent successfully!']);
})->name('send.contact.email');
