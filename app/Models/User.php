<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  HasRoles,HasApiTokens, HasFactory, Notifiable, SoftDeletes;


    protected $fillable = [
        'number_id',
        'name',
        'last_name',
        'email',
        'address',
        'password',
    ];
	protected $appends=['full_name'];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'created_at'=>'datetime:Y-m-d',
        'updated_at'=>'datetime:Y-m-d'
    ];


	public function getFullNameAttribute()
    {
    return "{$this ->name} {$this->last_name}"  ;

    }



	public function setPasswordAttribute($value)
    {

        $this->attributes['password'] = bcrypt($value);
    }

	public function setRememberTokenAttribute($value)
    {

    $this->attributes['remember_token']= Str::random(30) ;
    }
}
