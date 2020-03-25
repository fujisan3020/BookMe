<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;
    use softDeletes;

    public static $rules = array(
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255'],
      'password' => ['required', 'string', 'regex:/^(?=.*?[a-zA-Z])(?=.*?\d)[a-zA-Z\d]{8,}$/', 'confirmed', 'unique:users'],
    );

    protected $guarded = array('id');

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    protected $dates = ['deleted_at'];


    public function helpfuls() {
      return $this->hasMany('App\Helpful');
    }
}
