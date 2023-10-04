@extends('layout.email')

@section('content')
    <h1 style="font-size: 24px; margin-bottom: 20px;">Artwork Rejected</h1>

    <p>
        Dear {{ $artwork->user->name }},
    </p>

    <p>
        We regret to inform you that your artwork "{{ $artwork->title }}" has been rejected for the following reasons:
    </p>

    <p style="font-weight: bold;">Remarks:</p>
    <p>{{ $remarks }}</p>

    <p>
        We appreciate your contribution to our platform and encourage you to continue sharing your creativity with the community.
    </p>

    <p>
        Thank you for using our platform.
    </p>

    <p>
        Sincerely,
        <br>
        E-Likha Organization
    </p>
@endsection
