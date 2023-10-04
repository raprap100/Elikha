@extends('layout.email')

@section('content')
    <h1 style="font-size: 24px; margin-bottom: 20px;">Artwork Approved</h1>

    <p>
        Dear {{ $artwork->user->name }},
    </p>

    <p>
        We are pleased to inform you that your artwork "{{ $artwork->title }}" has been approved and is now live on our platform for the world to see and appreciate.
    </p>

    <p>
        Your creative contribution is valued, and we encourage you to continue sharing your talent with the community. We look forward to seeing more of your inspiring artwork in the future.
    </p>

    <p>
        Thank you for being a part of our platform and for enriching our artistic community.
    </p>

    <p>
        Sincerely,
        <br>
        E-Likha Organization
    </p>
@endsection
