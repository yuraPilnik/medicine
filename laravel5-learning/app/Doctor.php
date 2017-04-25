<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	public function getAllFromDoctor()
	{
		return Doctor::all();
	}
    public function getArraySpecilalty()
	{
		$resarray = null;
		foreach(Doctor::where('workingState', 1)->cursor() as $current)
		{
			$resarray[] = $current->specialty;
		}
		$resarray = array_unique($resarray);
		$resarray = array_values($resarray);
		return $resarray;
	}
}
