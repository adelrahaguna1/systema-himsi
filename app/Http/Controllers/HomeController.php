<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Import the Contact model
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = Produk::all(); // Fetch all products from the database
        return view('dashboard', compact('products'));
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function kontak()
    {
        return view('kontak');
    }

    /**
     * Store a new contact message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function kirimPesan(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([ // Use $validatedData
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'nullable|string|max:20', // Use consistent variable name
            'pesan' => 'required|string',
        ]);

        // Create a new Contact instance and fill it with the validated data
        $contact = new Contact();
        $contact->nama = $validatedData['nama'];
        $contact->email = $validatedData['email'];
        $contact->phone_number = $validatedData['no_hp']; // Use the validated data
        $contact->message = $validatedData['pesan'];
        $contact->save();

        // Kirim email (optional) - Consider using a Mail Class for better organization
        $mailData = [ // Use a different variable name to avoid shadowing
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'no_hp' => $validatedData['no_hp'],
            'pesan' => $validatedData['pesan'],
        ];

        Mail::raw("Pesan Kontak dari:\nNama: {$mailData['nama']}\nEmail: {$mailData['email']}\nNo. HP: {$mailData['no_hp']}\nPesan:\n{$mailData['pesan']}", function ($message) use ($mailData) {
            $message->from($mailData['email'], $mailData['nama']);
            $message->to(config('mail.from.address')); // Use configuration
            $message->subject('Pesan Kontak dari Website');
        });

        // Redirect the user with a success message
        return redirect()->route('kontak.index')->with('success', 'Pesan Anda berhasil dikirim!');
    }
}