<?php

namespace App\Http\Controllers\AdminController;

use App\Models\TicketStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TicketStatController extends Controller
{
    public function index()
    {
        $applications = TicketStatus::all();
        return view('admin-ui.ticket-status-table',compact('applications'));
    }
    public function form()
    {
        return view('admin-ui.ticket-status-form');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:ticketStatus,email',
            'passport_number' => 'required|string|unique:ticketStatus,passport_number',
            'letter' => 'required|file|mimes:pdf,doc,docx,png,jpeg,jpg|max:2048',
        ]);


        // Create a new job application
        TicketStatus::create([
            'letter' => $request->file('letter')->store('public/ticketStatus'),
            'email' => $request->email,
            'passport_number' => $request->passport_number,

        ]);
        return redirect()->route('ticket-status-form')->with('success', ' Add successfully!');
    }
    public function destroy($id)
    {
        $application = TicketStatus::findOrFail($id);
        Storage::delete([ $application->letter]);
        $application->delete();

        return redirect()->route('ticket-status-table')->with('success', 'Deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = TicketStatus::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('ticket-status-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }


}
