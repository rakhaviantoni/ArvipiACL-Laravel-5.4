<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Press extends Model
{
  protected $table = "press";
  protected $primaryKey = 'id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['title', 'slug', 'category', 'description', 'userid'];
  public $timestamps = true;

  public function user() {
        return $this->belongsTo('App\User', 'userid');
    }
}
