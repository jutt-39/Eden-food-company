<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyBiometric;

class ApplyBiomController extends Controller
{
    public function index()
    {
        $applications = ApplyBiometric::all();
        return view('admin-ui.apply-biometric-table',compact('applications'));
    }


    public function destroy($id)
    {
        $application = ApplyBiometric::findOrFail($id);
        $application->delete();

        return redirect()->route('apply-biometric-table')->with('success', 'Application deleted successfully!');
    }
}
