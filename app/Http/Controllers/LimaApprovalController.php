<?php

namespace App\Http\Controllers;

use App\Models\LmiaApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LimaApprovalController extends Controller
{
    public function index()
    {
        $type="";
        return view('client-ui.lmia-aproval',compact('type'));
    }
    public function search(Request $request)
    {
        $request->validate([
            'passport_number' => 'required|string|min:5|max:20',
        ]);
        // dd('$request');
        $passportNumber = $request->input('passport_number');
        $passport = LmiaApproval::where('passport_number', $passportNumber)->first();
        // echo $passport;
        // die;
        if ($passport) {

            $filePath = storage_path('app/'.$passport->letter);

                $type="search";
                return view('client-ui.lmia-aproval', compact('passport','type','filePath'));


        } else {
            return redirect()->route('lmia-approval')->with('error', 'Not found! please contact with us.');
        }
    }

    // Download the letter
    public function downloadLetter($filed,$id)
    {
        $application = LmiaApproval::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$filed;

        if (!Storage::exists($filePath)) {
            return redirect()->route('lmia-approval')->with('error', 'LMIA Approval not found!');
        }

        return Storage::download($filePath);
    }
}
