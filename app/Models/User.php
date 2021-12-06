<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $table ='users'; 
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'password',
        'email',
        'address',
        'day_of_birth',
        'level',
        'created_at',
        'updated_at',
        'image'
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
    public function diploma()
    {
        return $this->hasMany(Diploma::class);
    }
    public function diplomaofuser()
    {
        return $this->hasOne(DiplomaOfUser::class,'id_diploma','id');
    }
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search){
            $queryData = $queryData->where('email','like','%'.$searchData.'%')->orWhere('name','like','%'.$searchData.'%');
        }
        return $queryData;
    }
}
