<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\TypeUser;
use App\Order;
use App\Franchise;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type_user_id', 'franchise_id', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
	];
	
	public static function createRules() {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
			'password' => ['required', 'string', 'min:8'],
			'address' => ['required', 'string'],
			'type_user_id' => ['required', 'integer'],
			'franchise_id' => ['required', 'integer']
        ];
    }

    public function updateRules() {
        return [
			'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users,email,' . $this->id],
			'address' => ['required', 'string'],
			'type_user_id' => ['nullable', 'integer'],
			'franchise_id' => ['required', 'integer']
        ];
    }

    public function typeuser()
    {
        return $this->belongsTo(TypeUser::class, 'type_user_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

	public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }
}
