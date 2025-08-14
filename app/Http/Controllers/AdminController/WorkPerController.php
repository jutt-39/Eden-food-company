<?php

namespace App\Http\Controllers\AdminController;

use App\Models\WorkPermit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class WorkPerController extends Controller
{
    public function index()
    {
        $applications = WorkPermit::all();
        return view('admin-ui.work-permit-table',compact('applications'));
    }
    public function form()
    {
        return view('admin-ui.work-permit-form');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:workPermits,email',
            'passport_number' => 'required|string|unique:workPermits,passport_number',
            'letter' => 'required|file|mimes:pdf,doc,docx,png,jpeg,jpg|max:2048',
        ]);


        // Create a new job application
        WorkPermit::create([
            'letter' => $request->file('letter')->store('public/workPermits'),
            'email' => $request->email,
            'passport_number' => $request->passport_number,

        ]);
        return redirect()->route('work-permit-form')->with('success', ' Add successfully!');
    }
    public function destroy($id)
    {
        $application = WorkPermit::findOrFail($id);
        Storage::delete([ $application->letter]);
        $application->delete();

        return redirect()->route('work-permit-table')->with('success', 'Deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = WorkPermit::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('work-permit-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }


}
