<?php

namespace App\Http\Controllers;

use App\Models\OfferLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferLetterController extends Controller
{
    public function index()
    {
        $type="";
        return view('client-ui.offer-letter',compact('type'));
    }

    // Search for a passport and return the letter view
    public function search(Request $request)
    {
        $request->validate([
            'passport_number' => 'required|string|min:5|max:20',
        ]);
        // dd('$request');
        $passportNumber = $request->input('passport_number');
        $passport = OfferLetter::where('passport_number', $passportNumber)->first();
        // echo $passport;
        // die;
        if ($passport) {

            $filePath = storage_path('app/'.$passport->letter);

                $type="search";
                return view('client-ui.offer-letter', compact('passport','type','filePath'));


        } else {
            return redirect()->route('offer-letter')->with('error', 'Not found! please contact with us.');
        }
    }

    // Download the letter
    public function downloadLetter($filed,$id)
    {
        $application = offerLetter::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$filed;

        if (!Storage::exists($filePath)) {
            return redirect()->route('offer-letter')->with('error', 'Letter not found!');
        }

        return Storage::download($filePath);
    }
}

