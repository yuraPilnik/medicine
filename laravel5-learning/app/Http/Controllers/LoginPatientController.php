<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\Doctor;
use App\write;
class LoginPatientController extends Controller
{
	private $anwerRequest;
	private $pacientTrueFalse;
	public function setPacientTrueFalse($pacientTrueFalse)
	{
		$this->pacientTrueFalse = $pacientTrueFalse;
	}
	public function getPacientTrueFalse()
	{
		return $this->pacientTrueFalse;
	}
	public function setAnswerRequest($answer)
	{
		$this->anwerRequest = $answer;
	}
	public function getAnswerRequest()
	{
		return $this->anwerRequest;
	}
	public function getWritesIds($resId)
	{
		$array_write_id = null;
		foreach(Write::where('id_patients', $resId)->cursor() as $cur)
		{
			$array_write_id[] = $cur->id;
		}
		return $array_write_id;
	}
	public function getWritesTypes($resId)
	{
		$array_write_types = null;
		foreach(Write::where('id_patients', $resId)->cursor() as $cur)
		{
			$array_write_types[] = $cur->type;
		}
		return $array_write_types;
	}
	public function getWritesDates($resId)
	{
		$array_write_dates = null;
		foreach(Write::where('id_patients', $resId)->cursor() as $cur)
		{
			$array_write_dates[] = $cur->dates;
		}
		return $array_write_dates;
	}
	
	public function loginAndPassword($login, $password)
	{
		$resfind = false;
		foreach (Patient::where('login', $login)->where('passwd', $password)->cursor() as $login) 
		{
			$resfind = true;
		}
		return $resfind;
	}
	public function getNamePatient($login, $password)
	{
		foreach (Patient::where('login', $login)->where('passwd', $password)->cursor() as $current) 
		{
			$resName = $current->name;
		}
		return $resName;
	}
    public function create()
	{		
		$this->setAnswerRequest(0);
		return view('login.signinPatient', ['answer' => $this->getAnswerRequest()]);
	}
	
	// request all information about doctors from database
	public function getInfoAboutDoctorsId()
	{
		$array_id = null;
		$doctors = Doctor::where('workingState', 1)->get();	
		foreach ($doctors as $current)
		{	
			$array_id[] = $current->id;  
		}
		return $array_id;
	}
	public function getInfoAboutDoctorDescription()
	{
		$array_description = null;
		$doctors = Doctor::where('workingState', 1)->get();	
		foreach ($doctors as $current)
		{	$array_description[] = $current->description;
		}
		return $array_description;
	}
	public function getInfoAboutDoctorsName()
	{
		$array_name = null;
		$doctors = Doctor::where('workingState', 1)->get();	
		foreach ($doctors as $current)
		{	
		 	$array_name[] = $current->fio;
		}
		return $array_name;
	}
	public function getInfoAboutDoctorsStanding()
	{
		$array_standing = null;
		$doctors = Doctor::where('workingState', 1)->get();	
		foreach ($doctors as $current)
		{	
		 	$array_standing[] = $current->standing;
		}
		return $array_standing;
	}
	public function getIdPacient($login, $password)
	{
		foreach (Patient::where('login', $login)->where('passwd', $password)->cursor() as $current) 
		{
			$resId = $current->id;
		}
		return $resId;
	}
	public function getArraySpecialtyDoctor()
	{
		$resarray = null;
		foreach(Doctor::where('workingState', 1)->cursor() as $current)
		{
			$resarray[] = $current->specialty;
		}
		return $resarray;
	}
	public function store(Request $request)
	{	
		$login = $request->input('login1');
		$password = $request->input('passwd1');
		
		if($password == '' || $login == '')
		{
//			if anything is empty 
			$this->setAnswerRequest(1);
			return view('login.signinPatient', ['answer' => $this->getAnswerRequest()]); 
		}else if($this->loginAndPassword($login, $password))
		{
//			if found password and login
			$resid = $this->getIdPacient($login, $password);
			$writesIds = $this->getWritesIds($resid);
			$writeTypes = $this->getWritesTypes($resid);
			$writeDates = $this->getWritesDates($resid);			
			$namePatients = $this->getNamePatient($login, $password);
			$array_id = $this->getInfoAboutDoctorsId();
			$array_description = $this->getInfoAboutDoctorDescription();
			$array_name = $this->getInfoAboutDoctorsName();
			$array_standing = $this->getInfoAboutDoctorsStanding();
			$array_specialtys = $this->getArraySpecialtyDoctor();
//			dd($array_specialtys);
			$array_specialtys_uniq = array_unique($array_specialtys);
			$array_specialtys_uniq = array_values($array_specialtys_uniq);

			$this->setPacientTrueFalse(true); 
			$id_patient = $this->getIdPacient($login, $password);
			
			return view('login.room', ['patient' => $this->getPacientTrueFalse(), 'loginPatient' => $login, 'array_ids' => $array_id, 'array_description' => $array_description, 'array_name' => $array_name, 'array_standing' => $array_standing, 'namePatient' => $namePatients, 'id_patient' => $id_patient, 'ids' => $writesIds, 'types' => $writeTypes, 'dates' => $writeDates, 'array_specialtys' => $array_specialtys, 'array_specialtys_uniq' => $array_specialtys_uniq, 'password' => $password]);
		}else{
//			if not found password or login
			$this->setAnswerRequest(2);
			return view('login.signinPatient', ['answer' => $this->getAnswerRequest()]);
		}		 
	}
//	delete entry from table writes 
	public function delete(Request $request)
	{
		Write::where('id', $request->input('id_del'))->delete();
		$login = $request->input('login');
		$password = $request->input('password');
		$resid = $this->getIdPacient($login, $password);
		$writesIds = $this->getWritesIds($resid);
		$writeTypes = $this->getWritesTypes($resid);
		$writeDates = $this->getWritesDates($resid);			
		$namePatients = $this->getNamePatient($login, $password);
		$array_id = $this->getInfoAboutDoctorsId();
		$array_description = $this->getInfoAboutDoctorDescription();
		$array_name = $this->getInfoAboutDoctorsName();
		$array_standing = $this->getInfoAboutDoctorsStanding();
		$array_specialtys = $this->getArraySpecialtyDoctor();
		$array_specialtys_uniq = array_unique($array_specialtys);
		$array_specialtys_uniq = array_values($array_specialtys_uniq);
		$this->setPacientTrueFalse(true); 
		$id_patient = $this->getIdPacient($login, $password);		
		return view('login.room', ['patient' => $this->getPacientTrueFalse(), 'loginPatient' => $login, 'array_ids' => $array_id, 'array_description' => $array_description, 'array_name' => $array_name, 'array_standing' => $array_standing, 'namePatient' => $namePatients, 'id_patient' => $id_patient, 'ids' => $writesIds, 'types' => $writeTypes, 'dates' => $writeDates, 'array_specialtys' => $array_specialtys, 'array_specialtys_uniq' => $array_specialtys_uniq, 'password' => $password]);		
	}
}
