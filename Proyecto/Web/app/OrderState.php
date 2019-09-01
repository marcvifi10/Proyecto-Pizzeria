<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\HistoricState;

class OrderState extends Model
{
    protected $fillable = ['name','description'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function historicstate()
    {
        return $this->hasMany(HistoricState::class);
    }
}
