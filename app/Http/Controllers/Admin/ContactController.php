<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $contacts = Kontak::all(); // Mengambil semua data dari tabel 'kontaks'
        return view('admin.contacts.index', compact('contacts'));
    }
}