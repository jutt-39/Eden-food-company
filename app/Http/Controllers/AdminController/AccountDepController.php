<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Models\AccountsDepartment;
use App\Models\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AccountDepController extends Controller
{
    public function index()
    {
        $applications = AccountsDepartment::all();
        return view('admin-ui.account-department-table',compact('applications'));
    }
    public function show()
    {
        $applications = Account::all();
        return view('admin-ui.accounts',compact('applications'));
    }
    public function accountsForm()
    {
        $applications = AccountsDepartment::all();
        return view('admin-ui.addAccounts');
    }
    public function insert(Request $request)
    {

            // Validate the request
            $request->validate([
                'country' => 'required|string|max:100',
                'accountName' => 'required|string|max:100',
                'accountTitle' => 'required|string|max:100',
                'accountNumber' => 'required|string|max:50',
                'qrCode' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
            ]);

            // Handle the QR code image upload
            if ($request->hasFile('qrCode')) {
                $qrCodePath = $request->file('qrCode')->store('qr_codes', 'public'); // Save in storage/app/public/qr_codes
            }
            Account::create([
                'country' => $request->country,
                'accountName' => $request->accountName,
                'accountTitle' => $request->accountTitle,
                'accountNumber' => $request->accountNumber,
                'qrCode' => $qrCodePath, // Save the file path
            ]);

            return redirect()->route('accounts.table')->with('success', 'Account created successfully!');
    }
    public function destroy($id)
    {
        $application = AccountsDepartment::findOrFail($id);
        Storage::delete([ $application->photo]);
        $application->delete();

        return redirect()->route('account-department-table')->with('success', 'Application deleted successfully!');
    }
    public function delete($id)
    {
        $application = Account::findOrFail($id);
        Storage::delete([ $application->qrCode]);
        $application->delete();

        return redirect()->route('accounts.table')->with('success', 'Account deleted successfully!');
    }
    public function download($field, $id)
    {
        $application = AccountsDepartment::findOrFail($id);

        // Determine the file path based on the field
        $filePath = $application->$field;

        if (!Storage::exists($filePath)) {
            return redirect()->route('account-department-table')->with('error', 'File not found!');
        }

        return Storage::download($filePath);
    }

}
