<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'username', 'phone'
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

    public function findForPassport($username)
    {
        return $this->where(function ($query) use ($username) {
            $query->where('email', $username)
                  ->where('status', ENABLE)
                  ->where('deleted_at', null);
        })
        ->orWhere(function ($query) use ($username) {
            $query->where('username', $username)
                  ->where('status', ENABLE)
                  ->where('deleted_at', null);
        })
        ->orWhere(function ($query) use ($username) {
            $query->where('phone', $username)
                  ->where('status', ENABLE)
                  ->where('deleted_at', null);
        })->first();

    }

    /**
     * @param $accessToken
     * @return $this
     */
    public function withAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        $token = $this->token();

        // Define scope
        $arrScope = [
            1 => 'scope-admin',
            2 => 'scope-staff',
            3 => 'scope-user',
        ];

        $token->scopes = explode(',', $arrScope[$this->role]);
        return $this;
    }
}
