<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'nom',
        'prenom',
        'ranking',
        'telephone_1',
        'telephone_2',
        'username',
        'active',
        'permissions',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';
    protected $guarded = ['id','created_at'];
    protected $dates = ['created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }


    // Rechercher un utilisateur par son mail
    public static function byEmail($email)
    {
      return static::whereEmail($email)->first();
    }
    public function hotelier()
    {
        return $this->hasOne('App\User');
    }
}
