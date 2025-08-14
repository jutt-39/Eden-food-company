<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;


class ApplyNowController extends Controller
{
    public function index()
    {

        return view('client-ui.application-form');
    }



    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:25',
            'whatsapp_number' => 'required|string|min:11|max:25',
            'email' => 'required|email|unique:jobapplications,email',
            'passport_number' => 'required|string|unique:jobapplications,passport_number',
            'passport_image' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'jobname' => 'required|string|max:255',
            'livingcountry' => 'required|string|max:25',
            'jobcountry' => 'required|string|max:25',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'photo' => 'required|file|mimes:jpeg,png|max:2048',
        ]);

        // Handle file uploads
        $passportImagePath = $request->file('passport_image')->store('public/passport_images');
        $cvPath = $request->file('cv')->store('public/cvs');
        $photoPath = $request->file('photo')->store('public/photos');

        // Create a new job application
        JobApplication::create([
            'name' => $request->name,
            'whatsapp_number' => $request->whatsapp_number,
            'email' => $request->email,
            'passport_number' => $request->passport_number,
            'passport_image' => $passportImagePath,
            'jobname' => $request->jobname,
            'livingcountry' => $request->livingcountry,
            'jobcountry' => $request->jobcountry,
            'cv' => $cvPath,
            'photo' => $photoPath,
        ]);
        return redirect()->route('apply-now')->with('success', 'Job application submitted successfully! Contact With you on Whatsapp Soon!');
    }



}
