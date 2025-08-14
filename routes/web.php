<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplyNowController;
use App\Http\Controllers\HiccCardController;
use App\Http\Controllers\FeeStatusController;
use App\Http\Controllers\VisaStatusController;
use App\Http\Controllers\WorkPermitController;
use App\Http\Controllers\OfferLetterController;
use App\Http\Controllers\LimaApprovalController;

use App\Http\Controllers\TicketStatusController;
use App\Http\Controllers\ApplyBiometricController;
use App\Http\Controllers\AccountDepartmentController;
use App\Http\Controllers\AdminController\FeeStatController;
use App\Http\Controllers\AdminController\HICCardController;
use App\Http\Controllers\AdminController\JobsAppController;
use App\Http\Controllers\AdminController\WorkPerController;
use App\Http\Controllers\AdminController\OfferLetController;
use App\Http\Controllers\AdminController\VisaStatController;
use App\Http\Controllers\AdminController\ApplyBiomController;
use App\Http\Controllers\AdminController\LmiaApproController;
use App\Http\Controllers\AdminController\AccountDepController;
use App\Http\Controllers\AdminController\TicketStatController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('index');

// Offer Letter Route
Route::get('/offer-letter', [OfferLetterController::class, 'index'])->name('offer-letter');
Route::get('/letter-status', [OfferLetterController::class, 'search'])->name('searchofferletter');
Route::get('/download-letter/{field}/{id}', [OfferLetterController::class, 'downloadLetter'])->name('downloadofferletter');

// LMIA Approval Route
Route::get('/lmia-approval', [LimaApprovalController::class, 'index'])->name('lmia-approval');
Route::get('/lmia-status', [LimaApprovalController::class, 'search'])->name('lmialetter');
Route::get('/download-lmia/{field}/{id}', [LimaApprovalController::class, 'downloadLetter'])->name('downloawlmialetter');


// Work Permit Route
Route::get('/work-permit', [WorkPermitController::class, 'index'])->name('work-permit');
Route::get('/work-permit-status', [WorkPermitController::class, 'search'])->name('workpermitletter');
Route::get('/download-work-permit/{field}/{id}', [WorkPermitController::class, 'downloadLetter'])->name('downloadworkpermit');


// Visa Status Route
Route::get('/visa-status', [VisaStatusController::class, 'index'])->name('visa-status');
Route::get('/Visa-status-letter', [VisaStatusController::class, 'search'])->name('visaletter');
Route::get('/download-visa-letter/{field}/{id}', [VisaStatusController::class, 'downloadLetter'])->name('downloadvisaLetter');


// Ticket Status Route
Route::get('/ticket-status', [TicketStatusController::class, 'index'])->name('ticket-status');
Route::get('/ticket-status-letter', [TicketStatusController::class, 'search'])->name('searchticket');
Route::get('/download-ticket/{field}/{id}', [TicketStatusController::class, 'downloadLetter'])->name('downloadticket');


// HICC Card Route
Route::get('/hicc-card-status', [HiccCardController::class, 'index'])->name('hicc-card');
Route::get('/hicc-card-letter', [HiccCardController::class, 'search'])->name('searchhicc');
Route::get('/download-hicc/{field}/{id}', [HiccCardController::class, 'downloadLetter'])->name('downloadhicc');



// Fee Status Route
Route::get('/fee-status', [FeeStatusController::class, 'index'])->name('fee-status');
Route::get('/fee-status-letter', [FeeStatusController::class, 'search'])->name('searchfee');
Route::get('/download-fee/{field}/{id}', [FeeStatusController::class, 'downloadLetter'])->name('downloadfee');



// Account Department Route
Route::get('/account-department', [AccountDepartmentController::class, 'index'])->name('account-department');
Route::post('/account-department/store', [AccountDepartmentController::class, 'store'])->name('accountdepartment.store');
// Apply Biometric Route
Route::get('/apply-biometric', [ApplyBiometricController::class, 'index'])->name('apply-biometric');
Route::post('/Apply-biomatric/store', [ApplyBiometricController::class, 'store'])->name('applybiomatric.store');

// Jobs Route
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

// Apply Now Route
Route::get('/apply-now', [ApplyNowController::class, 'index'])->name('apply-now');
Route::post('/jobapplication/store', [ApplyNowController::class, 'store'])->name('jobapplication.store');



// admin side route


// Route::get('/login',function(){
// return view('admin-ui.login-form');
// });


// Route::get('/form',function(){
// return view('admin-ui.form');
// });

