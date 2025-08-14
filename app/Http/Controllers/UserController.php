<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function showRegistrationForm()
    {
        $title = 'Add';
        $url = route('register');
        $data = compact('url', 'title');
        return view('admin-ui.registration-form')->with($data);
    }
    public function show()
    {
        $applications = User::all();
        return view('admin-ui.user-table',compact('applications'));
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:8|max:255',
           'email' => ['required','unique:users', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('show')->with('success', 'Added successfully!');

    }

    public function showLoginForm()
    {
        return view('admin-ui.login-form');
    }

    public function login(Request $request)
    {

         $request->validate([
            'email' => ['required', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');


        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('deshboard');
        }

        return redirect()->back()->withErrors([
            'error' => 'Invalid credentials.Something else!',
        ])->withInput($request->except('password'));



    }
    public function destroy($id)
    {
        $application = User::findOrFail($id);

        $application->delete();

        return redirect()->route('show')->with('success', 'Deleted successfully!');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token
        return redirect()->route('login');
    }
}
