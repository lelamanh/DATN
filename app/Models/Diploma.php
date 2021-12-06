<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Diploma extends Model
{
    use HasFactory;
    protected $table ="diploma";
    protected $fillable = [
        'type',
        'field',
    ];
    public function diplomaofuser()
    {
        return $this->hasOne(DiplomaOfUser::class,'id_diploma','id');
    }
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search){
            $queryData = $queryData->where('type','like','%'.$searchData.'%')->orWhere('field','like','%'.$searchData.'%');
        }
        return $queryData;
    }
}