Route::get('/Admin/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/Admin/login', [UserController::class, 'login'])->name('login');
// // user mangmentt
Route::middleware('auth:admin')->group(function () {
Route::prefix('/Admin')->group(function(){
Route::get('/deshboard',function(){
return view('admin-ui.admin-deshboard');
})->name('deshboard');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/table', [UserController::class, 'show'])->name('show');
Route::DELETE('/delete/{id}', [UserController::class, 'destroy'])->name('userdestroye');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

});

Route::get('/account-department-table', [AccountDepController::class, 'index'])->name('account-department-table');
Route::delete('/account-department/{id}', [AccountDepController::class, 'destroy'])->name('accountdepartment.destroy');
Route::get('/account-department/download/{field}/{id}', [AccountDepController::class, 'download'])->name('accountdepartment.download');

Route::get('/accounts-table', [AccountDepController::class, 'show'])->name('accounts.table');
Route::get('/accounts-form', [AccountDepController::class, 'accountsForm'])->name('accounts-form');
Route::post('/accounts', [AccountDepController::class, 'insert'])->name('accounts.store');
Route::delete('/accounts-delete/{id}', [AccountDepController::class, 'delete'])->name('accounts.destroy');


Route::get('/apply-biometric-table', [ApplyBiomController::class, 'index'])->name('apply-biometric-table');
Route::delete('/apply-biomatric/{id}', [ApplyBiomController::class, 'destroy'])->name('applybiomatric.destroy');
Route::get('/job-application-table', [JobsAppController::class, 'index'])->name('job-application-table');
Route::delete('/jobapplication/{id}', [JobsAppController::class, 'destroy'])->name('jobapplication.destroy');
Route::get('/jobapplication/download/{field}/{id}', [JobsAppController::class, 'download'])->name('jobapplication.download');

Route::get('/offer-letter-table', [OfferLetController::class, 'index'])->name('offer-letter-table');
Route::get('/offer-letter-form', [OfferLetController::class, 'form'])->name('offer-letter-form');
Route::post('/offer-letter/store', [OfferLetController::class, 'store'])->name('offerletter.store');
Route::delete('/offer-letter/{id}', [OfferLetController::class, 'destroy'])->name('offerletter.destroy');
Route::get('/offer-letter/download/{field}/{id}', [OfferLetController::class, 'download'])->name('offerletter.download');

Route::get('/lmia-approval-table', [LmiaApproController::class, 'index'])->name('lmia-approval-table');
Route::get('/lmia-approval-form', [LmiaApproController::class, 'form'])->name('lmia-approval-form');
Route::post('/lmia-approval/store', [LmiaApproController::class, 'store'])->name('lmiaaproval.store');
Route::delete('/lmia-approval/{id}', [LmiaApproController::class, 'destroy'])->name('lmiaaproval.destroy');
Route::get('/lmia-approval/download/{field}/{id}', [LmiaApproController::class, 'download'])->name('lmiaaproval.download');

Route::get('/work-permit-table', [WorkPerController::class, 'index'])->name('work-permit-table');
Route::get('/work-permit-form', [WorkPerController::class, 'form'])->name('work-permit-form');
Route::post('/work-permit/store', [WorkPerController::class, 'store'])->name('workpermit.store');
Route::delete('/work-permit/{id}', [WorkPerController::class, 'destroy'])->name('workpermit.destroy');
Route::get('/work-permit-/download/{field}/{id}', [WorkPerController::class, 'download'])->name('workpermit.download');

Route::get('/visa-status-table', [VisaStatController::class, 'index'])->name('visa-status-table');
Route::get('/visa-status-form', [VisaStatController::class, 'form'])->name('visa-status-form');
Route::post('/visa-status/store', [VisaStatController::class, 'store'])->name('visastatus.store');
Route::delete('/visa-status/{id}', [VisaStatController::class, 'destroy'])->name('visastatus.destroy');
Route::get('/visa-status/download/{field}/{id}', [VisaStatController::class, 'download'])->name('visastatus.download');


Route::get('/ticket-status-table', [TicketStatController::class, 'index'])->name('ticket-status-table');
Route::get('/ticket-status-form', [TicketStatController::class, 'form'])->name('ticket-status-form');
Route::post('/ticket-status/store', [TicketStatController::class, 'store'])->name('ticketstatus.store');
Route::delete('/ticket-status/{id}', [TicketStatController::class, 'destroy'])->name('ticketstatus.destroy');
Route::get('/ticket-status/download/{field}/{id}', [TicketStatController::class, 'download'])->name('ticketstatus.download');

Route::get('/hicc-card-table', [HICCardController::class, 'index'])->name('hicc-card-table');
Route::get('/hicc-card-form', [HICCardController::class, 'form'])->name('hicc-card-form');
Route::post('/hicc-card/store', [HICCardController::class, 'store'])->name('hicccard.store');
Route::delete('/hicc-cardr/{id}', [HICCardController::class, 'destroy'])->name('hicccard.destroy');
Route::get('/hicc-card/download/{field}/{id}', [HICCardController::class, 'download'])->name('hicccard.download');

Route::get('/fee-status-table', [ FeeStatController::class, 'index'])->name('fee-status-table');
Route::get('/fee-status-form', [ FeeStatController::class, 'form'])->name('fee-status-form');
Route::post('/fee-status/store', [FeeStatController::class, 'store'])->name('feestatus.store');
Route::delete('/fee-status/{id}', [FeeStatController::class, 'destroy'])->name('feestatus.destroy');
Route::get('/fee-status/download/{field}/{id}', [FeeStatController::class, 'download'])->name('feestatus.download');
});
// un match route
Route::fallback(function () {
    return redirect('/'); // Redirect to home page
});
