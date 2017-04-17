<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'positionid' => 'required|max:11',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
      $user = User::all();
      $lastUserID = User::orderBy('userid', 'desc')->pluck('userid')->first();
      $lastUserID = $lastUserID + 1;
      //
      // if ($data['positionid']=='1') {
      //   $employeecode = Str::upper('adm');
      // } elseif ($data['positionid']='2') {
      //   $employeecode = 'CEO';
      // } elseif ($data['positionid']='3') {
      //   $employeecode = 'COO';
      // } elseif ($data['positionid']='4') {
      //   $employeecode = 'CFO';
      // } elseif ($data['positionid']='5') {
      //   $employeecode = 'CTO';
      // } elseif ($data['positionid']='6') {
      //   $employeecode = 'CMO';
      // } elseif ($data['positionid']='7') {
      //   $employeecode = 'FIN';
      // } elseif ($data['positionid']='8') {
      //   $employeecode = 'HRD';
      // } elseif ($data['positionid']='9') {
      //   $employeecode = 'DEV';
      // } elseif ($data['positionid']='10') {
      //   $employeecode = 'EDI';
      // } elseif ($data['positionid']='11') {
      //   $employeecode = 'MAR';
      // } elseif ($data['positionid']='12') {
      //   $employeecode = 'SAL';
      // }
      if ($lastUserID < 10) {
        $employeeid = Str::upper('ARV' . '-00' . $lastUserID);
      } elseif ($lastUserID < 100) {
        $employeeid = Str::upper('ARV' . '-0' . $lastUserID);
      } else {
        $employeeid = Str::upper('ARV'  . '-' . $lastUserID);
      }

        return User::create([
            'employeeid' => $employeeid,
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'positionid' => $data['positionid'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
