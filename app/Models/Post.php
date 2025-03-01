<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'slug',
    'user_id',
    'content',
  ];

  // protected $with = ['user'];

  public function comments()
  {
    return $this->hasMany(Comments::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
