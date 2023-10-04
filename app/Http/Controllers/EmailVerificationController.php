<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Adjust the namespace as needed
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;

class EmailVerificationController extends Controller
{
    use VerifiesEmails;

    // Modify the verification logic as needed
    protected function verify(Request $request)
{
    // Get the user ID and email verification token from the URL parameters
    $userId = $request->route('id');
    $emailVerificationToken = $request->route('hash');

    // Use the $userId and $emailVerificationToken to find the user in the database
    $user = User::where('id', $userId)->first();

   // if (!$user || !hash_equals($user->email_verification_token, hash('sha256', $emailVerificationToken))) {
        // Token is invalid; handle this as needed (e.g., show an error message)
    //    return redirect('/userslogin')->with('error', 'Invalid email verification link');
  //  }

    // Check if the user's email is already verified
    if ($user->hasVerifiedEmail()) {
        // Email is already verified; set the info message and redirect to login
        session()->flash('info', 'Email address already verified');
        return redirect('/userslogin');
    }

    // Mark the user's email as verified
    $user->markEmailAsVerified();

    // Optionally, log in the user automatically after email verification
    // Auth::login($user);

    // Redirect the user to a success page or login page with a success message
    return view('emails.success'); // Assuming you have a "success.blade.php" view
}

    public function resend(Request $request)
{
    if ($request->user()->hasVerifiedEmail()) {
        return redirect()->route('home')->with('info', 'Email address already verified.');
    }

    $request->user()->sendEmailVerificationNotification();

    return back()->with('success', 'Verification link sent! Please check your email.');
}

}
