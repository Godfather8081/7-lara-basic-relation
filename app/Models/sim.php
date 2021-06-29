<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sim extends Model
{
    use HasFactory;

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }
}
