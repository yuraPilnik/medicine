<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
class AuthController extends Controller
{
 	private $error;
	public function setStateError($error)
	{
		$this->error = $error;
	}
	public function getName()
	{
		return $this->name;	
	}
	public function getError()
	{
		return $this->error;
	}
    public function index()
    {
        return view('auth.registration');
    }
	public function create(){
		$this->setStateError(0);
		return view('auth.registration', ['error' => $this->getError()]);
	}
	public function store(Request $request, Patient $patient)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$password1 = $request->input('password1');
		$password2 = $request->input('password2');
		$age = $request->input('age');
		$login = $request->input('login');
		
		if($name == '' || $email == '' || $password1 == '' || $password2 == '' || $age == '' || $login == '')
		{
//			if anything is Empty
			$this->setStateError(2);
			return view('auth.registration', ['error' => $this->getError()]);
		}
		if($password1 != $password2)
		{
//			if passwords is not equal
			$this->setStateError(4);
			return view('auth.registration', ['error' => $this->getError()]);
		}
		if ($patient->isEmail($email) || $patient->isLogin($login))
		{
//			if email or login presented in database
			$this->setStateError(3);
			return view('auth.registration', ['error' => $this->getError()]);
		}
//		all right
		$this->setStateError(1);
		$patient->authentification($name, $email, $password2, $age, $login);
		return view('auth.registration', ['error' => $this->getError(), 'name' => $name]);
	}	
}
