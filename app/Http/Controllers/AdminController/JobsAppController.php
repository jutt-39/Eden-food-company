<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class JobsAppController extends Controller
{
    public function index()
    {
        $applications = JobApplication::all();
        return view('admin-ui.job-application-table',compact('applications'));
    }

    public function destroy($id)
    {
        $application = JobApplication::findOrFail($id);

        // Delete files from storage
        Storage::delete([$application->passport_image, $application->cv, $application->photo]);

        // Delete the record
        $application->delete();

        return redirect()->route('job-application-table')->with('success', 'Job application deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = JobApplication::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('job-application-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }
}
