<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ForgotPasswordController extends Controller
{
    public function forgetpassword()
    {
        return view('users.forgetpassword');
    }
    public function forgetpasswordPost(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    $email = $request->email;

    $existingToken = DB::table('password_reset_tokens')
        ->where('email', $email)
        ->first();

    if ($existingToken) {
        return back()->with("error", "We have already sent you a forget password link.");
    }

    $token = Str::random(64);

    DB::table('password_reset_tokens')->insert([
        'email' => $email,
        'token' => $token,
        'created_at' => Carbon::now(),
    ]);

    Mail::send('emails.forgetpassword', ['token' => $token], function ($message) use ($email) {
        $message->to($email);
        $message->subject("Reset Password");
    });

    return back()->with("success", "We have sent an email to reset your password.");
}

    public function resetpassword($token)
    {
        return view('users.resetpassword', compact('token'));
    }
    public function resetpasswordPost(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
    ]);

    $token = $request->input('token'); // Retrieve the token from the request

    $updatepassword = DB::table('password_reset_tokens')
        ->where([
            'email' => $request->email,
            'token' => $token // Use the retrieved token
        ])
        ->first();

    if (!$updatepassword) {
        return back()->with("error", "Invalid input");
    }

    // Update the user's password
    User::where("email", $request->email)->update([
        "password" => Hash::make($request->password)
    ]);

    // Delete the reset token
    DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

    return redirect()->route('userslogin')->with("success", "Password reset successfully");
}

}
