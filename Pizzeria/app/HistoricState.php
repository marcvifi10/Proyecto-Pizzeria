<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\OrderState;

class HistoricState extends Model
{
    protected $fillable = ['order_id','order_state_id'];


    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function ordestate()
    {
        return $this->belongsTo(OrderState::class, 'order_state_id');
    }
}
