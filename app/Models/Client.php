<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'company_name'

    ];


    protected $guarded = [];
  
    public function user() 
    { 
      return $this->morphOne('App\Models\User', 'profile');
    }
  
}
