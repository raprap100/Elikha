<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ProfileView; // Assuming you have a ProfileView model

class TrackProfileViews
{
    public function handle($request, Closure $next)
{
    // Retrieve the profile ID from the route parameters
    $profileId = $request->route('id'); // Assuming the route parameter is named 'id'

    // Check if the user is authenticated before recording the view
    if (auth()->check()) {
        ProfileView::create([
            'profile_id' => $profileId,
            'viewer_id' => auth()->id(),
            'viewed_at' => now(),
        ]);
    }

    return $next($request);
}
}

