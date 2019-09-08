<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Franchise extends Model
{
    protected $fillable = ['name','address','phone','email','coordinates'];

    public static function createRules() {
        return [
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'string', 'digits:9'],
            'email' => ['required', 'string', 'email', 'unique:franchises'],
            'coordinates' => ['required', 'string']
        ];
    }

    public function updateRules() {
        return [
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'string', 'digits:9'],
            'email' => ['required', 'string', 'email', 'unique:franchises,email,' . $this->id],
            'coordinates' => ['required', 'string']
        ];
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
