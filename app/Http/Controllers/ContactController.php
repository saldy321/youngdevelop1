<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact'); 
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'nullable|string|max:20', 
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('younggdevelop@gmail.com')->send(new ContactFormMail($validatedData));

            return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah terkirim. Kami akan menghubungi Anda dalam 1x24 jam kerja.');

        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.']);
        }
    }
}