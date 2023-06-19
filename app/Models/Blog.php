<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /* One to Many Relationship between Blog and the User

    */

    public function author(){
        return $this->belongsTo(User::class);
    }
}
