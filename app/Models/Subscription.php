<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mvdnbrk\EloquentExpirable\Expirable;

class Subscription extends Model
{
    use Expirable, HasFactory;

    const EXPIRES_AT = 'ends_at';
}
