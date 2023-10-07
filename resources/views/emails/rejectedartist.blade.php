@extends('layout.email')

@section('content')
    <h1 style="font-size: 24px; margin-bottom: 20px;">Account Verification Rejected</h1>

    <p>
        Dear {{ $artist->firstname }} {{ $artist->middlename }} {{ $artist->lastname }},
    </p>

    <p>
        We regret to inform you that your account verification request has been rejected. Unfortunately, we were unable to approve your account at this time.
    </p>

    <p>
        Remarks:
    </p>

    <blockquote>
        {{ $remarks }}
    </blockquote>

    <p>
        If you believe there may have been a mistake or if you have any questions regarding this decision, please don't hesitate to contact our support team. We're here to assist you.
    </p>

    <p>
        Thank you for your interest in E-Likha Organization, and we appreciate your understanding.
    </p>

    <p>
        Sincerely,
        <br>
        E-Likha Organization
    </p>
@endsection
