<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Position extends Model
{
  protected $table = "position";
  protected $primaryKey = 'positionid';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['positionname'];

  public $timestamps = false;

  protected $casts = ['press' => 'boolean', 'users' => 'boolean', 'role' => 'boolean', 'news' => 'boolean', 'payroll' => 'boolean', 'employees' => 'boolean', 'recruitment' => 'boolean', 'marketing' => 'boolean', 'sales' => 'boolean'];

  public function user() {
        return $this->hasMany('App\User', 'positionid');
    }

    // public function press() {
    //   $this->press = $this->press ? false : true;
    //   $this->save();
    // }
    //
    // public function users() {
    //   $this->users = $this->users ? false : true;
    //   $this->save();
    // }
    //
    // public function news() {
    //   $this->news = $this->news ? false : true;
    //   $this->save();
    // }
    //
    // public function payroll() {
    //   $this->payroll = $this->payroll ? false : true;
    //   $this->save();
    // }
    //
    // public function employees() {
    //   $this->employees = $this->employees ? false : true;
    //   $this->save();
    // }
    //
    // public function recruitment() {
    //   $this->recruitment = $this->recruitment ? false : true;
    //   $this->save();
    // }
    //
    // public function marketing() {
    //   $this->marketing = $this->marketing ? false : true;
    //   $this->save();
    // }
    //
    // public function sales() {
    //   $this->sales = $this->sales ? false : true;
    //   $this->save();
    // }
    //
    public function changepress() {
      $this->press = $this->press ? false : true;
      $this->save();
    }

    public function changeusers() {
      $this->users = $this->users ? false : true;
      $this->save();
    }

    public function changenews() {
      $this->news = $this->news ? false : true;
      $this->save();
    }

    public function changepayroll() {
      $this->payroll = $this->payroll ? false : true;
      $this->save();
    }

    public function changeemployees() {
      $this->employees = $this->employees ? false : true;
      $this->save();
    }

    public function changerecruitment() {
      $this->recruitment = $this->recruitment ? false : true;
      $this->save();
    }

    public function changemarketing() {
      $this->marketing = $this->marketing ? false : true;
      $this->save();
    }

    public function changesales() {
      $this->sales = $this->sales ? false : true;
      $this->save();
    }

    // public function change($press,$users,$news,$payroll,$employees,$recruitment,$marketing,$sales) {
    //   if ($press) {
    //     $this->press = $this->press ? false : true;
    //     $this->save();
    //   } elseif ($users) {
    //     $this->users = $this->users ? false : true;
    //     $this->save();
    //   } elseif ($news) {
    //     $this->news = $this->news ? false : true;
    //     $this->save();
    //   } elseif ($payroll) {
    //     $this->payroll = $this->payroll ? false : true;
    //     $this->save();
    //   } elseif ($employees) {
    //     $this->employees = $this->employees ? false : true;
    //     $this->save();
    //   } elseif ($recruitment) {
    //     $this->recruitment = $this->recruitment ? false : true;
    //     $this->save();
    //   } elseif ($marketing) {
    //     $this->marketing = $this->marketing ? false : true;
    //     $this->save();
    //   } elseif ($sales) {
    //     $this->sales = $this->sales ? false : true;
    //     $this->save();
    //   }
    // }
}
