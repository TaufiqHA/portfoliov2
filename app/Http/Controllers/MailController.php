<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\kirimEmail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $emailData = [
            'title' => 'Mail from ' . $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('htaufiq225@gmail.com')->send(new kirimEmail($emailData));

        return back()->with([
            'success' => 'Pesan Berhasil Terkirim'
        ]);
    }
}
