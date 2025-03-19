<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FormsController extends Controller
{
        // Store contact form
        public function storeContactForm(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string'
            ]);
    
            Contact::create($validated);
    
            return redirect()->back()->with('success', 'Thank you for your message. We will contact you soon!');
        }
}
