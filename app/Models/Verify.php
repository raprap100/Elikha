<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
    use HasFactory;

    protected $table = 'verification_requests'; // If your table name is different, specify it here.

    protected $fillable = [
        'identification',
        'selfie',
        'gcash',
        'firstname',
        'middlename',
        'lastname',
        'nationality',
        'birthday',
        'address',
        'users_id',
        'idtype_id',
        'age',
        'phonenumber',
        'gender_id',
        'status',
        'remarks',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id'); // Replace 'User' with the actual related model name
    }
}