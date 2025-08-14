<?php

namespace App\Http\Controllers\AdminController;

use App\Models\HiccCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HICCardController extends Controller
{
    public function index()
    {
        $applications = HiccCard::all();
        return view('admin-ui.hicc-card-table',compact('applications'));
    }
    public function form()
    {
        return view('admin-ui.hicc-card-form');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:hiccCards,email',
            'passport_number' => 'required|string|unique:hiccCards,passport_number',
            'letter' => 'required|file|mimes:pdf,doc,docx,png,jpeg,jpg|max:2048',
        ]);


        // Create a new job application
        HiccCard::create([
            'letter' => $request->file('letter')->store('public/hiccCards'),
            'email' => $request->email,
            'passport_number' => $request->passport_number,

        ]);
        return redirect()->route('hicc-card-form')->with('success', ' Add successfully!');
    }
    public function destroy($id)
    {
        $application = HiccCard::findOrFail($id);
        Storage::delete([ $application->letter]);
        $application->delete();

        return redirect()->route('hicc-card-table')->with('success', 'Deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = HiccCard::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('hicc-card-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }


}
