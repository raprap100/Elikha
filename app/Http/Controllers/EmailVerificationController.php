<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;


class EmailVerificationController extends Controller
{
    use VerifiesEmails;

    protected function verify(Request $request)
{
    $userId = $request->route('id');
    $emailVerificationToken = $request->route('hash');

    $user = User::where('id', $userId)->first();

    if ($user->hasVerifiedEmail()) {
        session()->flash('info', 'Email address already verified');
        return redirect('/userslogin');
    }

    $user->markEmailAsVerified();


    return view('emails.success');
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