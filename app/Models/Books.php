<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function user(){
return $this-> belongsTo(User::class);
    }

    public function ratings(){ 
        return $this -> hasMany(Rating::class);
    }

    protected $fillable = ['user_id', 'title', 'description',];
}
