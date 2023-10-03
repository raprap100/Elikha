<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid; // Import the Bid model
use App\Models\Artwork;
use Illuminate\Support\Facades\Auth;


class BidController extends Controller
{
    public function placeBid(Request $request)
    {
        // Validate bid input
        $request->validate([
            'bid_amount' => 'required|numeric',
        ]);
    
        $bidAmount = $request->input('bid_amount');
        $startingBid = $artwork->start_price; // Retrieve starting bid from artwork model
        $artworkPrice = $artwork->price; // Retrieve artwork price from artwork model
    
        // Check if bid is lower than starting bid or artwork price
        if ($bidAmount < $startingBid || $bidAmount < $artworkPrice) {
            return back()->with('error', 'Bid must be higher than the starting bid or artwork price.');
        }
    
        // Save the bid to the database and perform other necessary actions
        // ...
    
        return redirect()->route('showbuyer')->with('success', 'Bid placed successfully!');
    }
}
