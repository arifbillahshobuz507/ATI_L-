<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $guarded=[];

    
  // Relation with User One to One
  public function user (){
    $this->belongsTo(User::class);
}
}
