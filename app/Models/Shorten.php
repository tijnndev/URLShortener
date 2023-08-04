<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shorten extends Model
{
    // Define the table associated with the model
    protected $table = 'shorten';

    // Define the fillable fields that can be mass-assigned
    protected $fillable = ['short_code', 'original_url'];

    // Optionally, you can define other model properties and relationships here.
}