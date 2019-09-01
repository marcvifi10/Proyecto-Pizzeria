<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Franchise;
use App\User;
use App\OrderState;
use App\OrderLine;
use App\HistoricState;

class Order extends Model
{
	protected $fillable = ['franchise_id','user_id','price','order_state_id'];

    public static function createRules() {
        return [
            'franchise_id' => ['required', 'integer']
        ];
    }

    public function updateRules() {
        return Order::createRules();
    }

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderstate()
    {
        return $this->belongsTo(OrderState::class, 'order_state_id');
	}

	public function orderstate_history()
    {
        return $this->hasMany(HistoricState::class);
	}
	
	public function order_lines()
    {
        return $this->hasMany(OrderLine::class);
	}
}
