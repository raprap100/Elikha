@extends('buyer.master')

@section('Header')
    @include('buyer.nav')
@endsection

@section('Body')
    <br><br><br>
    <div class="container mt-4">
        <!-- Cart title and sorting options -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h4 style="font-size: 30px; font-family: 'Arial', sans-serif;">Cart</h4>
            </div>
            <div class="col-md-6">
                <div class="btn-group">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sort
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">For Sale</a></li>
                        <li><a class="dropdown-item" href="#">Auctioned</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Displaying cart items (70% width) -->
        <div class="row">
            <div class="col-md-7">
                <!-- Display Auctioned Artworks in Cart -->
                <h2>Auction Items</h2>
                @foreach($auctionItems as $artwork)
                    @php
                        $leadingBid = $artwork->artwork->bids->max('amount');
                    @endphp
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('artworks/'.$artwork->artwork->image) }}" alt="Artwork Image"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $artwork->artwork->title }}</h5>
                                    <p>Dimensions: {{ $artwork->artwork->dimension }} cm</p>
                                    <p class="card-subtitle mb-2 text-muted">{{ $artwork->artwork->user->name }}</p>
                                    <p class="card-text">{{ $artwork->artwork->description }}</p>
                                    <p class="card-text">Leading Bid: ₱{{ $leadingBid ? number_format($leadingBid, 2) : 'N/A' }}</p>
                                    <button type="button" class="btn btn-primary bid-button"
                                        data-artwork-id="{{ $artwork->artwork->id }}" data-bs-toggle="modal" data-bs-target="#bidModal">Bid</button>
                                    <button type="button" class="btn btn-danger mt-3"
                                        data-artwork-id="{{ $artwork->id }}" onclick="removeFromCart(this)">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Display For Sale Artworks in Cart -->
                <h2>For Sale Items</h2>
                @foreach($saleItems as $artwork)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('artworks/'.$artwork->artwork->image) }}" alt="Artwork Image"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $artwork->artwork->title }}</h5>
                                    <p>Dimensions: {{ $artwork->artwork->dimension }} cm</p>
                                    <p class="card-subtitle mb-2 text-muted">{{ $artwork->artwork->user->name }}</p>
                                    <p class="card-text">{{ $artwork->artwork->description }}</p>
                                    <p class="card-text">Price: ₱{{ number_format($artwork->artwork->price, 2) }}</p>
                                    <button type="button" class="btn btn-danger mt-3"
                                        data-artwork-id="{{ $artwork->id }}" onclick="removeFromCart(this)">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Order details card on the right (30% width) -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-4 text-center">Order Details</h4>
                        <p>Total Price: ₱{{ number_format($totalPrice, 2) }}</p> <!-- Corrected line -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bid Modal and custom script remain unchanged -->

    <style>
        /* Add your custom styles here */
        .bid-button {
            margin-top: 10px;
        }
    </style>

    <script>
        function placeBid() {
            var bidAmount = jQuery('#bidAmount').val();
            var artworkId = jQuery('.bid-button').data('artwork-id');

            // Perform AJAX request to place the bid
            jQuery.ajax({
                url: '/bids/place/' + artworkId,
                type: 'POST',
                data: {
                    amount: bidAmount,
                    _token: '{{ csrf_token() }}' // Add CSRF token for Laravel security
                },
                success: function (response) {
                    // Handle success response (show success message, update UI, etc.)
                    console.log(response);
                    // You can update the UI here, for example, update the leading bid amount on the card
                },
                error: function (error) {
                    // Handle error response (show error message, handle validation errors, etc.)
                    console.error(error);
                }
            });

            // After successfully placing the bid, close the modal
            jQuery('#bidModal').modal('hide');
        }

        function removeFromCart(button) {
            var artworkId = jQuery(button).data('artwork-id');

            // Perform AJAX request to remove the artwork from the cart
            jQuery.ajax({
                url: '/cart/remove/' + artworkId,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}' // Add CSRF token for Laravel security
                },
                success: function (response) {
                    // Handle success response (remove the artwork from the UI, update total price, etc.)
                    console.log(response);
                },
                error: function (error) {
                    // Handle error response (show error message, etc.)
                    console.error(error);
                }
            });
        }
    </script>
@endsection
