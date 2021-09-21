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
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id', 'id');
        //O exemplo acima é apenas um modelo para exibir a forma que deve ser escrita quando o DEV nao utiliza nomenclatura padrão.
        //ou seja, caso ele resolva escrever a foreingkey dentro da tabela address como: myId_user. logo, deveriamos escrever:
        // $this->hasOne(Address::class, 'myId_user', 'id');
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
