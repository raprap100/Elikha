<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileView extends Model
{
    protected $table = 'profile_views'; // Specify the table name if it's different from the model name

    protected $fillable = [
        'profile_id',
        'viewer_id',
        'viewed_at',
    ];

    // Define relationships if needed
    // For example, if 'profile_id' and 'viewer_id' are foreign keys
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function viewer()
    {
        return $this->belongsTo(User::class, 'viewer_id');
    }
}
