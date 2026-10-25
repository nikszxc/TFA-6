<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // The schema only has created_at, so disable updated_at.
    const UPDATED_AT = null;

    protected $fillable = ['full_name', 'email', 'phone'];
}
