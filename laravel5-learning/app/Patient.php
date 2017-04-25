<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	public function isEmail($emailFind){
		$resfind = false;
		$resfind = DB::table('patients')->select('email')->where("email", $emailFind)->get();
		return $resfind;
	}
	public function isLogin($loginFind){
		$resfind = false;
		$resfind = DB::table('patients')->select('login')->where("login", $loginFind)->get();
		return $resfind;
	} 
	public function authentification($name, $email, $password2, $age, $login){
		DB::table('patients')->insert([
    		['name' => $name, 
    		'email' => $email,
    		'login' => $login,
    		'passwd' => $password2,
    		'age' => $age]
		]);		
	}
}
