<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'station_id',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //
    ];

    public static function search($query)
    {
        $relations = ['role', 'station'];

        return empty($query)
            ? static::query()
            : static::with($relations)->where(function ($q) use ($query) {
                $q
                    ->where('name', 'LIKE', '%' . $query . '%')
                    ->orWhere('email', 'LIKE', '%' . $query . '%')
                    ->orWhere('address', 'LIKE ', '%' . $query . '%');
            });
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id')->withDefault();
    }

    public function station()
    {
        return $this->hasOne(Station::class, 'id', 'station_id')->withDefault();
    }
}
