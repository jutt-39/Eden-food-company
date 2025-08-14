<?php

namespace App\Http\Controllers\AdminController;

use App\Models\OfferLetter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OfferLetController extends Controller
{
    public function index()
    {
        $applications = OfferLetter::all();
        return view('admin-ui.offer-letter-table',compact('applications'));
    }
    public function form()
    {
        return view('admin-ui.offer-letter-form');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:offerLetters,email',
            'passport_number' => 'required|string|unique:offerLetters,passport_number',
            'letter' => 'required|file|mimes:pdf,doc,docx,png,jpeg,jpg|max:2048',
        ]);


        // Create a new job application
        OfferLetter::create([
            'letter' => $request->file('letter')->store('public/offerletter'),
            'email' => $request->email,
            'passport_number' => $request->passport_number,

        ]);
        return redirect()->route('offer-letter-form')->with('success', ' Add successfully!');
    }
    public function destroy($id)
    {
        $application = offerLetter::findOrFail($id);
        Storage::delete([ $application->letter]);
        $application->delete();

        return redirect()->route('offer-letter-table')->with('success', 'Deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = offerLetter::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('offer-letter-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }

}
