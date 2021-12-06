<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DiplomaOfUser extends Model
{
    use HasFactory;
    protected $table ="diploma_of_user";
    protected $fillable = [
        'id_user',
        'id_diploma',
        'time_start',
        'time_end',
        'rating',
        'date_issue',
        'user_accept',
        'level_unit',
        'created_at',
        'updated_at',
    ];
    public function diploma()
    {
        return $this->hasOne(Diploma::class,'id_diploma','id');
    }
    public function User()
    {
        return $this->hasMany(User::class,'id_user','id');
    }
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search && !empty($k)){
            $users =DB::table('users')->select('id')->where('name','like','%'.request()->search.'%')->limit(1)->get();
            $k = $users[0];
            $queryData = $queryData->where('level_unit','like','%'.$searchData.'%')->orWhere('id_user','=',$k);
        }
    }
}
