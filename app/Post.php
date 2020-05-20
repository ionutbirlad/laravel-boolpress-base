<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  //solo se abbiamo un nome in altra lingua
  // protected $table = 'posts';


  protected $fillable = [
      'slug',
      'author',
      'title',
      'img',
      'body',
      'location',
      'published'
  ];
}
