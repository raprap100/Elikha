@extends('layout.email')

@section('content')
    <h1 style="font-size: 24px; margin-bottom: 20px;">Account Verification Approved</h1>

    <p>
        Dear {{ $artist->firstname }} {{ $artist->middlename }} {{ $artist->lastname }},
    </p>

    <p>
        We are thrilled to inform you that your account verification has been approved! This means you are now an official member of our community of artists at E-Likha Organization. Congratulations!
    </p>

    <p>
        With your verified account, you can now access all the features and benefits of our platform, including the ability to showcase your artwork, connect with other artists, and participate in exciting events and exhibitions.
    </p>

    <p>
        What's more, you can now post your artworks for sale and for auction on our platform. This is a fantastic opportunity to share your creations with art enthusiasts and potential buyers. Whether you want to sell your artwork outright or let collectors bid on your pieces, our platform provides the tools you need to manage your art sales effortlessly.
    </p>

    <p>
        Thank you for choosing E-Likha Organization as your creative platform. We look forward to seeing your talent shine and flourish within our community.
    </p>

    <p>
        Sincerely,
        <br>
        E-Likha Organization
    </p>
@endsection
