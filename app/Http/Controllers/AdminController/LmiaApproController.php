<?php

namespace App\Http\Controllers\AdminController;

use App\Models\LmiaApproval;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LmiaApproController extends Controller
{
    public function index(){
        $applications = LmiaApproval::all();
        return view('admin-ui.lmia-approval-table',compact('applications'));
    }
    public function form()
    {
        return view('admin-ui.lmia-approval-form');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:lmiaApprovals,email',
            'passport_number' => 'required|string|unique:lmiaApprovals,passport_number',
            'letter' => 'required|file|mimes:pdf,doc,docx,png,jpeg,jpg|max:2048',
        ]);


        // Create a new job application
        LmiaApproval::create([
            'letter' => $request->file('letter')->store('public/lmiaapprovals'),
            'email' => $request->email,
            'passport_number' => $request->passport_number,

        ]);
        return redirect()->route('lmia-approval-form')->with('success', ' Add successfully!');
    }
    public function destroy($id)
    {
        $application = LmiaApproval::findOrFail($id);
        Storage::delete([ $application->letter]);
        $application->delete();

        return redirect()->route('lmia-approval-table')->with('success', 'Deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = LmiaApproval::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('lmia-approval-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }

}


