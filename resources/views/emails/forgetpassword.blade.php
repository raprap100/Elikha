@extends('layout.email')

@section('content')
    <h1 style="font-size: 24px; margin-bottom: 20px;">Reset Password</h1>

    <p>
        You've requested to reset your password. To proceed, please click the link below:
    </p>

    <p>
        <a href="{{ url('/resetpassword', ['token' => $token]) }}" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: #fff; text-decoration: none; border-radius: 5px;">Reset Password</a>
    </p>

    <p>
        If you didn't request a password reset or have any concerns about this email, please ignore it. Your account security is important to us.
    </p>

    <p>
        Thank you for using our services.
    </p>

    <p>
        Sincerely,
        <br>
        E-Likha Organization
    </p>
@endsection
