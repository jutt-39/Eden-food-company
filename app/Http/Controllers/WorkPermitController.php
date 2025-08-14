<?php

namespace App\Http\Controllers;

use App\Models\WorkPermit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkPermitController extends Controller
{
    public function index()
    {
        $type="";
        return view('client-ui.work-permit',compact('type'));
    }
    public function search(Request $request)
    {
        $request->validate([
            'passport_number' => 'required|string|min:5|max:20',
        ]);
        // dd('$request');
        $passportNumber = $request->input('passport_number');
        $passport = WorkPermit::where('passport_number', $passportNumber)->first();
        // echo $passport;
        // die;
        if ($passport) {

            $filePath = storage_path('app/'.$passport->letter);

                $type="search";
                return view('client-ui.work-permit', compact('passport','type','filePath'));


        } else {
            return redirect()->route('work-permit')->with('error', 'Not found! please contact with us.');
        }
    }

    // Download the letter
    public function downloadLetter($filed,$id)
    {
        $application = WorkPermit::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$filed;

        if (!Storage::exists($filePath)) {
            return redirect()->route('work-permit')->with('error', 'Work Permit not found!');
        }

        return Storage::download($filePath);
    }
}
