<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplyBiometric;


class ApplyBiometricController extends Controller
{
    public function index()
    {
        return view('client-ui.apply-biometric');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:25',
            'whatsapp_number' => 'required|string|min:11|max:25',

            'passport_number' => 'required|string|unique:applyBiometrics,passport_number|max:20',

            'livingcountry' => 'required|string|max:25',

        ]);

        // Create a new job application
        ApplyBiometric::create([
            'name' => $request->name,
            'passport_number' => $request->passport_number,
            'whatsapp_number' => $request->whatsapp_number,
            'livingcountry' => $request->livingcountry,
            'date' => $request->date,


        ]);
        return redirect()->route('apply-biometric')->with('success', 'Application submitted successfully! Contact With you on Whatsapp Soon!!');
    }

}
