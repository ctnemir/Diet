<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'dietition_id', 'disease_id', 'diet_method_id',
    ];

    public function disease(){
        return $this->hasOne(Disease::class,'id','disease_id');
    }
    public function dietMethod(){
        $data = $this->hasOne(DietMethod::class,'id','diet_method_id');
        //$data->method = json_decode($data->method,true);
        return $data;
    }
    public function dietitian(){
        return $this->hasOne(User::class,'id','dietitian_id');
    }

}
