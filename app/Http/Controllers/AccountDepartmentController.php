<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountsDepartment;
use App\Models\Account;

class AccountDepartmentController extends Controller
{
    public function index()
    {
        $applications = Account::all();
        return view('client-ui.account-department',compact('applications'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|min:3|max:25',
            'passport_number' => 'required|string|unique:accountsdepartments,passport_number',
            'photo' => 'required|file|mimes:jpeg,png|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('public/slip');

        // Create a new job application
        AccountsDepartment::create([
            'name' => $request->name,
            'passport_number' => $request->passport_number,
            'photo' => $photoPath,
        ]);
        return redirect()->route('account-department')->with('success', 'Submitted successfully!');
    }
}
