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
        Testimonial::create([
            'message' => $request->message,
            'user_id' => Auth::id(),
        ]);

        return back()->with('success', 'Testimonial sended');
    }
}
