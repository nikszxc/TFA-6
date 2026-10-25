<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // The schema only has created_at, so disable updated_at.
    const UPDATED_AT = null;

    protected $fillable = ['username', 'full_name'];
}
