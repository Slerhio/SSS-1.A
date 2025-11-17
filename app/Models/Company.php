<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    //enable mass assignment
    protected $fillable = ['name', 'address', 'website', 'email'];

    //One to many Relationships
    public function contacts()
    {
        return $this->hasMany(Contacts::class);
    }
}
