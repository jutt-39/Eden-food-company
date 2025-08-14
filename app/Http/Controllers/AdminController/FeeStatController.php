<?php

namespace App\Http\Controllers\AdminController;

use App\Models\FeeStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FeeStatController extends Controller
{
    public function index()
    {
        $applications = FeeStatus::all();
        return view('admin-ui.fee-status-table',compact('applications'));
    }
    public function form()
    {
        return view('admin-ui.fee-status-form');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:feeStatus,email',
            'passport_number' => 'required|string|unique:feeStatus,passport_number',
            'letter' => 'required|file|mimes:pdf,doc,docx,png,jpeg,jpg|max:2048',
        ]);


        // Create a new job application
        FeeStatus::create([
            'letter' => $request->file('letter')->store('public/feeStatus'),
            'email' => $request->email,
            'passport_number' => $request->passport_number,

        ]);
        return redirect()->route('fee-status-form')->with('success', ' Add successfully!');
    }
    public function destroy($id)
    {
        $application = FeeStatus::findOrFail($id);
        Storage::delete([ $application->letter]);
        $application->delete();

        return redirect()->route('fee-status-table')->with('success', 'Deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = FeeStatus::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('fee-status-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }


}
