<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class News extends Model
{
  protected $table = "news";
  protected $primaryKey = 'id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['title', 'slug', 'datetime', 'category', 'description', 'userid'];
  public $timestamps = true;

  public function user() {
        return $this->belongsTo('App\User', 'userid');
    }
}
