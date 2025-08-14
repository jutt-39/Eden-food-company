<?php

namespace App\Http\Controllers\AdminController;

use App\Models\VisaStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class VisaStatController extends Controller
{
    public function index()
    {
        $applications = VisaStatus::all();
        return view('admin-ui.visa-status-table',compact('applications'));
    }
    public function form()
    {
        return view('admin-ui.visa-status-form');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:visaStatus,email',
            'passport_number' => 'required|string|unique:visaStatus,passport_number',
            'letter' => 'required|file|mimes:pdf,doc,docx,png,jpeg,jpg|max:2048',
        ]);


        // Create a new job application
        VisaStatus::create([
            'letter' => $request->file('letter')->store('public/visaStatus'),
            'email' => $request->email,
            'passport_number' => $request->passport_number,

        ]);
        return redirect()->route('visa-status-form')->with('success', ' Add successfully!');
    }
    public function destroy($id)
    {
        $application = VisaStatus::findOrFail($id);
        Storage::delete([ $application->letter]);
        $application->delete();

        return redirect()->route('visa-status-table')->with('success', 'Deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = VisaStatus::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('visa-status-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }


}
