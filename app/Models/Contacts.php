<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address'];

    //Many-To-One Realationship with Company

public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
