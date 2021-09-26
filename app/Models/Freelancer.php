<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
      'name',
      'country',
      'work_title',
      'service_id',
      'education',
      'languages',
      'bio',
      'photo'

    ];


    protected $guarded = [];

    public function user() 
    { 
      return $this->morphOne('App\Models\User', 'profile');
    }
  
}
