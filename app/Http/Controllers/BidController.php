<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid; // Import the Bid model
use App\Models\Artworks;
use Illuminate\Support\Facades\Auth;


class BidController extends Controller
{
    public function placeBid(Request $request, $artworkId)
{
    $user = Auth::user();
    $amount = $request->input('amount');
    $artwork = Artworks::find($artworkId);

    // Check if the bid amount is lower than the current bid or artwork price
    if ($amount < $artwork->price || $amount < $artwork->bids->max('amount')) {
        return redirect()->back()->with('error', 'Bid amount must be greater than the current bid and artwork price.');
    }

    // Create and save the bid
    $bid = new Bid();
    $bid->user_id = $user->id;
    $bid->artwork_id = $artworkId;
    $bid->amount = $amount;
    $bid->save();

    // Additional logic: Notify the user, update artwork status, etc.

    return redirect()->back()->with('success', 'Bid placed successfully!');
}

}
