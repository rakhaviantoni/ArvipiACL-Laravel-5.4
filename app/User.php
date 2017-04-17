<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use App\Position;
use App\Press;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $table = "users";
    protected $primaryKey = 'userid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employeeid', 'name', 'username', 'email', 'positionid', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function position() {
        return $this->belongsTo('App\Position', 'positionid');
    }

    public function press() {
          return $this->hasMany('App\Press', 'userid');
      }

    public function change($newposition) {
        $this->positionid = $newposition;
        $this->save();
    }
}
