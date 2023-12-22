<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function indexView()
    {
        return view('testimonials');
    }

    public function create(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        Testimonial::create([
            'message' => $request->message,
            'user_id' => Auth::id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);

        return back()->with('success', 'Testimonial sended');
    }
}
