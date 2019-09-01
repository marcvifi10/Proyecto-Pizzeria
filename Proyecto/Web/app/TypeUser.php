<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class TypeUser extends Model
{
    protected $fillable = ['name','description'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
