<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "position",
        "link_instagram",
        "link_facebook",
        "link_linkedin",
    ];
}
