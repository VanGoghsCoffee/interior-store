<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function username($userID) {
        return \App\User::findOrFail($userID)->name;
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
